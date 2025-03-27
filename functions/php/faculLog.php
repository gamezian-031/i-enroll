<?php
    session_start();
    include "config.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT * from `user-faculty` WHERE `idFaculty` = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['idFaculty'];
    $passChk = dataDecrypt($userChk, $data['password']);
    if($user == $userChk){
        if($pass == $passChk){
            $_SESSION['faculUser'] = $data['idFaculty'];
            header("location:../../faculSects.php");
        } else{
            header("location:../../facultyLogin.php");
        }
    } else{
        header("location:../../facultyLogin.php");
    }

?>
