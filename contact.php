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
                            <a class="nav-link active" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="enroll.php">Enroll Now!</a>
                            </li>
                        </ul>
                        <span class="navbar-text d-none">
                        </span>
                    </div>
                </div>
            </nav>

            <div class="bg text-white" style="background-image: url('assets/img/bg2.png');">
                <div class="bg-overlay d-flex justify-content-center align-items-center">
                    <div class="container py-5 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5">
                        <h1 class="text-dark fs-4 fs-lg-1">Contact Us!</h1>
                        <hr class="text-dark border border-dark border-1 w-80 fs-1">
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center text-dark gap-2 gap-lg-5">
                            <div class="card bg-success" style="height: 8rem; width: 12rem;">
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
                            <div class="card bg-primary" style="height: 8rem; width: 12rem;">
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

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
