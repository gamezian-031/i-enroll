<!doctype html>
<html>
    <?php 
        session_start();
        include('functions/php/config.php');
    ?>
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
            </nav>

            <div class="bg min-vh-100 vw-100 text-white d-flex flex-column justify-content-center align-items-center" style="background-image: url('assets/img/bg2.png');">
                <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="container container-lg w-50 w-lg-25 p-5 p-lg-10 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5 opacity-25">
                        <h1 class="text-dark fs-2">Forgot Password</h1>
                        <hr class="text-dark border border-dark border-1 w-80 fs-1">
                        <div>
                        <form 
                            method="post" 
                            action="functions/php/forgotPassword.php"
                            class="d-grid text-dark gap-3">
                            <div class="mb-3">
                                <label for="username" class="form-label text-dark fs-2">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="d-flex flex-column text-center gap-2">
                                <button type="submit" class="btn btn-primary w-auto">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark">
                <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#apassword a").on('click', function(event) {
                event.preventDefault();
                if($('#apassword input').attr("type") == "text"){
                    $('#apassword input').attr('type', 'password');
                    $('#apassword i').addClass( "bi bi-eye-slash-fill" );
                    $('#apassword i').removeClass( "fa-eye" );
                }else if($('#apassword input').attr("type") == "password"){
                    $('#apassword input').attr('type', 'text');
                    $('#apassword i').removeClass( "bi bi-eye-slash-fill" );
                    $('#apassword i').addClass( "bi bi-eye-fill" );
                }
            });
        });
    </script>
    
</html>
