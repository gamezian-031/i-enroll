<?php
  session_start();
  include "config.php";
  $idStud = $_POST['idStud'];

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;

  require '../../assets/php/PHPMailer-6.7.1/src/Exception.php';
  require '../../assets/php/PHPMailer-6.7.1/src/PHPMailer.php';
  require '../../assets/php/PHPMailer-6.7.1/src/SMTP.php';

  $studState = "SELECT * FROM `user-student` WHERE `idStud` = '$idStud'";
  $studQuery = $con->query($studState);
  $studRes = $studQuery -> fetch_assoc();
  $email = dataDecrypt($idStud, $studRes['email']);

  $query =    "UPDATE `user-student` 
  
              SET `validation` = 'T'

              WHERE `idStud` = '$idStud';";

  $result = $con->query($query);


  $mail = new PHPMailer(true);

    try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tcu.edu123@gmail.com';                     //SMTP username
    $mail->Password   = 'aaroujsfakgvxtrj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tcu.edu123@gmail.com', 'Taguig City University');
    $mail->addAddress($email);               //Name is optional

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Student Registration Validation';
    $mail->Body    = 
    'Your account has been validated. <br> 
    You can access the enrollment portal.
    ' 
    ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  } catch (Exception $e) {
  }


  if($result){
  header("location:../../adminDash.php");
}else{
  header("location:../../adminDash.php");
}
?>