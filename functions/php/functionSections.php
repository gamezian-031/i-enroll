<?php

use function PHPSTORM_META\type;

    session_start();
    include "config.php";

    $idStud = $_SESSION['studUser'];
    $enrollCode = $_SESSION['enrollCode'];

    $studQuery = "SELECT * FROM `user-student` WHERE `idStud` = '$idStud'";
    $studIns = $con -> query($studQuery) or die($con -> error);
    $studData = $studIns -> fetch_assoc();
    $yrLvl = $studData['yrLvl'];
    
    $type = $_POST['type'];

    if($type == "add"):
        $idSub = $_POST['idSub'];
        $section = $_POST['section'];
        $addQuery = "INSERT INTO `student-enrollment` (`enrollCode`, `idStud`, `idSub`, `section`) VALUES ('$enrollCode', '$idStud', '$idSub', '$section')";
        $addIns = $con -> query($addQuery) or die($con -> error);
        if($addIns):
            $statQuery = "UPDATE `student-academics` SET `status` = 'R' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $statEdit = $con -> query($statQuery) or die($con -> error);
            if($statEdit):
                header("location:../../studEnroll.php");
            else:
                header("location:../../studEnroll.php");
            endif;
        else:
            header("location:../../studEnroll.php");
        endif;

    elseif($type == "quick"):
        $section = $_POST['section'];
        $courQuery = "SELECT * FROM `subject` WHERE `year` = '$yrLvl' AND `semester` = '$currSem'";
        $courIns = $con -> query($courQuery) or die($con -> error);
        while($courData = $courIns -> fetch_assoc()):
            $idSub = $courData['idSub'];
            $secQuery = "SELECT * FROM `schedule` WHERE `idSub` = '$idSub' AND `section` = '$section'";
            $secIns = $con -> query($secQuery) or die($con -> error);
            $secData = $secIns -> fetch_assoc();
            $secCount = $secData['studLimit'];
            $countQuery = "SELECT COUNT(*) AS `count` FROM `student-enrollment` WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $countRes = $con -> query($countQuery) or die($con -> error);
            $countData = $countRes -> fetch_assoc();
            $studCount = $countData['count'];
            if($studCount <= $secCount):
                $addQuery = "INSERT INTO `student-enrollment` (`enrollCode`, `idStud`, `idSub`, `section`) VALUES ('$enrollCode', '$idStud', '$idSub', '$section')";
                $addIns = $con -> query($addQuery) or die($con -> error);
                if($addIns):
                    $statQuery = "UPDATE `student-academics` SET `status` = 'R' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
                    $statEdit = $con -> query($statQuery) or die($con -> error);
                    if($statEdit):
                        header("location:../../studEnroll.php");
                    else:
                        header("location:../../studEnroll.php");
                    endif;
                else:
                    header("location:../../studEnroll.php");
                endif;
            else:
                echo '<script>alert("Section is Full! Proceed to Manual Enrollment!");</script>';
            endif;
        endwhile;

    elseif($type == "enroll"):
        $courQuery = "SELECT * FROM `student-enrollment` WHERE `enrollCode` = '$enrollCode'";
        $courIns = $con -> query($courQuery) or die($con -> error);
        while($courData = $courIns -> fetch_assoc()):
            $idSub = $courData['idSub'];
            $statQuery = "UPDATE `student-academics` SET `status` = 'E' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $statEdit = $con -> query($statQuery) or die($con -> error);
            if($statEdit):
            else:
            endif;
        endwhile;
        echo '<script>alert("Enrollment Completed! Check your CoE at your forms page.");</script>';
        echo "<script>window.location.href='../../studEnroll.php';</script>";

    elseif($type == "change"):
        $section = $_POST['section'];
        $idSub = $_POST['idSub'];
        $chgQuery = "UPDATE `student-enrollment` SET `section` = '$section' WHERE `idSub` = '$idSub' AND `enrollCode` = '$enrollCode'";
        $chgIns = $con -> query($chgQuery) or die($con -> error);
        if($chgIns):
            header("location:../../studEnroll.php");
        else:
            header("location:../../studEnroll.php");
        endif;

    elseif($type == "delete"):
        $section = $_POST['section'];
        $idSub = $_POST['idSub'];
        $addQuery = "DELETE FROM `student-enrollment` WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
        $addIns = $con -> query($addQuery) or die($con -> error);
        if($addIns):
            $statQuery = "UPDATE `student-academics` SET `status` = 'O' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $statEdit = $con -> query($statQuery) or die($con -> error);
            if($statEdit):
                header("location:../../studEnroll.php");
            else:
                header("location:../../studEnroll.php");
            endif;
        else:
            header("location:../../studEnroll.php");
        endif;

    else:
        header("location:../../studEnroll.php");
    endif;
    ?>