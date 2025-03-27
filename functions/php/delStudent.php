<?php
    session_start();
	include('config.php');
    
    $id = $_POST['id'];

	$searchQuery = "SELECT * FROM `user-student` WHERE `id` = '$id'";
	$seq = $con->query($searchQuery);
	$seqData = $seq -> fetch_assoc();
	$idStud = $seqData['idStud'];

	$delquery = "DELETE FROM `student-academics` WHERE `idStud` = '$idStud'";
	$con->query($delquery);

	$query = "DELETE FROM `user-student` WHERE id = $id";
    $result = $con->query($query);

	if($result){
		header("location:../../adminDash.php");
	}else{
		header("location:../../adminDash.php");
	}
?>