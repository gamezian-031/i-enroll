<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];

    $studentQuery = $con -> query("SELECT * FROM `user-student` WHERE `id` = '$id'");
    $studentData = $studentQuery -> fetch_assoc();
    $idStud = $studentData['idStud'];
    $studProg = $studentData['program'];
    $yrLvl = $studentData['yrLvl'];


    $query = $con -> query("SELECT * from `curriculums` WHERE `idCurr` = '$studProg'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { ?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <input type="text" id="idCurr" name="idCurr" class="form-control form-control-lg input"
                                placeholder="Code" value="<?php echo $row['idCurr'];?>" readonly />
                        <label class="form-label fs-6" for="idCurr">Curriculum Code</label>
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-floating">
                        <input type="text" id="nameCurr" name="nameCurr" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $row['nameCurr'];?>" readonly />
                        <label class="form-label fs-6" for="nameCurr">Curriculum Name</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
            <h3>Curriculum Status</h3>
            <?php
                for ($yr = 1; $yr <= $yrLvl; $yr++) {
                    for ($sem = 1; $sem <= 2; $sem++) { ?>
                        <h4>Year <?php echo $yr;?>, Semester <?php echo $sem;?></h4>
                        <?php
                            $querys = "SELECT * FROM subject WHERE `year` = '$yr' AND `semester` = '$sem'";
                            $results = $con->query($querys);

                            if(mysqli_num_rows($results) > 0): ?>
                            <table class="table table-striped table-bordered w-100">
                                <thead class="fs-6">
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th class="text-center">Midterm Grade</th>
                                        <th class="text-center">Tentative Grade</th>
                                        <th class="text-center">Final Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                    <?php 
                        while ($rows = $results -> fetch_assoc()): 
                            $idSubs = $rows['idSub'];
                            $statQuery = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$idSubs'";
                            $statData = $con->query($statQuery);
                            $statResult = $statData -> fetch_assoc();?>
                        <tr>
                            <td class=""><?php echo $rows['idSub']; ?></td>
                            <td class=""><?php echo $rows['name']; ?></td>
                            <td class="text-center"><?php echo $statResult['midGrade']?></td>
                            <td class="text-center"><?php echo $statResult['tntGrade']?></td>
                            <td class="text-center"><?php echo $statResult['grade']?></td>
                        </tr>
                    <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            
            <?php } }?>
            
        </div>
<?php } ?>