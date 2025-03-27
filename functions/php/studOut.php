<?php
    session_start();
    unset($_SESSION['studUser']);
    unset($_SESSION['enrollCode']);
    header("Location:../../home.php");
?>