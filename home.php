<?php 

?>

<html>
    <head>
        <title> i-Enroll System </title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>
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
                        <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#enroll">Enroll Now!</a>
                        </li>
                    </ul>
                    <span class="navbar-text d-none">
                    </span>
                </div>
            </div>
        </nav>

            <div class="wrapper">
                <div class="bg min-vh-100 vw-100 text-white" style="background-image: url('assets/img/bg.png');" id="home">
                    <div class="h-100 w-100 bg-overlay d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fs-1 my-5"> Welcome to Taguig University!</h1>
                        <a class="en nav-link border border-1 border-white rounded-pill w-auto text-white my-5 " href="#enroll">Enroll Now!</a>
                    </div>
                </div>

                <hr class="border border-secondary border-3 m-0" style="opacity: 100;">

                <div class="bg min-vh-100 vw-100 h-auto p-5 d-flex flex-column justify-content-center align-items-center" id="about">
                    <div class="container p-4 d-flex flex-column flex-lg-row gap-5 justify-content-center align-items-center">
                        <div>
                            <img src="assets/img/school-logo.png" style="height: 12rem;">
                        </div>
                        <div class="">
                            <h2 class="fs-1 text-center text-lg-start maroon">Established in 2006</h5>
                            <p class="fs-lg-6 fs-4 text-center text-lg-start">
                                Motivated by the urgency of the need to serve the youth of a burgeoning
                                Taguig City, the Local Government Administration came up with Ordinance No.29 
                                series 2004 "An Ordinance Establishing the Pamantasan ng Taguig and Appropriate 
                                Funds Thereof". This was one of the offshoots of the provision of the Local 
                                Government Code.
                            </p>
                        </div>
                    </div>
                    <hr class="maroon bd-maroon divider w-50" style="height: 0.25rem;">
                    <div class="container p-4 d-flex flex-column flex-lg-row gap-5 justify-content-center align-items-center w-lg-75">
                        <div>
                            <i class="bi bi-image-alt maroon" style="font-size: 8rem;"></i>
                        </div>
                        <div class="">
                            <h2 class="fs-1 text-center text-lg-start maroon">Mission</h5>
                            <p class="fs-lg-6 fs-4 text-center text-lg-start">
                                To nurture a vibrant culture of academic wellness responsive to the challenges
                                of technology and the global community.
                            </p>
                        </div>
                    </div>
                    <hr class="maroon bd-maroon divider w-50" style="height: 0.25rem;">
                    <div class="container p-4 d-flex flex-column flex-lg-row gap-5 justify-content-center align-items-center w-lg-75">
                        <div>
                            <i class="bi bi-bullseye maroon" style="font-size: 8rem;"></i>
                        </div>
                        <div class="">
                            <h2 class="fs-1 text-center text-lg-start maroon">Vision</h5>
                            <p class="fs-lg-6 fs-4 text-center text-lg-start">
                                An eminent center of excellent higher education towards societal advancement.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg bg-secondary min-vh-100 vw-100 h-auto p-5 d-flex flex-column justify-content-center align-items-center" id="contact">
                    <div class="d-flex flex-lg-row flex-column justify-content-center align-items-between">
                        <div class="d-flex flex-column justify-content-center align-items-center gap-5">
                            <div class="d-flex flex-column justify-content-center align-items-center">   
                                <h1 class="text-dark fs-1">Contact Us!</h1>
                                <hr class="text-dark border border-dark border-1 w-80 fs-1">
                                <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center text-dark gap-2 gap-lg-5">
                                    <div class="card bg-maroon" style="height: 8rem; width: 12rem;">
                                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <p class="card-text fs-6 text-center">  Gen. Santos Ave., Central Bicutan, Taguig City
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card bg-dark" style="height: 8rem; width: 12rem;">
                                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                            <i class="bi bi-telephone-fill"></i>
                                            <p class="card-text fs-6">  Main Line: 635-8300
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card bg-maroon" style="height: 8rem; width: 12rem;">
                                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                            <i class="bi bi-facebook"></i>
                                            <p class="card-text fs-6">  Guidance and Testing Center
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg min-vh-100 vw-100 h-auto p-5 d-flex flex-column justify-content-center align-items-center" id="enroll">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fs-1 text-dark"> Student Registration Portals </h1>
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3 gap-lg-5">
                            <a href="studNewCreate.php" class="btn btn-secondary text-decoration-none ">
                                <div class="card bg-secondary" style="height: 8rem; width: 10rem;">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                        <i class="bi bi-person-plus-fill fs-4"></i>
                                        <h5 class="fs-5">New Student</h6>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="studOldCreate.php" class="btn btn-secondary text-decoration-none ">
                                <div class="card bg-secondary" style="height: 8rem; width: 10rem;">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                        <i class="bi bi-person-fill fs-4"></i>
                                        <h5 class="fs-5">Old Student</h6>
                                    </div>
                                </div>
                            </a>

                            <a href="studLogin.php" class="btn btn-secondary text-decoration-none ">
                                <div class="card bg-secondary" style="height: 8rem; width: 10rem;">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                        <i class="bi bi-person-fill fs-4"></i>
                                        <h5 class="fs-5">Enrollment Portal</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fs-1 text-dark"> Portals </h1>
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3 gap-lg-5">
                            <a href="adminLogin.php" class="btn btn-dark bg-maroon text-decoration-none ">
                                <div class="card bg-maroon" style="height: 8rem; width: 10rem;">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                        <i class="bi bi-person-plus-fill fs-4"></i>
                                        <h5 class="text-white fs-5">Administrator Portal</h6>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="facultyLogin.php" class="btn btn-dark bg-maroon text-decoration-none ">
                                <div class="card bg-maroon" style="height: 8rem; width: 10rem;">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                        <i class="bi bi-person-fill fs-4"></i>
                                        <h5 class="text-white fs-5">Faculty Portal</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark">
                <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
