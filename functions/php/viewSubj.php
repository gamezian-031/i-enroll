<?php
    session_start();
    include "config.php";
    $uid = $_POST['uid'];


    $query = $con -> query("SELECT * from subject WHERE id = '$uid'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <input type="text" id="idSub" name="idSub" class="form-control form-control-lg input"
                        placeholder="Code" value="<?php echo $row['idSub']?>" readonly />
                        <label class="form-label fs-6" for="idSub">Subject Code</label>
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-floating">
                        <input type="text" id="name" name="name" class="form-control form-control-lg input"
                        placeholder="Name" value="<?php echo $row['name']?>" readonly />
                        <label class="form-label fs-6" for="name">Subject Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="form-floating">
                        <select class="form-select input" name="program" id="program" value="<?php echo $row['program']?>" disabled>
                            <option value="<?php echo $row['program']?>" selected disabled><?php echo $row['program']?></option>
                        </select>
                        <label for="program" class="form-label fs-6">Curriculum</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <select class="form-select input fs-6" name="type" id="type" disabled>
                            <option selected disabled>Select Option</option>
                            <option value="P" <?php if("P" == $row['type']) echo 'selected="selected"'; ?>>Program Major / Elective</option>
                            <option value="M" <?php if("M" == $row['type']) echo 'selected="selected"'; ?>>Minor / General Elective</option>
                        </select>
                        <label for="type" class="form-label fs-6">Type of Course</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select input" name="year" id="year" disabled>
                            <option value="<?php echo $row['year']?>" selected disabled><?php echo $row['year']?></option>
                        </select>
                        <label class="form-label fs-6" for="idSub">Year Level</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select input" name="semester" id="semester" disabled>
                            <option value="<?php echo $row['semester']?>" selected disabled><?php echo $row['semester']?></option>
                        </select>
                        <label class="form-label fs-6" for="idSub">Semester</label>
                    </div>
                </div>
                <div class="col-3">
                        <div class="form-floating">
                        <input type="text" class="form-control input" id="unitLec" name="unitLec" 
                        value="<?php echo $row['unitLec']?>" readonly/>
                            <label for="program" class="form-label fs-6">Lecture Units</label>
                        </div>
                    </div>
                <div class="col-3">
                    <div class="form-floating">
                    <input type="text" class="form-control input" id="unitLab" name="unitLab" 
                    value="<?php echo $row['unitLab']?>" readonly/>
                        <label for="program" class="form-label fs-6">Laboratory Units</label>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="col-12">
                <div class="form-floating">
                <input type="text" class="form-control input" id="prerequisite" name="prerequisite" 
                value="<?php echo $row['prerequisite']?>" readonly/>
                    <label for="program" class="form-label fs-6">Pre-Requisite</label>
                </div>
            </div>
        </div>
<?php } ?>