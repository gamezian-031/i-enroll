<?php
    session_start();
	include('config.php');
    
    $id = $_POST['id'];

    $query = "DELETE FROM `curriculums` WHERE id = $id";

    $result = $con->query($query);

	if($result){
		header("location:../../adminCurriculum.php");
	}else{
		header("location:../../adminCurriculum.php");
	}
?>