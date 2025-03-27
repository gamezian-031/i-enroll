<?php
    session_start();
    include "config.php";
    
    $section = $_POST['section'];
    $idCourse = $_POST['idCourse'];
    $type = $_POST['type'];

    $checkQuery = $con -> query("SELECT * FROM `sections` WHERE `section` = '$section'") or die($con -> error);
    if(mysqli_num_rows($checkQuery) > 0){
        echo '<script>alert("Section Exists!");</script>';
        echo "<script>window.location.href='../../adminSections.php';</script>";
    }
    else{
        $query = "INSERT INTO `sections` (`section`, `idCourse`, `type`) VALUES ('$section', '$idCourse', '$type')";

        $result = $con->query($query);

        if($result){
            header("location:../../adminSections.php");
        }else{
            header("location:../../adminSections.php");
	}
    }

    
?>