<?php
    session_start();
    include "config.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require '../../assets/php/PHPMailer-6.7.1/src/Exception.php';
    require '../../assets/php/PHPMailer-6.7.1/src/PHPMailer.php';
    require '../../assets/php/PHPMailer-6.7.1/src/SMTP.php';

    $user = $_POST['username'];

    $studQuery = $con -> query("SELECT * from `user-student` WHERE `idStud` = '$user'") or die($con -> error);
    if(mysqli_num_rows($studQuery) > 0): 
        $studRes = $studQuery -> fetch_assoc();
        $studEmail = dataDecrypt($user, $studRes['email']);
        $password = dataDecrypt($user, $studRes['password']);

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
        $mail->addAddress($studEmail);               //Name is optional

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Student Forgot Password';
        $mail->Body    = 
        'This is the credentials for the account you registered (Forgotten Password): <br> 
        Password: <b>' . $password . '</b> <br>
        ' 
        ;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        } catch (Exception $e) {
        }

    else:
    endif;
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
                            Your password is sent to your email.
                        </h3>
                        
                        <h3>Note: If you are a recurring student (Regular/Irregular),</h3>
                        <h3> please wait for record processing before enrollment.</h3>
                        <a class="btn btn-lg btn-success py-1 px-2" href="../../index.php">
                        Proceed to Home Page
                        </a>
                    </div>
                </body>
            </html>
	<?php 
?>

