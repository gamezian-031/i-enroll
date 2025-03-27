<?php
    include('config.php');
    
    $id = $_POST['id'];
    $idDept = $_POST['idDept'];
    $nameDept = $_POST['nameDept'];

    $query =    "UPDATE`departments` 
                SET `idDept` = '$idDept', `nameDept` = '$nameDept'
                WHERE id = $id;
                
                ";

    $result = $con->query($query);

	if($result){
		header("location:../../adminDepartments.php");
	}else{
		header("location:../../adminDepartments.php");
	}
?>