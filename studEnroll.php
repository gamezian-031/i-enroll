<!DOCTYPE html>
<html>
    <?php 
        session_start();
        if(empty($_SESSION['studUser'])){
            header("Location:studLogin.php");
        }

        include_once('functions/php/config.php');


        $idStud = $_SESSION['studUser'];
        $enrollCode = $_SESSION['enrollCode'];

        $studQuery = $con -> query("SELECT * from `user-student` WHERE `idStud` = '$idStud'") or die($con -> error);
        $studData = $studQuery -> fetch_assoc();

        $code = $studData['program'];
        $progQuery= $con -> query("SELECT `nameCurr`, `idCourse` from `curriculums` WHERE `idCurr` = '$code'") or die($con -> error);
        $progData = $progQuery -> fetch_assoc();

        $idCour = $progData['idCourse'];
    ?>

    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>
    </head>

    <body class="h-auto">
        <?php
            if($enrollState != 'true'){
                echo "<script type='text/javascript'>";
                echo "alert('Enrollment Phase Inactive!');";
                echo "window.location.href='studGrades.php';";
                echo "</script>";
            }
        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-maroon sticky-top px-4">
            <div class="container-fluid">
                <div class="d-flex flex-row align-items-center">
                    <a class="navbar-brand" href="home.php"><img class="logo" src="assets/img/school-logo.png" alt=""></a>
                    <h1 class="fs-5 text-uppercase">Taguig City University</h1>
                </div>
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <div class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 d-flex flex-row justify-content-center align-items-center">
                            <a class="nav-link" href="studGrades.php">Grades</a>
                            <a class="nav-link" href="studForms.php">Forms</a>
                            <a class="nav-link" href="studEnroll.php">Enroll</a>
                            <a class="nav-link change" 
                                data-id="<?php echo $idStud?>" id="<?php echo $idStud?>"
                                data-bs-toggle="modal" data-bs-target="#change"
                            >Change <br> Password</a>
                            <a class="nav-link" href="functions/php/studOut.php">Log-out</a>
                    </div>
                    <span class="navbar-text d-none">
                    </span>
                </div>
            </div>
        </nav>
            
        <div class="bg d-flex flex-column mt-auto p-3 gap-5 h-auto min-vh-lg-100 w-100 overflow-auto px-5" style="margin-bottom: 5vh;">
            <h1 class="fs-1 text-dark"> Enrollment: <b>Semester <?php echo $currSem ;?></b> </h1>  
            <div class="gap-5 d-flex flex-column flex-lg-row justify-content-between w-100">
                <div class="gap-2 d-flex flex-grow-1 flex-column w-lg-75">
                    <div class="h-auto border border-dark p-2">
                        <div class="row">
                            <div class="col-12">
                                <h5><b>Name:</b> <?php echo $studData['fName'] . " " . $studData['mName'] . " " . $studData['lName'];?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5><b>Program: </b> <?php 

                                    echo $progData['nameCurr'];
                                ?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5><b>Year Registered:</b> <?php echo $studData['yrReg'];?></h5>
                            </div>
                            <div class="col-4">
                                <h5><b>Year Level:</b> <?php echo $studData['yrLvl'];?></h5>
                            </div>
                            <div class="col-4">
                                <h5><b>Student Type:</b> 
                                <?php 
                                    if($studData['status'] == 'N'): 
                                        echo "New";
                                    elseif($studData['status'] == 'R'):
                                        echo "Regular";
                                    else: 
                                        echo "Irregular";
                                    endif;?>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="h-auto p-2">
                        <div class="row">
                            <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                                <h2><b>Registered Courses: </b></h2>
                                <?php 
                                $checkQuery = "SELECT * FROM `student-enrollment` WHERE `enrollCode` = '$enrollCode'";
                                $checkRes = $con->query($checkQuery);
                                if(mysqli_num_rows($checkRes) <= 0):
                                    if($studData['status'] == 'R' || ($studData['status'] == 'N' && $currSem == '1')): ?>
                                        <a  class="btn btn-md btn-secondary text-white text-center quickenroll" data-id="<?php echo $enrollCode;?>"
                                            data-bs-toggle="modal" data-bs-target="#quickenroll" >
                                            <i class="bi bi-eye-fill"></i>
                                            <b>Quick-Enroll</b>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row overflow-auto" style="max-height: 22rem;">
                            <?php
                            $enrolledQuery = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `status` = 'R'";
                            $enrolledReslt = $con->query($enrolledQuery);
                            if(mysqli_num_rows($enrolledReslt) > 0): ?>
                                    <table id="" class="table table-striped table-bordered">
                                        <thead class="fs-5">
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Name</th>
                                                <th>Units</th>
                                                <th>Section</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                            
                            <?php while ($row = $enrolledReslt -> fetch_assoc()): 
                                $idSub = $row['idSub'];

                                $subsQuery = "SELECT * FROM `subject` WHERE `idSub` = '$idSub'";
                                $subsReslt = $con->query($subsQuery);
                                $subsData = $subsReslt -> fetch_assoc();

                                $sectQuery = "SELECT * FROM `student-enrollment` WHERE `idSub` = '$idSub' AND `enrollCode` = '$enrollCode'";
                                $sectReslt = $con->query($sectQuery);
                                $sectData = $sectReslt -> fetch_assoc();

                                ?>
                                <tr>
                                    <td class=""><?php echo $subsData['idSub']; ?></td>
                                    <td class=""><?php echo $subsData['name']; ?></td>
                                    <td class=""><?php echo $subsData['unitTot']; ?></td>
                                    <td class=""><?php echo $sectData['section']; ?></td>
                                </tr>
                            <?php endwhile ?>
                                    </tbody>
                                </table>
                                <form   action="functions/php/functionSections.php" 
                                        method="post">
                                <div class="w-100 card card-body d-flex flex-column">
                                <input  type="text" id="type" name="type" class="form-control form-control-lg input visually-hidden"
                                    value="enroll"/>
                                    <button class="btn btn-success" type="submit" name="enroll">Enroll</button>
                                </div>
                                </form>
                                
                            
                            <?php else:?>        
                                <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                                    <h2 class="fs-5 text-white text-center"> No Registered Courses yet </h2>
                                </div>

                            <?php endif ?>
                        </div>
                    </div>
                    
                </div>

                <div class="gap-2 d-flex flex-column w-lg-25">
                    <?php
                    for ($yr = 1; $yr <= 4; $yr++) {
                        for ($sem = 1; $sem <= 2; $sem++) { 
                            $yrW = convertNumberToWord($yr);
                            $semW = convertNumberToWord($sem);


                            $divId = $yrW . $semW;
                            $divId = preg_replace('/\s+/', '', $divId);
                            $divHref = "#" . $yrW . $semW;
                            $divHref = preg_replace('/\s+/', '', $divHref);
                            ?>
                            <div class="w-100">
                                <div class="bg-maroon">
                                    <a  class=  "nav-link dropdown-toggle fs-2 d-flex flex-row justify-content-end 
                                                align-items-center gap-2 text-white w-100" 
                                        data-bs-toggle="collapse" 
                                        href="<?php echo $divHref?>" role="button" aria-expanded="true"
                                        aria-controls="<?php echo $divId?>">
                                        <div class="d-flex flex-row justify-content-start align-items-center me-auto w-100 gap-2">
                                            <h6 class="fs-4 align-items-center">Year <?php echo $yr?>, Semester <?php echo $sem?></h6>
                                        </div>
                                    </a>
                                </div>
                            
                                    <div class="collapse" id="<?php echo $divId?>">
                                        <?php
                                            $querys = "SELECT * FROM `subject` WHERE `year` = '$yr' AND `semester` = '$sem' AND `program` = '$idCour'";
                                            $results = $con->query($querys);
                                            
                                            if(mysqli_num_rows($results) > 0): ?>
                                            <table class="table table-striped table-bordered w-100 fs-6">
                                                <thead>
                                                    <tr>
                                                        <th>Subject ID</th>
                                                        <th class="text-center">Units</th>
                                                        <th>Pre-Requisites</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($rows = $results -> fetch_assoc()): ?>
                                                        <tr>
                                                            <td class=""><?php echo $rows['idSub']; ?></td>
                                                            <td class="fw-bold text-center"><?php echo $rows['unitTot']; ?></td>
                                                            <td class=""><?php echo $rows['prerequisite']; ?></td>
                                                            
                                                            <?php //logic part
                                                                $subCode = $rows['idSub'];
                                                                $schedQuery = "SELECT * FROM `schedule` WHERE `idSub` = '$subCode'";
                                                                $schedRes = $con->query($schedQuery);
                                                                if(mysqli_num_rows($schedRes) > 0): //check for schedules ?>
                                                                    <?php

                                                                        $statQuery = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$subCode'";
                                                                        $statRes = $con->query($statQuery);
                                                                        $statData = $statRes -> fetch_assoc();
                                                                        if($statData['status'] != 'P'): // Check for Passed Course?>
                                                                        <?php if($studData['yrLvl'] >= $rows['year']): // Check for student Year Lvl?>
                                                                            <?php if($currSem == $rows['semester']): // Check for semester?> 
                                                                                <?php 
                                                                                    $preReq = $rows['prerequisite'];

                                                                                    if($preReq != '' || $preReq != NULL):
                                                                                    $preReqQuery = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$preReq'";
                                                                                    $preReqRes = $con->query($preReqQuery);
                                                                                    $preReqData = $preReqRes -> fetch_assoc();
                                                                                    //Check for Pre-Req Courses?>
                                                                                    <?php 
                                                                                        if($preReqData['status'] == 'P'): // Check for passed Pre-requisite?>
                                                                                        <?php if($statData['status'] == 'R'): // Check for Registered / Enrolled Course?> 
                                                                                            <td class="fs-6"> 
                                                                                                <a  href="#<?php echo $rows['idSub']; ?>" class="fs-6 text-primary text-decoration-none select" data-id="<?php echo $rows['idSub']; ?>"
                                                                                                    data-bs-toggle="modal" data-bs-target="#select" id="<?php echo $rows['idSub']; ?>"> 
                                                                                                    <i class="bi bi-pencil-square"></i> Change 
                                                                                                </a> 
                                                                                            </td>
                                                                                        <?php elseif($statData['status'] == 'E'): ?>
                                                                                            <td class="fs-6"> <a class="fs-6 text-success text-decoration-none"> <i class="bi bi-check-square-fill"></i> Enrolled </a> </td>
                                                                                        <?php else: ?>
                                                                                            <td class="fs-6"> 
                                                                                                <a  href="#<?php echo $rows['idSub']; ?>" class="fs-6 text-primary text-decoration-none select" data-id="<?php echo $rows['idSub']; ?>"
                                                                                                    data-bs-toggle="modal" data-bs-target="#select" id="<?php echo $rows['idSub']; ?>"> 
                                                                                                <i  class="bi bi-plus-circle"></i> Change </a> 
                                                                                            </td>
                                                                                        <?php endif; ?> 
                                                                                    <?php else: ?>
                                                                                        <td class="fs-6"> <a class="fs-6 text-danger text-decoration-none"> <i class="bi bi-slash-circle"></i> Blocked (Pre-Req.) </a> </td>
                                                                                    <?php endif; ?> 
                                        
                                                                                <?php else: ?>
                                                                                    <?php if($statData['status'] == 'R'): // Check for Registered / Enrolled Course?> 
                                                                                            <td class="fs-6"> 
                                                                                                <a  href="#<?php echo $rows['idSub']; ?>" class="fs-6 text-primary text-decoration-none select" data-id="<?php echo $rows['idSub']; ?>"
                                                                                                    data-bs-toggle="modal" data-bs-target="#select" id="<?php echo $rows['idSub']; ?>"> 
                                                                                                    <i class="bi bi-pencil-square"></i> Change 
                                                                                                </a> 
                                                                                            </td>
                                                                                        <?php elseif($statData['status'] == 'E'): ?>
                                                                                            <td class="fs-6"> <a class="fs-6 text-success text-decoration-none"> <i class="bi bi-check-square-fill"></i> Enrolled </a> </td>
                                                                                        <?php else: ?>
                                                                                            <td class="fs-6"> 
                                                                                            <a   href="#<?php echo $rows['idSub']; ?>" class="fs-6 text-primary text-decoration-none select" data-id="<?php echo $rows['idSub']; ?>"
                                                                                                data-bs-toggle="modal" data-bs-target="#select" id="<?php echo $rows['idSub']; ?>"> 
                                                                                            <i  class="bi bi-plus-circle"></i> Add </a> 
                                                                                            </td>
                                                                                        <?php endif; ?> 
                                                                                <?php endif; ?> 
                                                                            <?php else: ?>
                                                                                <td class="fs-6"> <a class="fs-6 text-danger text-decoration-none"> <i class="bi bi-slash-circle"></i> Blocked (Semester) </a> </td>
                                                                            <?php endif; ?> 
                                                                        <?php else: ?>
                                                                            <td class="fs-6"> <a class="fs-6 text-danger text-decoration-none"> <i class="bi bi-slash-circle"></i> Blocked (Year Level) </a> </td>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <td class="fs-6"> <a class="fs-6 text-success text-decoration-none"> <i class="bi bi-check-circle"></i> Completed </a> </td> 
                                                                    <?php endif; ?>
                                                            <?php else: ?>
                                                                <td class="fs-6"> <a class="fs-6 text-danger text-decoration-none"> <i class="bi bi-slash-circle"></i> Unavailable </a> </td> 
                                                            <?php endif; ?>
                                                        </tr>
                                                    <?php endwhile ?>
                                                </tbody>
                                            </table>
                                    <?php endif ?>
                                 </div>
                            </div>
                        <?php } };?>
                    </div>
                </div>
            </div>

        <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark mt-auto">
            <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>

            <div class="modal fade" id="select" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Select Section</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="enroll" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Enroll</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="quickenroll" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Quick Enroll</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="change" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.select').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/selectSect.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#select').modal('show');
                            }
                        });
                    });

                    $('.enroll').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/enrollSect.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#enroll').modal('show');
                            }
                        });
                    });

                    $('.quickenroll').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/quickEnroll.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#quickenroll').modal('show');
                            }
                        });
                    });

                    $('.change').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/changePass.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#change').modal('show');
                            }
                        });
                    });
                });
            </script>
    </body>

</html>
