<?php
    session_start();
    include "config.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require '../../assets/php/PHPMailer-6.7.1/src/Exception.php';
    require '../../assets/php/PHPMailer-6.7.1/src/PHPMailer.php';
    require '../../assets/php/PHPMailer-6.7.1/src/SMTP.php';

    $countQuery = "SELECT COUNT(`id`) as `totCount` FROM `user-student`";
    $resQuery = $con->query($countQuery);
    $rowCount = $resQuery->fetch_assoc();
    $count = $rowCount['totCount'] + 1;


    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $civStat = $_POST['civStat'];
    $contactNo = $_POST['contactNo'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $program = $_POST['program'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    
    

    if($status == "N"){
        $idStud= substr($currYear, 2, 2) . "-" . sprintf('%05d', $count);
        $yrLvl = 1;
        $yrReg = $currYear;
    }else{
        $yrLvl = $_POST['yrLvl'];
        $yrReg = $_POST['yrReg'];
        $idStud = $_POST['idStud'];
    }
    
    $password = generateRandomString(8);


    $enCont = dataEncrypt($idStud, $contactNo);
    $enPass = dataEncrypt($idStud, $password);
    $enEmail = dataEncrypt($idStud, $email);

    $uploadOk = 1;
    $target_dir = "../../extfiles/validator/";
    $target_file = $target_dir . basename($_FILES["validator"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>
        window.alert('Sorry, a file with the same name exists.');
        </script>";
    $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["validator"]["size"] > 500000) {
        echo "<script>
        window.alert('Sorry, the file is too large.');
        </script>";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "pdf") {
        echo "<script>
        window.alert('Sorry, PDF files are only allowed.');
        </script>";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>
        window.alert('Sorry, file upload failed.');
        window.location.href = '../../home.php';
        </script>";
    // if everything is ok, try to upload file
    } else {
        $query =   "INSERT INTO `user-student` (`idStud`, `fName`, `mName`, `lName`, `address`, `birthdate`, `sex`, `civStat`, `contactNo`, `nationality`, `religion`, `program`, `yrReg`, `yrLvl`, `password`, `email`, `status`) 
                    VALUES ('$idStud', '$fName', '$mName', '$lName', '$address', '$birthdate', '$sex', '$civStat', '$enCont', '$nationality', '$religion', '$program', '$yrReg', '$yrLvl', '$enPass', '$enEmail', '$status')";

        $result = $con->query($query);

        if($result && $uploadOk == 1){ 
            $fileName = $target_dir . $idStud . "." . $imageFileType;
            if (move_uploaded_file($_FILES["validator"]["tmp_name"], $fileName)) {
                echo "<script>
                window.alert('File upload successful!');
                </script>";
            } else{}
            
            $time = date_create('now');
            $dt = date_format($time, 'Y-m-d H:i:s');
            $dl = date_format($time, 'YmdHis');

            $source = 'SYSTEM';
            $target = $idStud;
            $action = 'ADD STUDENT';
            $idParse = $target . "cstud" . $dl;
            $idLog = hash('sha256', $idParse);

            $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
            $log = $con->query($logQuery);

            $currQuery = "SELECT * FROM `curriculums` WHERE `idCurr` = '$program'";
            $currData = $con->query($currQuery);
            $currVal = $currData -> fetch_assoc();
            $courCode = $currVal['idCourse'];

            $subQuery = "SELECT * FROM `subject` WHERE `program` = '$courCode'";
            $subData = $con->query($subQuery);
            while($subjects = $subData->fetch_assoc()){
                $course = $subjects['idSub'];
                $units = $subjects['unitTot'];
                $subStatus = 'O';
                $statQuery = "INSERT INTO `student-academics` (`idStud`, `idSub`, `units`, `status`) VALUES ('$idStud', '$course', '$units', '$subStatus')";
                $acadQuery = $con->query($statQuery);
            }

            $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'tcu.edu123@gmail.com';                     //SMTP username
            $mail->Password   = 'aaroujsfakgvxtrj';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('tcu.edu123@gmail.com', 'Taguig City University');
            $mail->addAddress($email);               //Name is optional

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Student Registration Credentials';
            $mail->Body    = 
            'This is the credentials for the account you registered: <br> 
            Username: <b>' . $idStud . '</b> <br>
            Password: <b>' . $password . '</b> <br>

            Please wait for validation before logging in!
            ' 
            ;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
        }

        } else {header("location:../../home.php");}
            ?>

            <!doctype html>
            <html>
                <head>
                <title> i-Enroll System </title>

                <link rel="stylesheet" href="../../assets/css/style.css">
                <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
                <link rel="stylesheet" href="../../lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

                <script src="../../lib/js/bootstrap.bundle.min.js"></script>
                <script src="../../lib/js/jquery-3.6.1.min.js"></script>
                </head>
                <body class="">
                    <div class="d-flex flex-column align-items-center justify-content-center gap-2 min-vh-100 w-100" >
                        <h3>
                            Your Credentials have been sent to the email you registered with. <br>
                            Please wait for admin approval.
                        </h3>
                        
                        <h3>Note: If you are a recurring student (Regular/Irregular),</h3>
                        <h3> please wait for record processing before enrollment.</h3>
                        <a class="btn btn-lg btn-success py-1 px-2" href="../../index.php">
                        Proceed to Home Page
                        </a>
                    </div>
                </body>
            </html>
	<?php }
?>

