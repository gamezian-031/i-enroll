<!doctype html>
<html>
  <?php
      include "config.php";

      $idStud = $_POST['idStud'];
      $gradeRow = array();
      $gradeRow = $_POST['acadRow'];
      foreach($gradeRow as $row){
        $status = $row['status'] ;
        $idSub = $row['idSub'];


        $query = "UPDATE `student-academics` 
      
        SET `status` = '$status'

        WHERE `idStud` = '$idStud' AND `idSub` = '$idSub';";

        $result = $con->query($query);

      }
      header("location:../../adminDash.php");
  ?>
</html>
