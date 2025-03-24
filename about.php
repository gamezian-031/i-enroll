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
                            <a class="nav-link active" href="about.php">About</a>
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
                </div>
            </nav>
            
            <div class="bg d-flex flex-row justify-content-center align-items-center" style="">
                <div class="d-flex flex-column justify-content-center align-items-center my-auto mx-5 gap-3 w-auto h-auto">
                    <div class="flex-shrink-1 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                        <img src="assets/img/school-logo.png" alt="" class="" style="width: auto; height: auto;">
                    </div>
                    <div class="text-dark flex-grow-1 d-flex">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card px-10" style="max-width: 60rem;">
                                        <div class="card-body">
                                            <h2 class="card-title">Established in 2006</h5>
                                            <p class="card-text fs-5 fs-lg-4">   Motivated by the urgency of the need to serve the youth of a burgeoning
                                                                    Taguig City, the Local Government Administration came up with Ordinance No.29 
                                                                    series 2004 "An Ordinance Establishing the Pamantasan ng Taguig and Appropriate 
                                                                    Funds Thereof". This was one of the offshoots of the provision of the Local 
                                                                    Government Code.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card px-10" style="max-width: 60rem;">
                                        <div class="card-body">
                                            <h2 class="card-title">Mission</h5>
                                            <p class="card-text fs-5 fs-lg-4">  To nurture a vibrant culture of academic wellness responsive to the challenges
                                                                                of technology and the global community.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card px-10" style="max-width: 60rem;">
                                        <div class="card-body">
                                            <h2 class="card-title">Vision</h5>
                                            <p class="card-text fs-5 fs-lg-4">  An eminent center of excellent higher education towards societal advancement.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon text-dark visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon text-dark visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
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
