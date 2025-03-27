<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from curriculums WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        $idCour = $row['idCourse'];?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" id="idCurr" name="idCurr" class="form-control form-control-lg input"
                                placeholder="Code" value="<?php echo $row['idCurr']?>" readonly />
                        <label class="form-label fs-6" for="idCurr">Curriculum Code</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" id="idCourse" name="idCourse" class="form-control form-control-lg input"
                        placeholder="Course Code" value="<?php echo $row['idCourse']?>" readonly />
                        <label class="form-label fs-6" for="idCourse">Course Code</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" id="nameCurr" name="nameCurr" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $row['nameCurr']?>" readonly />
                        <label class="form-label fs-6" for="nameCurr">Curriculum Name</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
            <h4>Curriculum Template</h4>
            <?php
                $checkQuery = "SELECT * FROM `subject` WHERE `program` = '$idCour'";
                $checkRes = $con->query($checkQuery);
                if(mysqli_num_rows($checkRes) > 0):
                    for ($yr = 1; $yr <= 4; $yr++) {
                        for ($sem = 1; $sem <= 2; $sem++) { ?>
                            <?php
                                $querys = "SELECT * FROM `subject` WHERE `year` = '$yr' AND `semester` = '$sem' AND `program` = '$idCour'";
                                $results = $con->query($querys);

                                if(mysqli_num_rows($results) > 0): ?>
                                <h4>Year <?php echo $yr?>, Semester <?php echo $sem?></h4>
                                <table class="table table-striped table-bordered w-100">
                                    <thead class="fs-6">
                                        <tr>
                                            <th>Subject ID</th>
                                            <th>Subject Name</th>
                                            <th>Curriculum</th>
                                            <th>Units (Lec)</th>
                                            <th>Units (Lab)</th>
                                            <th>Total Units</th>
                                            <th>Pre-Requisites</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        
                        <?php while ($rows = $results -> fetch_assoc()): ?>
                            <tr>
                                <td class=""><?php echo $rows['idSub']; ?></td>
                                <td class=""><?php echo $rows['name']; ?></td>
                                <td class=""><?php echo $rows['program']; ?></td>
                                <td class="text-center"><?php echo $rows['unitLec']; ?></td>
                                <td class="text-center"><?php echo $rows['unitLab']; ?></td>
                                <td class="fw-bold text-center"><?php echo $rows['unitTot']; ?></td>
                                <td class=""><?php echo $rows['prerequisite']; ?></td>
                            </tr>
                        <?php endwhile ?>
                            </tbody>
                        </table>
                        
                    <?php endif ?>            
                <?php } }?>
                <?php else: ?>
                    <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                        <h2 class="fs-3 text-white text-center"> No subjects yet </h2>
                    </div>
            <?php endif ?>
        </div>
<?php } ?>