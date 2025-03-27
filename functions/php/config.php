<?php 
	include_once 'funcs.php';
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'i-enroll';

	$con = new mysqli($server,$user,$pass,$db);

	$tz = 'Asia/Manila';
	date_default_timezone_set('Asia/Manila');

	$xml=simplexml_load_file(__DIR__ . '/configure.xml') or die("Error: Cannot create object");

	$currSem = $xml -> sem;
	$currYear = $xml -> year;
	$enrollState = $xml -> active;
?>