<?php
    include('config.php');
    
    $idAdmin = $_POST['idAdmin'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $encPass = dataEncrypt($idAdmin, $password);
    $encEmail = dataEncrypt($idAdmin, $email);

    $query =    "UPDATE `user-admin` 

                SET `fName` = '$fName', `mName` = '$mName',`lName` = '$lName', 
                `username` = '$username',`password` = '$encPass', `email` = '$encEmail'

                WHERE `idAdmin` = '$idAdmin';";

    $result = $con->query($query);

	if($result){
		header("location:../../adminAccounts.php");
	}else{
		header("location:../../adminAccounts.php");
	}
?>