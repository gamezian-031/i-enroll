<?php
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $active = $_POST['enrollState'];

    $xml=simplexml_load_file(__DIR__ . '/configure.xml') or die("Error: Cannot create object");

    $xml -> year = $year;
    $xml -> sem = $sem;
    $xml -> active = $active;

    $xml -> asXML(__DIR__ . '/configure.xml');

    echo    "<script>
            window.alert('Edit Complete');
            window.location.href = '../../adminConf.php';
            </script>";

?>