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
            include "config.php";
            
            $id = $_POST['id'];
            $type = $_POST['type'];
            $oldPass = $_POST['oldPass'];
            $newPass = $_POST['newPass'];
            $newPassC = $_POST['newPassC'];

            
            if ($type == 'student'){
                $query = $con -> query("SELECT * from `user-student` WHERE `idStud` = '$id'") or die($con -> error);
                $data = $query -> fetch_assoc();

                $userChk = $data['idStud'];
                $passChk = dataDecrypt($userChk, $data['password']);

                $enPass = dataEncrypt($userChk, $newPass);

                if($newPass == $newPassC){
                    if($id == $userChk){
                        if($oldPass == $passChk){
                            $query = "UPDATE `user-student` 
                
                                    SET `password` = '$enPass'
                    
                                    WHERE `idStud` = '$id'";
            
                            $result = $con->query($query);
            
                            if($result){
                                $time = date_create('now');
                                $dt = date_format($time, 'Y-m-d H:i:s');
                                $dl = date_format($time, 'YmdHis');
            
                                $source = $id;
                                $target = $id;
                                $action = 'change password';
                                $idParse = substr($target, 0, 2) . "ed" . $dl;
                                $idLog = hash('sha256', $idParse);
            
                                $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
                                $log = $con->query($logQuery);
            
                                echo "<script>alert('Password Changed'); window.location.href='../../studGrades.php';</script>";
                            }else{
                                echo "<script>alert('Password Not Changed'); window.location.href='../../studGrades.php';</script>";
                            }
                        } else{
                            echo "<script>alert('Wrong Password'); window.location.href='../../studGrades.php';</script>";
                        }
                    }else{
                        echo "<script>alert('Invalid Information'); window.location.href='../../studGrades.php';</script>";
                    }
                }else{
                    echo "<script>alert('New Password do not Match'); window.location.href='../../studGrades.php';</script>";
                }   
            } elseif ($type == 'faculty'){
                $query = $con -> query("SELECT * from `user-faculty` WHERE `idFaculty` = '$id'") or die($con -> error);
                $data = $query -> fetch_assoc();
            
                $userChk = $data['idFaculty'];
                $passChk = dataDecrypt($userChk, $data['password']);

                $enPass = dataEncrypt($userChk, $newPass);

                if($newPass == $newPassC){
                    if($id == $userChk){
                        if($oldPass == $passChk){
                            $query =    "UPDATE `user-faculty` 
                
                                SET `password` = '$enPass'
                
                                WHERE `idFaculty` = '$id'";

                                $result = $con->query($query);

                                if($result){
                                    $time = date_create('now');
                                    $dt = date_format($time, 'Y-m-d H:i:s');
                                    $dl = date_format($time, 'YmdHis');

                                    $source = $id;
                                    $target = $id;
                                    $action = 'change password';
                                    $idParse = substr($target, 0, 2) . "ed" . $dl;
                                    $idLog = hash('sha256', $idParse);

                                    $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
                                    $log = $con->query($logQuery);

                                    echo "<script>alert('Password Changed'); window.location.href='../../faculSects.php';</script>";
                                }else{
                                    echo "<script>alert('Password Not Changed'); window.location.href='../../faculSects.php';</script>";
                                }
                        
                        } else{
                            echo "<script>alert('Wrong Password'); window.location.href='../../faculSects.php';</script>";
                        }
                    }else{
                        echo "<script>alert('Invalid Info'); window.location.href='../../faculSects.php';</script>";
                    }
                }else{
                    echo "<script>alert('New Password do not Match'); window.location.href='../../faculSects.php';</script>";
                }
            }
        ?>
    </body>
</html>