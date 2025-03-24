<?php 

?>

<html>
    <head>
        <title> i-Enroll System </title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
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
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="enroll.php">Enroll Now!</a>
                            </li>
                        </ul>
                        <span class="navbar-text d-none">
                        </span>
                </div>
            </nav>

            <div class="bg text-white" style="background-image: url('assets/img/bg2.png');">
                <div class="bg-overlay d-flex justify-content-center align-items-center">
                    <div class="container py-5 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5">
                        <h1 class="text-dark fs-3 fs-lg-1">Student Log-in</h1>
                        <div class="d-grid text-dark fs-4">
                            <form>
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating">
                                            <input type="text" id="firstName" name="first_name" class="form-control form-control-lg input"
                                            placeholder="First Name" required />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating ">
                                            <input type="text" id="lastName" name="middle_name" class="form-control form-control-lg input"
                                            placeholder="Middle Name" required />
                                            <label class="form-label" for="lastName">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-floating ">
                                            <input type="text" id="lastName" name="last_name" class="form-control form-control-lg input"
                                            placeholder="Last Name" required />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" id="firstName" name="first_name" class="form-control form-control-lg input"
                                            placeholder="First Name" required />
                                            <label class="form-label" for="firstName">Address</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <div class="form-floating datepicker">
                                                <input type="date" class="form-control input" id="birth" name="birthdate" required/>
                                                <label for="birth" class="form-label">Birthday</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select input" name="gender" id="gender">
                                            <option selected disabled>Sex</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="X">Prefer not to say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select input" name="civStat" id="civStat">
                                                <option selected disabled>Civil Status</option>
                                                <option value="S">Single</option>
                                                <option value="M">Married</option>
                                                <option value="X">Separated</option>
                                                <option value="W">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control input" id="birth" name="birthdate" required/>
                                            <label for="birth" class="form-label">Contact #</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control input" id="birth" name="birthdate" required/>
                                            <label for="birth" class="form-label">Nationality</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control input" id="birth" name="birthdate" required/>
                                            <label for="birth" class="form-label">Religion</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                        <select class="form-select input" name="civil_status" id="civil_status">
                                            <option selected disabled>Program</option>
                                            <option value="">Prog 1</option>
                                            <option value="">Prog 2</option>
                                            <option value="">Prog 3</option>
                                            <option value="">Prog 4</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                        <select class="form-select input" name="civil_status" id="civil_status">
                                            <option selected disabled>Year Level</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" id="firstName" name="first_name" class="form-control form-control-lg input"
                                            placeholder="First Name" required />
                                            <label class="form-label" for="firstName">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" id="firstName" name="first_name" class="form-control form-control-lg input"
                                            placeholder="First Name" required />
                                            <label class="form-label" for="firstName">Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">My info is correct and would like to register.</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
