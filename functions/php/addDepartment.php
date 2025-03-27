<?php
    session_start();
    include "config.php";
    
    $idDept = $_POST['idDept'];
    $nameDept = $_POST['nameDept'];

    $query = "INSERT INTO `departments` (`idDept`, `nameDept`) VALUES ('$idDept', '$nameDept')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminDepartments.php");
	}else{
		header("location:../../adminDepartments.php");
	}
?>