<?php
    session_start();
    include "config.php";
    
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $department = $_POST['department'];
    $curriculum = $_POST['curriculum'];
    $password = $_POST['password'];
    $emailParse = str_replace(' ', '', strtolower($lName .'.'. $fName));
    $idFaculty = $emailParse;

    $email = $emailParse . "@tcu.edu.ph";

    $encPass = dataEncrypt($idFaculty, $password);
    $encEmail = dataEncrypt($idFaculty, $email);

    $query =    "INSERT INTO `user-faculty` (`fName`, `mName`, `lName`, `idFaculty`, `password`, `department`, `curriculum`, `email`) 
                VALUES ('$fName', '$mName', '$lName', '$idFaculty', '$encPass', '$department', '$curriculum', '$encEmail')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminFaculty.php");
	}else{
		header("location:../../adminFaculty.php");
	}
?>