<?php
    include('config.php');
    
    $id = $_POST['id'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $idFaculty = $_POST['idFaculty'];
    $department = $_POST['department'];
    $curriculum = $_POST['curriculum'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $encPass = dataEncrypt($idFaculty, $password);
    $encEmail = dataEncrypt($idFaculty, $email);

    $query =    "UPDATE `user-faculty` 

                SET `fName` = '$fName', `mName` = '$mName',`lName` = '$lName', 
                `idFaculty` = '$idFaculty', `department` = '$department', `curriculum` = '$curriculum',
                `password` = '$encPass', `email` = '$encEmail'

                WHERE id = $id;";

    $result = $con->query($query);

	if($result){
		header("location:../../adminFaculty.php");
	}else{
		header("location:../../adminFaculty.php");
	}
?>