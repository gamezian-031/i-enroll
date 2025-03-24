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
            </nav>

            <div class="bg text-white" style="background-image: url('assets/img/bg2.png');">
                <div class="bg-overlay d-flex justify-content-center align-items-center">
                    <div class="container py-5 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5">
                        <h1 class="text-dark fs-3 fs-lg-1">Admin Log-in</h1>
                        <hr class="text-dark border border-dark border-1 w-80 fs-1">
                        <div>
                        <form class="d-grid text-dark">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
