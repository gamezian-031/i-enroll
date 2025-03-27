<?php
    session_start();
	include "config.php";
    
    $id = $_POST['id'];

    $query = "DELETE FROM `user-admin` WHERE id = $id";

    $result = $con->query($query);

	if($result){
		header("location:../../adminAccounts.php");
	}else{
		header("location:../../adminAccounts.php");
	}
?>