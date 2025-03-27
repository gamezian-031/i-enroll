<?php
    session_start();
    include "config.php";
    
    $idSub = $_POST["idSub"];
    $section = $_POST["section"];
    $idFaculty = $_POST["idFac"];
    $studLimit = $_POST["studLimit"];
    $rmAssign = $_POST["rmAssign"];
    $days = $_POST["days"];
    $timeIni = $_POST["timeIni"];
    $timeEnd = $_POST["timeEnd"];


    $checkQuery = $con -> query("SELECT * FROM `schedule` WHERE `section` = '$section' and `idSub` = '$idSub'") or die($con -> error);
    if(mysqli_num_rows($checkQuery) > 0){
        echo '<script>alert("Section has Schedule!");</script>';
        echo "<script>window.location.href='../../adminSchedules.php';</script>";
    }
    else{
        $query = "INSERT INTO `schedule` (`idSub`, `section`, `faculty`, `studLimit`, `room`, `days`, `timeIni`, `timeEnd`) VALUES ('$idSub', '$section', '$idFaculty', '$studLimit', '$rmAssign', '$days', '$timeIni', '$timeEnd')";

        $result = $con->query($query);
    
        if($result){
            $time = date_create('now');
            $dt = date_format($time, 'Y-m-d H:i:s');
            $dl = date_format($time, 'YmdHis');
    
            $source = $_SESSION['idAdmin'];
            $target = $section;
            $action = 'ADD SECTION';
            $idParse = substr($target, 0, 2) . "cs" . $dl;
            $idLog = hash('sha256', $idParse);
    
            $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
            $log = $con->query($logQuery);
    
    
            header("location:../../adminSchedules.php");
        }else{
            header("location:../../adminSchedules.php");
        }
    }

?>