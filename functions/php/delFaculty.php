<?php
    session_start();
	include "config.php";
    
    $id = $_POST['id'];

    $query = "DELETE FROM `user-faculty` WHERE `id` = '$id'";

    $result = $con->query($query);

	if($result){
		header("location:../../adminFaculty.php");
	}else{
		header("location:../../adminFaculty.php");
	}
?>