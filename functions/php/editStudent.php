<?php
    session_start();
    include "config.php";
    $id = $_POST['id'];
    $idStud = $_POST['idStud'];
    
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $civStat = $_POST['civStat'];
    $contactNo = $_POST['contactNo'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $program = $_POST['program'];
    $yrReg= $_POST['yrReg'];
    $yrLvl= $_POST['yrLvl'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    # $validation = $_POST['validation'];

    $enCont = dataEncrypt($idStud, $contactNo);
    $enPass = dataEncrypt($idStud, $password);
    $enEmail = dataEncrypt($idStud, $email);

    $query =    "UPDATE `user-student` 
    
                SET `fName` = '$fName', `mName` = '$mName',`lName` = '$lName', 
                `address` = '$address', `birthdate` = '$birthdate',`sex` = '$sex', 
                `civStat` = '$civStat', `contactNo` = '$enCont',`religion` = '$religion', 
                `religion` = '$religion', `program` = '$program',`yrLvl` = '$yrLvl',
                `yrReg` = '$yrReg',`password` = '$enPass', `email` = '$enEmail',
                `status` = '$status' #, `validation` = '$validation'

                WHERE id = $id;";

    $result = $con->query($query);

    if($result){
		header("location:../../adminDash.php");
	}else{
		header("location:../../adminDash.php");
	}
?>