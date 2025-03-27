<!doctype html>
<html>
    <?php
        session_start();
        if(empty($_SESSION['idAdmin'])){
            header("Location:adminLogin.php");
        }

        include('functions/php/config.php');
    ?>
    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-maroon px-4">
            <div class="container-fluid">
                    <div class="d-flex flex-row align-items-center">
                        <a class="navbar-brand" href="home.php"><img class="logo" src="assets/img/school-logo.png" alt=""></a>
                        <h1 class="fs-5 text-uppercase">Taguig City University</h1>
                    </div>
                        
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="h-100 navbar-nav d-flex flex-column justify-content-start flex-grow-1 pe-3 text-white d-lg-none">
                            <li class="nav-item">
                                <a class="nav-link d-flex flex-row align-items-center text-white gap-2 active" href="adminDash.php"> 
                                    <i class="bi bi-house-fill fs-6"></i> 
                                    <h6 class="fs-6">Dashboard</h6>
                                </a>
                            </li>

                            <li class="nav-item">

                                <a 
                                class="nav-link text-white fs-6 d-flex flex-row justify-content-end 
                                align-items-center gap-2" 
                                href="#mobile-collapse" role="button" data-bs-toggle="collapse" 
                                aria-expanded="false">
                                    <div class="d-flex flex-row justify-content-start align-items-center me-auto gap-2">
                                        <i class="bi bi-gear-fill"></i>
                                        <h6 class="fs-6 align-items-center">Management</h6>
                                    </div>
                                </a>

                                <ul class="collapse w-100 m-0 gap-2 fs-5" id="mobile-collapse">
                                    <li class="">
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row 
                                        align-items-center gap-2" href="adminDepartments.php">
                                        <i class="bi bi-list-columns-reverse"></i>Colleges / Departments</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row 
                                        align-items-center gap-2" href="adminCurriculum.php">
                                        <i class="bi bi-list-ul"></i>Curriculums</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSubjects.php">
                                        <i class="bi bi-list-columns-reverse"></i>Subjects</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSections.php">
                                        <i class="bi bi-clipboard-fill"></i>Section Management</a>
                                    </li>
                                    <li>
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSchedules.php">
                                        <i class="bi bi-clipboard-fill"></i>Schedule Management</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        Student Users
                                    </li>
                                    <li>
                                        <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminStudentsReg.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> Regular / New Students</a>
                                    </li>
                                    <li>
                                        <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminStudentsIrr.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> Irregular Students</a>
                                    </li>
                                    <li>
                                        <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminEnrollments.php">
                                        <i class="bi bi-person-circle"></i> Enrollment Forms</a>
                                    </li>
                                    
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2 " href="adminAccounts.php">
                                        <i class="bi bi-person-circle"></i> Admin Users</a>
                                    </li>
                                    <li>
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminFaculty.php">
                                        <i class="bi bi-person-video3"></i> Faculty Users</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminLogs.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> System Logs</a>
                                    </li>
                                    <li>
                                        <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminConf.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> System Configuration</a>
                                    </li>
                                </ul>
                                </li>

                                <li class="nav-item mt-auto">
                                    <a class="nav-link d-flex flex-row align-items-center text-white gap-2 fs-6" aria-current="page" href="functions/php/adminOut.php"> 
                                        <i class="bi bi-box-arrow-right"></i>
                                        <h6 class="fs-6">Log-out</h6>
                                    </a>
                                </li>
                            </ul>
                        <span class="navbar-text d-none">
                        </span>
                    </div>
                </div>       
        </nav>
            
        <div class="content">
            <div class="h-100 d-flex flex-row">
                <div class="ps-3 bg-maroon d-none d-lg-block">
                    <div class="h-100 d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white" style="width: 365px;">
                    <ul class="navbar-nav d-flex flex-column justify-content-start flex-grow-1 pe-3 text-white fs-6">
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-row align-items-center text-white gap-2 active" href="adminDash.php"> 
                                <i class="bi bi-house-fill fs-6"></i> 
                                <h6 class="fs-6">Dashboard</h6>
                            </a>
                        </li>

                        <li class="">
                            <a class="nav-item text-white text-decoration-none d-flex flex-row 
                            align-items-center gap-2" href="adminDepartments.php">
                            <i class="bi bi-list-columns-reverse"></i>Colleges / Departments</a>
                        </li>
                        <li class="">
                            <a class="nav-item text-white text-decoration-none d-flex flex-row 
                            align-items-center gap-2" href="adminCurriculum.php">
                            <i class="bi bi-list-ul"></i>Curriculums</a>
                        </li>
                        <li class="">
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSubjects.php">
                            <i class="bi bi-list-columns-reverse"></i>Subjects</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSections.php">
                            <i class="bi bi-clipboard-fill"></i>Section Management</a>
                        </li>
                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSchedules.php">
                            <i class="bi bi-clipboard-fill"></i>Schedule Management</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            Student Users
                        </li>
                        <li>
                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminStudentsReg.php">
                            <i class="bi bi-file-earmark-person-fill"></i> Regular / New Students</a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminStudentsIrr.php">
                            <i class="bi bi-file-earmark-person-fill"></i> Irregular Students</a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminEnrollments.php">
                            <i class="bi bi-person-circle"></i> Enrollment Forms</a>
                        </li>
                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2 " href="adminAccounts.php">
                            <i class="bi bi-person-circle"></i> Admin Users</a>
                        </li>
                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminFaculty.php">
                            <i class="bi bi-person-video3"></i> Faculty Users</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminLogs.php">
                            <i class="bi bi-file-earmark-person-fill"></i> System Logs</a>
                        </li>
                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminConf.php">
                            <i class="bi bi-file-earmark-person-fill"></i> System Configuration</a>
                        </li>

                            <li class="nav-item mt-auto">
                                <a class="nav-link d-flex flex-row align-items-center text-white gap-2 fs-6" aria-current="page" href="functions/php/adminOut.php"> 
                                    <i class="bi bi-box-arrow-right"></i>
                                    <h6 class="fs-6">Log-out</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-100 d-flex flex-column overflow-scroll p-3 px-lg-5" style="">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fs-1 text-dark"> University Students </h1>
                     
                </div>
                <!--div class="d-flex flex-column justify-content-between
                            align-items-start gap-2">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Add Admin </h2>
                        <a class="btn btn-success py-1 px-2 ms-auto" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                    <div class="collapse w-100" id="collapseExample">
                        <div class="card card-body d-flex flex-column border border-dark">
                            <form   class=""
                                    method="post" 
                                    action="functions/php/addAdmin.php">
                                <div class="container gap-2 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                                                placeholder="First Name" required />
                                                <label class="form-label fs-6" for="fName">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" id="mName" name="mName" class="form-control form-control-lg input"
                                                placeholder="Middle Name" required />
                                                <label class="form-label fs-6" for="lastName">Middle Name</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating ">
                                                <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                                                placeholder="Last Name" required />
                                                <label class="form-label fs-6" for="lName">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row py-2 gap-2 gap-lg-0">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" id="username" name="username" class="form-control form-control-lg input"
                                                placeholder="username" required />
                                                <label class="form-label fs-6" for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="password" id="password" name="password" class="form-control form-control-lg input"
                                                placeholder="password" required />
                                                <label class="form-label fs-6" for="Password">Password</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success mt-2 ms-auto">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div-->

                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 mt-5">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Students List (Irregular) </h2>
                        <input class="py-1 px-2 ms-auto" id="studSearch" type="text" placeholder="Search..">
                    </div>
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM `user-student` WHERE `status` = 'X'";
                        $result = $con->query($query);


                        if(mysqli_num_rows($result) > 0): ?>
                            <table id="" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Program</th>
                                                <th>Year Level</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="studTable">
                    
                    <?php while ($row = $result -> fetch_assoc()): 
                        
                        $fullName = $row['fName'] . ' ' . substr($row['mName'],0,1) . '. ' . $row['lName'];
                        $filename = "extfiles/validator/" . $row['idStud'] .".pdf";
                        
                        ?>
                        <tr>
                            <td class=""><?php echo $fullName; ?></td>
                            <td class=""><?php echo $row['program']; ?></td>
                            <td class=""><?php echo $row['yrLvl']; ?></td>
                            <td class="mx-auto text-center">
                                <a href="#view=<?php echo $row['id'] ?>" class="mx-1 clear text-muted view" 
                                    data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="tooltip" data-bs-target="#view-stud" 
                                    data-bs-placement="top" data-bs-title="View Student Data"
                                    id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="<?php echo $filename?>" class="mx-1 clear maroon" 
                                    data-bs-toggle="tooltip" target=”_blank”
                                    data-bs-placement="top" data-bs-title="View Student Valid Document">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="#editdata=<?php echo $row['id'] ?>" class="mx-1 clear text-primary edit" 
                                    data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="tooltip" data-bs-target="#edit-stud" 
                                    data-bs-placement="top" data-bs-title="Edit Student Data"
                                    id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#editacads=<?php echo $row['id'];?>" class="mx-1 clear text-primary editAcads visually-hidden d-none" 
                                    data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="tooltip" data-bs-target="#edit-acads" 
                                    data-bs-placement="top" data-bs-title="Edit Student Academic Data"
                                    id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-file-code-fill"></i>
                                </a>
                                <a href="#gradestud=<?php echo $row['id'];?>" class="mx-1 clear text-success proxyGrade" 
                                    data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="tooltip" data-bs-target="#proxy-grade" 
                                    data-bs-placement="top" data-bs-title="Proxy Grading"
                                    id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-file-code-fill"></i>
                                </a>
                                <a href="#del=<?php echo $row['id'] ?>" class="mx-1 clear text-danger delete" 
                                    data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="tooltip" data-bs-target="#del-stud" 
                                    data-bs-placement="top" data-bs-title="Delete Student Data"
                                    id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                                <?php if($row['validation'] != 'T'): ?>
                                    <form
                                    class=""
                                    method="post" 
                                    action="functions/php/validStudent.php">
                                    <input type="text" name="idStud" class="form-control input visually-hidden"
                                                value="<?php echo $row['idStud']; ?>" readonly />
                                    <a href="javascript:$('form').submit()" class="mx-1 text-success"
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="top" data-bs-title="Validate Student">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </a>
                                    </form>
                                <?php endif ?>
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
        </div>

        <div class="footer d-flex justify-content-center align-items-center bg-dark">
            <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>

            <div class="modal fade" id="view-stud" data-bs-backdrop="static" data-bs-keyboard="false" 
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-scroll">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="edit-stud" data-bs-backdrop="static" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-scroll">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="edit-acads" data-bs-backdrop="static" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Student Academic Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="del-stud" data-bs-backdrop="static" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="proxy-grade" data-bs-backdrop="static" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Proxy Grading</h5>
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
                    $('.view').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/viewStud.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#view-stud').modal('show');
                            }
                        });
                    });

                    $('.edit').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/editStud.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#edit-stud').modal('show');
                            }
                        });
                    });

                    $('.editAcads').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/editStudAcads.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#edit-acads').modal('show');
                            }
                        });
                    });

                    $('.proxyGrade').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/gradeStud.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#proxy-grade').modal('show');
                            }
                        });
                    });

                    $('.delete').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/delStud.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#del-stud').modal('show');
                            }
                        });
                    });
                    
                    $("#studSearch").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#studTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
    </body>

</html>
