<?php
    session_start();
    include "config.php";
    
    $id = $_POST['id'];
    $idSub = $_POST['idSub'];
    $name = $_POST['name'];
    $name = str_replace ("'","\'",$name);
    $program = $_POST['program'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $unitLec = $_POST['unitLec'];
    $unitLab = $_POST['unitLab'];
    $unitTot = $unitLec + $unitLab;
    $prerequisite = $_POST['prerequisite'];

    $query =    "UPDATE `subject` 

                SET `idSub` = '$idSub', `name` = '$name',`semester` = '$semester', `year` = '$year', 
                `unitLec` = '$unitLec', `unitLab` = '$unitLab', `unitTot` = '$unitTot',
                `program` = '$program', `prerequisite` = '$prerequisite'

                WHERE `id` = '$id';";

    $result = $con->query($query);

	if($result){
        $time = date_create('now');
        $dt = date_format($time, 'Y-m-d H:i:s');
        $dl = date_format($time, 'YmdHis');

        $source = $_SESSION['idAdmin'];
        $target = $idSub;
        $action = 'edit / change';
        $idParse = substr($target, 0, 2) . "ed" . $dl;
        $idLog = hash('sha256', $idParse);

        $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
        $log = $con->query($logQuery);
		header("location:../../adminSubjects.php");
	}else{
		header("location:../../adminSubjects.php");
	}
?>