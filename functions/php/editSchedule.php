<!doctype html>
<html>
  <?php
      include "config.php";
      
      
      $schedRow = array();
      $schedRow = $_POST['schedRow'];
      foreach($schedRow as $row){
        $idSub = $row['idSub'];
        $section = $row['section'];
        $studLimit = $row['studLimit'];
        $faculty = $row['faculty'];
        $room = $row['room'];
        $days = $row['days'];
        $timeIni = $row['timeIni'];
        $timeEnd = $row['timeEnd'];

        $query = "UPDATE `schedule` 
      
        SET `studLimit` = '$studLimit', `faculty` = '$faculty',
        `room` = '$room', `days` = '$days',
        `timeIni` = '$timeIni', `timeEnd` = '$timeEnd'

        WHERE `section` = '$section' AND `idSub` = '$idSub';";

        $result = $con->query($query);

      }
      header("location:../../adminSchedules.php");
  ?>
</html>
