<?php
    session_start();
	include('config.php');
    
    $id = $_POST['id'];

    $query = "DELETE FROM `departments` WHERE `id` = '$id'";

    $result = $con->query($query);

	if($result){
		header("location:../../adminDepartments.php");
	}else{
		header("location:../../adminDepartments.php");
	}
?>