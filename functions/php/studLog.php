<!DOCTYPE html>
<html>
    <head>
        <title> i-Enroll System </title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>
        <script src="functions/js/formValidate.js"></script>
    </head>

    <body>

    <?php
    session_start();
    include "config.php";
    include_once "funcs.php";


    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT `idStud`, `password`, `validation` FROM `user-student` WHERE `idStud` = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['idStud'];
    $chkEnPass = $data['password'];
    $passChk = dataDecrypt($userChk, $chkEnPass);
    $valid = $data['validation'];

    if($user == $userChk){
        if($pass == $passChk){
            if($valid == "T"){
            $_SESSION['studUser'] = $data['idStud'];

            $codeQuery = $con -> query("SELECT * from `enroll-codes` WHERE (`idStud` = '$user' AND `year` = '$currYear' AND `semester` = '$currSem')") or die($con -> error);
            if(mysqli_num_rows($codeQuery) > 0):
                $codeRes = $codeQuery -> fetch_assoc();
                $enrollCode = $codeRes['enrollCode'];
                $_SESSION['enrollCode'] = $enrollCode;
            else:
                $enrollCode = generateRandomString(30);
                $checkQuery = $con -> query("SELECT * from `enroll-codes` WHERE `enrollCode` = '$enrollCode'") or die($con -> error);
                if(mysqli_num_rows($codeQuery) > 0):
                else:
                    $_SESSION['enrollCode'] = $enrollCode;
                    $codeIn = $con -> query("INSERT INTO `enroll-codes` (`enrollCode`, `idStud`, `year`, `semester`) VALUES ('$enrollCode', '$user', '$currYear', '$currSem')") or die($con -> error);
                endif;
            endif;

            echo '<script>alert("Logged In!");</script>';
            echo "<script>window.location.href='../../studGrades.php';</script>";
            } else{
                echo '<script>alert("Student not Validated! Contact Registrars Office for validation!");</script>';
                echo "<script>window.location.href='../../studLogin.php';</script>";
            }
        } else{
            echo '<script>alert("Wrong Password!")</script>';
            echo "<script>window.location.href='../../studLogin.php';</script>";
        }
    } else{
        echo '<script>alert("No User Data!")</script>';
        echo "<script>window.location.href='../../studLogin.php';</script>";
    }
    
    ?>

    </body>
</html>
