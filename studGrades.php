<!doctype html>
<html>
    <?php 
        session_start();
        if(empty($_SESSION['studUser'])){
            header("Location:studLogin.php");
        }

        include('functions/php/config.php');

        $idStud = $_SESSION['studUser'];
        $enrollCode = $_SESSION['enrollCode'];

        $studQuery = $con -> query("SELECT * from `user-student` WHERE `idStud` = '$idStud'") or die($con -> error);
        $studData = $studQuery -> fetch_assoc();

        if($studData['status'] == 'R'):
            echo '<script>alert("Upon Grade Evaluation, you are a regular student. Proceed to enrollment as usual.");</script>';
        elseif($studData['status'] == 'X'):
            echo '<script>alert("Upon Grade Evaluation, you are a irregular student. Proceed to enrollment with limited subjects.");</script>';
        else:
        endif;
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
            
        <div class="min-vh-100 d-flex flex-column mt-auto p-3 gap-5 h-auto min-vh-lg-100 w-100 overflow-auto px-5" style="margin-bottom: 5vh;">
            <div class="gap-5 d-flex flex-column flex-lg-row justify-content-center align-items-center w-100">
                <div class="gap-2 d-flex flex-column ">
                    <div class="h-auto border border-dark p-2">
                        <div class="row">
                            <div class="col-12">
                                <h5><b>Name:</b> <?php echo $studData['fName'] . " " . $studData['mName'] . " " . $studData['lName'];?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5><b>Program: </b> <?php 
                                    
                                    $code = $studData['program'];
                                    $progQuery= $con -> query("SELECT `nameCurr` from `curriculums` WHERE `idCurr` = '$code'") or die($con -> error);
                                    $progData = $progQuery -> fetch_assoc();

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
                                <h2><b>Course Grades: </b></h2>
                            </div>
                        </div>
                        <div class="" style="max-height: 22rem;">
                            <?php
                            $code = $studData['program'];
                            $query = $con -> query("SELECT * from `curriculums` WHERE `idCurr` = '$code'") or die($con -> error);
                            while($row = $query -> fetch_assoc()) { 
                                $subCode = $row['idCourse'];
                                ?>

                            <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
                                <?php
                                    for ($yr = 1; $yr <= 4; $yr++) {
                                        for ($sem = 1; $sem <= 2; $sem++) { ?>
                                            <h4>Year <?php echo $yr?>, Semester <?php echo $sem?></h4>
                                            <?php
                                                $querys = "SELECT * FROM `subject` WHERE `year` = '$yr' AND `semester` = '$sem' AND `program` = '$subCode'";
                                                $results = $con->query($querys);

                                                if(mysqli_num_rows($results) > 0): ?>
                                                <table class="table table-striped table-bordered w-100 fs-6">
                                                    <thead class="">
                                                        <tr>
                                                            <th>Subject ID</th>
                                                            <th>Subject Name</th>
                                                            <th class="text-center">Total Units</th>
                                                            <th class="text-center">Grade</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                        
                                        <?php while ($rows = $results -> fetch_assoc()): 
                                            $idSub = $rows['idSub'];
                                            $gradeQuery = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
                                            $gradeRes = $con->query($gradeQuery);
                                            $gradeVal = $gradeRes -> fetch_assoc();
                                            ?>
                                            <tr>
                                                <td class=""><?php echo $rows['idSub']; ?></td>
                                                <td class=""><?php echo $rows['name']; ?></td>
                                                <td class="fw-bold text-center"><?php echo $rows['unitTot']; ?></td>
                                                <td class="text-center">   <?php   
                                                                            if($gradeVal['grade'] == '4.00'):
                                                                                echo '-';
                                                                            elseif ($gradeVal['grade'] == '4.25'):
                                                                                echo 'INC';
                                                                            else:
                                                                                echo $gradeVal['grade']; 
                                                                            endif;?>
                                                </td>
                                            </tr>
                                        <?php endwhile ?>
                                            </tbody>
                                        </table>
                                    <?php endif ?>
                                <?php } } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark mt-auto">
            <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
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
