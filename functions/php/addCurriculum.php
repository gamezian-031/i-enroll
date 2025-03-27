<?php
    session_start();
    include "config.php";
    
    $idCurr = $_POST['idCurr'];
    $idCourse = $_POST['idCourse'];
    $nameCurr = $_POST['nameCurr'];
    $department = $_POST['department'];

    $query = "INSERT INTO `curriculums` (`idCurr`, `idCourse`, `nameCurr`, `department`) VALUES ('$idCurr', '$idCourse', '$nameCurr', '$department')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminCurriculum.php");
	}else{
		header("location:../../adminCurriculum.php");
	}
?>