<?php
    session_start();
    include "config.php";
    
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $emailParse = str_replace(' ', '', strtolower($lName .'.'. $fName));
    $email = $emailParse . "@tcu.edu.ph";
    $idAdmin = 'admin' . $currYear . $emailParse;

    $encPass = dataEncrypt($idAdmin, $password);
    $encEmail = dataEncrypt($idAdmin, $email);

    $query =    "INSERT INTO `user-admin` (`idAdmin`, `fName`, `mName`, `lName`, `username`, `password`, `email`) 
                VALUES ('$idAdmin', '$fName', '$mName', '$lName', '$username', '$encPass', '$encEmail')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminAccounts.php");
	}else{
		header("location:../../adminAccounts.php");
	}
?>