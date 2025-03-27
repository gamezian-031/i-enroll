<!doctype html>
<html>
    <?php 
        session_start();
        if(empty($_SESSION['faculUser'])){
            header("Location:facultyLogin.php");
        }

        include('functions/php/config.php');

        $idFac = $_SESSION['faculUser'];

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
                            <a class="nav-link" href="faculSects.php">Sections</a>
                            <a class="nav-link change" 
                                data-id="<?php echo $idFac?>" id="<?php echo $idFac?>"
                                data-bs-toggle="modal" data-bs-target="#change">Change <br> Password</a>
                            <a class="nav-link" href="functions/php/faculOut.php">Log-out</a>
                    </div>
                    <span class="navbar-text d-none">
                    </span>
                </div>
            </div>
        </nav>
            
        <div class="bg d-flex flex-column mt-auto p-3 gap-5 h-auto min-vh-lg-100 w-100 overflow-auto" style="margin-bottom: 5vh;">
            <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 mt-5">
                    <div class="w-100 d-flex flex-row justify-content-between align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Sections Handled </h2>
                        <input class="py-1 px-2 ms-auto" id="sectSearch" type="text" placeholder="Search..">
                    </div>
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM `schedule` WHERE `faculty` = '$idFac'";
                        $result = $con->query($query);


                        if(mysqli_num_rows($result) > 0): ?>
                            <table id="" class="table table-striped table-bordered fs-5">
                                        <thead>
                                            <tr>
                                                <th>Course ID</th>
                                                <th>Course Name</th>
                                                <th>Section</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sectTable">
                    
                    <?php while ($row = $result -> fetch_assoc()): 
                        $idSub = $row['idSub'];
                        $section = $row['section'];
                        $secQue = "SELECT * FROM `subject` WHERE `idSub` = '$idSub'";
                        $secRes = $con->query($secQue);
                        $secVal = $secRes -> fetch_assoc();
                        ?>
                        <tr>
                            <td class=""><?php echo $row['idSub']; ?></td>
                            <td class=""><?php echo $secVal['name']; ?></td>
                            <td class=""><?php echo $row['section']; ?></td>
                            <td class="mx-auto text-center">
                                <a href="#grade=<?php echo $row['id'];?>" class="mx-1 clear text-primary grade" 
                                    data-id="<?php echo $idSub; ?>, <?php echo $section; ?>"
                                    data-bs-toggle="tooltip" data-bs-target="#grade" 
                                    data-bs-placement="top" data-bs-title="Edit Student Academic Data"
                                    id="<?php echo $row['id'];?>">
                                    <i class="bi bi-file-code-fill"></i>
                                    <b>Start Grading</b>
                                </a>

                            </td>
                        </tr>
                    <?php endwhile ?>
                        </tbody>
                    </table>
                    
                    <?php else:?>        
                        <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                            <h2 class="fs-3 text-white text-center"> No students yet! </h2>
                        </div>

                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark mt-auto">
            <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>

        <div class="modal fade" id="grade" data-bs-backdrop="static" data-bs-keyboard="false" 
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Grade Student</h5>
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
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

                $(document).ready(function() {
                    $('.grade').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/gradeSect.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#grade').modal('show');
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

                    $("#studSearch").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#studTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });

                    $("#sectSearch").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#sectTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
    </body>

</html>
