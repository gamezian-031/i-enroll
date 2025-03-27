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
                    <h1 class="fs-1 text-dark"> University Faculty </h1>
                     
                </div>
                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Add Faculty </h2>
                        <a class="btn btn-success py-1 px-2 ms-auto" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                    <div class="collapse w-100" id="collapseExample">
                        <div class="card card-body d-flex flex-column border border-dark">
                            <form   class=""
                                    method="post" 
                                    action="functions/php/addFaculty.php">
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
                                                placeholder="Middle Name" />
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

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select class="form-select input" name="department" id="department" required>
                                                <option value="" selected disabled>Select Department</option>
                                                <?php
                                                include('functions/php/config.php');
                                                
                                                $deptQry = "SELECT * FROM `departments`;";
                                                $deptRes = $con->query($deptQry);

                                                while ($deptData = $deptRes -> fetch_assoc()): ?>
                                                <option value="<?php echo $deptData['idDept']?>"><?php echo $deptData['nameDept']?></option>

                                                <?php endwhile?>
                                                </select>
                                                <label for="department" class="form-label fs-6">Department</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                            <select class="form-select input" name="curriculum" id="curriculum" required>
                                                <option value="" selected disabled>Select Curriculum</option>
                                                <?php
                                                include('functions/php/config.php');
                                                
                                                $currQry = "SELECT * FROM `curriculums`;";
                                                $currRes = $con->query($currQry);

                                                while ($currData = $currRes -> fetch_assoc()): ?>
                                                <option value="<?php echo $currData['idCurr']?>"><?php echo $currData['nameCurr']?></option>

                                                <?php endwhile?>
                                                </select>
                                                <label for="curriculum" class="form-label fs-6">Curriculum</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
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
                </div>

                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 mt-5">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Faculty List </h2>
                        <input class="py-1 px-2 ms-auto" id="facSearch" type="text" placeholder="Search..">
                    </div>
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM `user-faculty`";
                        $result = $con->query($query);


                        if(mysqli_num_rows($result) > 0): ?>
                            <table id="" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="facTable">
                    
                    <?php while ($row = $result -> fetch_assoc()): 
                        
                        $fullName = $row['fName'] . ' ' . substr($row['mName'],0,1) . ' ' . $row['lName'];
                        
                        ?>
                        <tr>
                            <td class=""><?php echo $fullName; ?></td>
                            <td class="mx-auto text-center">
                                <a href="#" class="mx-1 clear text-muted view" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#view-fac" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="#" class="mx-1 clear text-primary edit" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#edit-fac" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="mx-1 clear text-danger delete" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#del-fac" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                        </tbody>
                    </table>
                    
                    <?php else:?>        
                        <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                            <h2 class="fs-3 text-white text-center"> No faculty yet! </h2>
                        </div>

                    <?php endif ?>
                </div>
                </div>

            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center bg-dark">
            <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>

            <div class="modal fade" id="view-fac" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View Faculty</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="edit-fac" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Faculty</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="del-fac" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Faculty</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.view').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/viewFac.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#view-fac').modal('show');
                            }
                        });
                    });

                    $('.edit').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/editFac.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#edit-fac').modal('show');
                            }
                        });
                    });

                    $('.delete').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/delFac.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#del-fac').modal('show');
                            }
                        });
                    });

                    $("#facSearch").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#facTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
    </body>

</html>
