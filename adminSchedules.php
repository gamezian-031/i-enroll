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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <h1 class="fs-1 text-dark"> Course Schedules </h1>
                     
                </div>
                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 w-100">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Add Schedule </h2>
                        <a class="btn btn-success py-1 px-2 ms-auto" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                    <div class="collapse w-100" id="collapseExample">
                        <div class="card card-body d-flex flex-column border border-dark">
                            <form   class=""
                                    method="post" 
                                    action="functions/php/addSchedule.php">
                                <div class="container gap-2 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-floating">
                                                <select class="form-select input" name="idSub" id="idSub" required>
                                                    <option value="" selected disabled>Course</option>
                                                    <?php
                                                    include('functions/php/config.php');
                                                    
                                                    $query = "SELECT * FROM `subject`";
                                                    $result = $con->query($query);

                                                    while ($row = $result -> fetch_assoc()): ?>
                                                    <option value="<?php echo $row['idSub']?>"><?php echo $row['name']?></option>

                                                    <?php endwhile?>
                                                </select>
                                                <label for="idSub" class="form-label fs-6">Course</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-floating">
                                                <select class="form-select input" name="section" id="section" required>
                                                    <option value="" selected disabled>Section</option>
                                                    <?php
                                                    
                                                    $querysec = "SELECT * FROM `sections`";
                                                    $resultsec = $con->query($querysec);

                                                    while ($rowsec = $resultsec -> fetch_assoc()): ?>
                                                    <option value="<?php echo $rowsec['section']?>"> <?php echo $rowsec['section']?></option>

                                                    <?php endwhile?>
                                                </select>
                                                <label for="idFac" class="form-label fs-6">Section</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <select class="form-select input" name="idFac" id="idFac" required>
                                                    <option value="" selected disabled>Faculty Member</option>
                                                    <?php
                                                    
                                                    $queryfac = "SELECT * FROM `user-faculty`";
                                                    $resultfac = $con->query($queryfac);

                                                    while ($rowfac = $resultfac -> fetch_assoc()): ?>
                                                    <option value="<?php echo $rowfac['idFaculty']?>"> <?php echo $fullName = "(". $rowfac['curriculum']. ")" . " " . $rowfac['fName'] . ' ' . substr($rowfac['mName'],0,1) . ' ' . $rowfac['lName'];?></option>

                                                    <?php endwhile?>
                                                </select>
                                                <label for="idFac" class="form-label fs-6">Faculty Member</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-2">
                                            <div class="form-floating">
                                                <input type="number" class="form-control input" id="studLimit" name="studLimit" maxlength="2" 
                                                        min="1" max="40" step="1" value="15" required/>
                                                <label for="yearReg" class="form-label fs-6">Class Size</label>
                                            </div>
                                        </div>
                                                        
                                        <div class="col-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control input" id="rmAssign" name="rmAssign" />
                                                <label for="rmAssign" class="form-label fs-6">Section Room</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-floating">
                                            <input type="time" class="form-control input" id="timeIni" name="timeIni" maxlength="4" 
                                                        min="00:00" max="24:00"/>
                                            <label class="form-label fs-6" for="timeIni">Time Start</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-floating">
                                                <input type="time" class="form-control input" id="timeEnd" name="timeEnd" maxlength="4" 
                                                        min="00:00" max="24:00"/>
                                                <label class="form-label fs-6" for="timeEnd">Time End</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4>For the day assignments, type the first 3 letters of the day and use a comma "," to separate days.</h4>
                                        <div class="col-12">
                                            <div class="form-floating">
                                            <input type="text" class="form-control input" id="days" name="days"/>
                                                <label for="days" class="form-label fs-6">Assigned Days</label>
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
                            align-items-start gap-2 mt-5 w-100">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Subject List </h2>
                        <input class="py-1 px-2 ms-auto" id="schedSearch" type="text" placeholder="Search..">
                    </div>
                    <div class="w-100 d-flex flex-row justify-content-center align-items-center pb-0 border-bottom border-3 border-dark overflow-auto"
                            style="max-height: 35rem;">
                        <?php
                            include('functions/php/config.php');
                            
                            $query = "SELECT * FROM subject";
                            $result = $con->query($query);

                            if(mysqli_num_rows($result) > 0): ?>
                                <table class="table table-striped table-bordered w-100 mt-auto" >
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true">Course ID</th>
                                                    <th data-sortable="true">Course Name</th>
                                                    <th data-sortable="true" class="text-center">Units</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="schedTable">
                        
                        <?php while ($row = $result -> fetch_assoc()): ?>
                            <tr>
                                <td class=""><?php echo $row['idSub']; ?></td>
                                <td class=""><?php echo $row['name']; ?></td>
                                <td class="text-center"><?php echo $row['unitTot']; ?></td>
                                <td class="mx-auto text-center">
                                    <a href="#" class="mx-1 clear text-muted view" data-id="<?php echo $row['id']; ?>"
                                        data-bs-toggle="modal" data-bs-target="#view-sched" id="<?php echo $row['id']; ?>">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="mx-1 clear text-primary edit" data-id="<?php echo $row['id']; ?>"
                                        data-bs-toggle="modal" data-bs-target="#edit-sched" id="<?php echo $row['id']; ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile ?>
                            </tbody>
                        </table>
                        
                        <?php else:?>        
                            <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                                <h2 class="fs-3 text-white text-center"> No subjects yet! </h2>
                            </div>

                        <?php endif ?>
                    </div>
                </div>
                </div>

            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center bg-dark">
            <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>

                <div class="modal fade" id="view-sched" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View Schedule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="edit-sched" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Schedule</h5>
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
                            url: 'functions/php/viewSched.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#view-sched').modal('show');
                            }
                        });
                    });

                    $('.edit').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/editSched.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#edit-sched').modal('show');
                            }
                        });
                    });

                    

                    $("#schedSearch").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#schedTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
    </body>

</html>
