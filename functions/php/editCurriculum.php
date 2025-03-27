<?php
    include('config.php');
    
    $id = $_POST['id'];
    $idCurr = $_POST['idCurr'];
    $idCourse = $_POST['idCourse'];
    $nameCurr = $_POST['nameCurr'];

    $query =    "UPDATE`curriculums` 
                SET `idCurr` = '$idCurr', `idCourse` = '$idCourse', `nameCurr` = '$nameCurr'
                WHERE id = $id;
                
                ";

    $result = $con->query($query);

	if($result){
		header("location:../../adminCurriculum.php");
	}else{
		header("location:../../adminCurriculum.php");
	}
?>