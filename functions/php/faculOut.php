<?php
    session_start();
    unset($_SESSION["faculUser"]);
    header("Location:../../facultyLogin.php");
?>