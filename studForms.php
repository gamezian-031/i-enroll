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
            <div class="d-flex flex-column justify-content-center align-items-start">
                <h1 class="fs-1 text-dark"> Enrollment Forms </h1>
            </div>

            <div class="d-flex flex-column justify-content-between
                        align-items-start gap-2 mt-5">
                <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                    <h2 class="fs-3 text-dark"> Forms List </h2>
                </div>
                <?php
                    include('functions/php/config.php');
                    
                    $query = "SELECT * FROM `user-student` WHERE `idStud` = '$idStud'";
                    $result = $con->query($query);

                    if(mysqli_num_rows($result) > 0): ?>
                        <table id="" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Enrollment Code</th>
                                            <th>Program</th>
                                            <th>Year Enrolled</th>
                                            <th>Semester</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                
                <?php while ($row = $result -> fetch_assoc()): 
                    $squery = "SELECT * FROM `enroll-codes` WHERE `idStud` = '$idStud'";
                    $sresult = $con->query($squery);
                    while ($srow = $sresult -> fetch_assoc()):?>
                    <tr>
                        <td class=""><?php echo $srow['enrollCode']; ?></td>
                        <td class=""><?php echo $row['program']; ?></td>
                        <td class=""><?php echo $srow['year']; ?></td>
                        <td class=""><?php echo $srow['semester']; ?></td>
                        <td class="mx-auto text-center">
                            <form
                                class=""
                                id="<?php echo $srow['enrollCode']; ?>"
                                target="_blank"
                                method="post" 
                                action="viewForm.php">
                                <input type="text" name="enrollCode" class="form-control form-control-lg input visually-hidden"
                                            value="<?php echo $srow['enrollCode']; ?>" readonly />
                                <a href="javascript:$('#<?php echo $srow['enrollCode']; ?>').submit()" class="mx-1 clear text-muted view">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile ?>
                <?php endwhile ?>
                                    </tbody>
                    </table>
                
                <?php else:?>        
                    <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                        <h2 class="fs-3 text-white text-center"> No Forms yet </h2>
                    </div>

                <?php endif ?>
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
