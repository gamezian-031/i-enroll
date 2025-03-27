<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from subject WHERE `id` = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form   action="functions/php/editSubject.php" 
                method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" id="idSub" name="idSub" class="form-control form-control-lg input"
                            placeholder="idSub" value="<?php echo $row['idSub']?>"  />
                            <label class="form-label fs-6" for="idSub">Subject ID</label>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-floating">
                            <input type="text" id="name" name="name" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $row['name']?>"  />
                            <label class="form-label fs-6" for="name">Subject Name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select input" name="program" id="program" >
                                <option selected disabled>Curriculum</option>
                                    <?php

                                    $queryb = "SELECT * FROM curriculums";
                                    $resultb = $con->query($queryb);

                                    while ($rowb = $resultb -> fetch_assoc()): ?>
                                    <option value="<?php echo $rowb['idCourse']?>" <?php if($rowb['idCourse'] == $row['program']) echo 'selected="selected"'; ?>><?php echo $rowb['nameCurr']?></option>

                                    <?php endwhile?>
                                </select>
                            <label for="program" class="form-label fs-6">Curriculum</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="number" class="form-control input" id="year" name="year" maxlength="1" 
                                        min="1" max="4" step="1" value="<?php echo $row['year']; ?>" required/>
                            <label class="form-label fs-6" for="year">Year Level</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="number" class="form-control input" id="semester" name="semester" maxlength="1" 
                                    min="1" max="2" step="1" value="<?php echo $row['semester']; ?>" required/>
                            <label class="form-label fs-6" for="semester">Semester</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                        <input type="text" class="form-control input" id="unitLec" name="unitLec" 
                        value="<?php echo $row['unitLec']?>" />
                            <label for="program" class="form-label fs-6">Lecture Units</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                        <input type="text" class="form-control input" id="unitLab" name="unitLab" 
                        value="<?php echo $row['unitLab']?>" />
                            <label for="program" class="form-label fs-6">Laboratory Units</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="col-12">
                    <div class="form-floating">
                    <input type="text" class="form-control input" id="prerequisite" name="prerequisite" 
                    value="<?php echo $row['prerequisite']?>" />
                        <label for="program" class="form-label fs-6">Pre-Requisite</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating">
                        <input type="text" class="form-control visually-hidden" 
                        value="<?php echo $row['id']?>" name="id" placeholder="id">
                    </div>
                    <button class="btn btn-success" type="submit" name="editCurriculum">Edit Curriculum Data</button>
                </div>
            </div>

            
        </form>
<?php } ?>