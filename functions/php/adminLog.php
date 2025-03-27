<?php
    session_start();
    include "config.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT * from `user-admin` WHERE `username` = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $idAdmin = $data['idAdmin'];

    $userChk = $data['username'];
    $passChk = dataDecrypt($idAdmin, $data['password']) ;
    if($user == $userChk){
        if($pass == $passChk){
            $_SESSION['idAdmin'] = $data['idAdmin'];
            header("location:../../adminDash.php");
        } else{
            header("location:../../adminLogin.php");
        }
    } else{
        header("location:../../adminLogin.php");
    }

?>
