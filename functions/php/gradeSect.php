<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];
    $idArr = explode(", ", $id);
    $idSub = $idArr[0];
    $section = $idArr[1];
    ?>

    <form 
        action="functions/php/gradeSection.php" 
        method="post">

        <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
            <div class="w-100 d-flex flex-row justify-content-between">
                <h3>Students Enrolled</h3>
                <input class="py-1 px-2 ms-auto" id="studSearch" type="text" placeholder="Search..">
            </div>

            <table class="table table-striped table-bordered w-100">
                    <thead class="fs-6">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Midterm</th>
                            <th>Tentative</th>
                            <th>Final</th>
                        </tr>
                    </thead>
                    <tbody id="studTable">
            

    <?php   $query = $con -> query("SELECT * from `student-enrollment` WHERE `idSub` = '$idSub' AND `section` = '$section'") or die($con -> error);
            $counter = 1;
            while($row = $query -> fetch_assoc()): 
                $idStud = $row['idStud'];
                $querys = "SELECT * FROM `user-student` WHERE `idStud` = '$idStud'";
                $results = $con->query($querys);       
                while ($rows = $results -> fetch_assoc()): 
                    $name = $rows['lName'] . ", " . $rows['fName'] . " " . $rows['mName'];
                    $grdQue = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
                    $grdRes = $con->query($grdQue);
                    $grdVal = $grdRes -> fetch_assoc();
                    $grade = $grdVal['grade'];?>
                        <tr>
                            <td class="">
                                <input type="text" class="form-control input" 
                                    name="gradeRow[<?php echo $counter; ?>][idStud]" 
                                    value="<?php echo $idStud; ?>" readonly/>
                            </td>
                            <td class=""><?php echo $name; ?></td>
                            <td class="">
                                <div class="">
                                    <input type="number" class="form-control input" name="gradeRow[<?php echo $counter; ?>][midGrade]" maxlength="3" 
                                            min="1.00" max="5.00" step="0.25" value="<?php echo $grdVal['midGrade']?>" required>
                                </div>
                            </td>
                            <td class="">
                                <div class="">
                                    <input type="number" class="form-control input" name="gradeRow[<?php echo $counter; ?>][tntGrade]" maxlength="3" 
                                            min="1.00" max="5.00" step="0.25" value="<?php echo $grdVal['tntGrade']?>" required>
                                </div>
                            </td>
                            <td class="">
                                <div class="">
                                    <input type="number" class="form-control input" name="gradeRow[<?php echo $counter; ?>][grade]" maxlength="3" 
                                            min="1.00" max="5.00" step="0.25" value="<?php echo $grdVal['grade']?>" required>
                                </div>
                            </td>
                        </tr>
                    <?php $counter++; endwhile; ?>
                <?php endwhile; ?>
                </tbody>
            </table>    
        </div>
        <div class="row">
            <div class="form-floating">
                    <input type="text" class="form-control visually-hidden" 
                    value="<?php echo $idSub;?>" name="idSub" placeholder="idSub">
            </div>
            <button class="btn btn-success" type="submit" name="gradeStudent">Grade Student</button>
        </div>
    </form>

    <script type="text/javascript">
                $(document).ready(function() {
                    $("#studSearch").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#studTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
    </script>
<?php ?>