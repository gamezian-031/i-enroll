<?php
    session_start();
	include('config.php');
    
    $id = $_POST['idSub'];

    $query = "DELETE FROM `subject` WHERE `idSub` = '$id'";

    $result = $con->query($query);

	if($result){
		$time = date_create('now');
        $dt = date_format($time, 'Y-m-d H:i:s');
        $dl = date_format($time, 'YmdHis');

        $source = $_SESSION['idAdmin'];
        $target = $id;
        $action = 'delete / remove';
        $idParse = substr($target, 0, 2) . "de" . $dl;
        $idLog = hash('sha256', $idParse);

		$logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
        $log = $con->query($logQuery);
		header("location:../../adminSubjects.php");
	}else{
		header("location:../../adminSubjects.php");
	}
?>