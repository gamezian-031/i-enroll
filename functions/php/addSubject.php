<?php
    session_start();
    include "config.php";
    
    

    $idSub = $_POST["idSub"];
    $iname = $_POST["name"];
    $program = $_POST["program"];
    $year = $_POST["year"];
    $semester = $_POST["semester"];
    $unitLec = $_POST["unitLec"];
    $unitLab = $_POST["unitLab"];
    $unitTot = $unitLec + $unitLab;
    $prerequisite = $_POST["prerequisite"];
    $name = str_replace ("'","\'",$iname);


    $query = "INSERT INTO `subject` (`idSub`, `name`, `unitLec`, `unitLab`, `unitTot`, `semester`, `year`, `program`, `prerequisite`) VALUES ('$idSub', '$name', '$unitLec', '$unitLab', '$unitTot', '$semester', '$year', '$program', '$prerequisite')";

    $result = $con->query($query);

	if($result){
        $time = date_create('now');
        $dt = date_format($time, 'Y-m-d H:i:s');
        $dl = date_format($time, 'YmdHis');

        $source = $_SESSION['idAdmin'];
        $target = $idSub;
        $action = 'create / add';
        $idParse = substr($target, 0, 2) . "ca" . $dl;
        $idLog = hash('sha256', $idParse);

        $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
        $log = $con->query($logQuery);


		header("location:../../adminSubjects.php");
	}else{
		header("location:../../adminSubjects.php");
	}
?>