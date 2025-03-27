<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `user-student` WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                        placeholder="First Name" value="<?php echo $row['fName']?>" readonly />
                        <label class="form-label fs-6" for="fName">First Name</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" id="midName" name="mName" class="form-control form-control-lg input"
                        placeholder="Middle Name" value="<?php echo $row['mName']?>" readonly />
                        <label class="form-label fs-6" for="lastName">Middle Name</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating ">
                        <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                        placeholder="Last Name" value="<?php echo $row['lName']?>" readonly />
                        <label class="form-label fs-6" for="lName">Last Name</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-12">
                    <div class="form-floating">
                        <input type="text" id="address" name="address" class="form-control form-control-lg input"
                        placeholder="Address" value="<?php echo $row['address']?>" readonly />
                        <label class="form-label fs-6" for="address">Address</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-4">
                    <div class="form-floating">
                        <div class="form-floating datepicker">
                            <input type="date" class="form-control input" id="birthdate" name="birthdate" value="<?php echo $row['birthdate']?>" readonly/>
                            <label for="birthdate" class="form-label fs-6">Birthday</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <select class="form-select input fs-6" name="sex" id="sex" disabled>
                        <option selected disabled>Select Option</option>
                        <option value="M" <?php if("M" == $row['sex']) echo 'selected="selected"'; ?>>Male</option>
                        <option value="F" <?php if("F" == $row['sex']) echo 'selected="selected"'; ?>>Female</option>
                        <option value="X" <?php if("X" == $row['sex']) echo 'selected="selected"'; ?>>Prefer not to say</option>
                        </select>
                        <label for="sex" class="form-label fs-6">Sex</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <select class="form-select input fs-6" name="civStat" id="civStat" disabled>
                            <option selected disabled>Select Option</option>
                            <option value="S" <?php if("S" == $row['civStat']) echo 'selected="selected"'; ?>>Single</option>
                            <option value="M" <?php if("M" == $row['civStat']) echo 'selected="selected"'; ?>>Married</option>
                            <option value="X" <?php if("X" == $row['civStat']) echo 'selected="selected"'; ?>>Separated</option>
                            <option value="W" <?php if("W" == $row['civStat']) echo 'selected="selected"'; ?>>Widowed</option>
                        </select>
                        <label for="civStat" class="form-label fs-6">Civil Status</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" class="form-control input" id="contactNo" name="contactNo" maxlength="11" 
                        value="<?php echo dataDecrypt($row['idStud'],$row['contactNo']);?>" readonly/>
                        <label for="contactNo" class="form-label fs-6">Contact #</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" class="form-control input" id="nationality" name="nationality" value="<?php echo $row['nationality']?>" readonly/>
                        <label for="nationality" class="form-label fs-6">Nationality</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" class="form-control input" id="religion" name="religion" value="<?php echo $row['religion']?>" readonly/>
                        <label for="religion" class="form-label fs-6">Religion</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-12">
                    <div class="form-floating">
                    <select class="form-select input" name="program" id="program" disabled>
                        <option selected disabled>Select Program</option>
                        <?php
                        include('functions/php/config.php');
                        
                        $queryb = "SELECT * FROM curriculums WHERE id > 2;";
                        $resultb = $con->query($queryb);

                        while ($rowb = $resultb -> fetch_assoc()): ?>
                        <option value="<?php echo $rowb['idCurr']?>" <?php if($rowb['idCurr'] == $row['program']) echo 'selected="selected"'; ?>><?php echo $rowb['nameCurr']?></option>

                        <?php endwhile?>
                    </select>
                    <label for="program" class="form-label fs-6">Program</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" id="pasword" name="password" class="form-control form-control-lg input"
                        placeholder="password" value="<?php echo dataDecrypt($row['idStud'],$row['password']);?>" readonly />
                        <label class="form-label fs-6" for="password">Password</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-floating">
                        <select class="form-select input fs-6" name="status" id="status" disabled>
                            <option selected disabled>Select Option</option>
                            <option value="N" <?php if("N" == $row['status']) echo 'selected="selected" disabled'; ?>>New</option>
                            <option value="R" <?php if("R" == $row['status']) echo 'selected="selected"'; ?>>Regular</option>
                            <option value="X" <?php if("X" == $row['status']) echo 'selected="selected"'; ?>>Irregular</option>
                        </select>
                        <label for="status" class="form-label fs-6">Student Status</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="number" class="form-control input" id="yearReg" name="yearReg" maxlength="1" 
                            min="2016" max="2099" step="1" value="<?php echo $row['yrReg']; ?>" readonly/>
                        <label for="yearReg" class="form-label fs-6">Year Started</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="number" class="form-control input" id="yearLvl" name="yearLvl" maxlength="1" 
                                min="1" max="4" step="1" value="<?php echo $row['yrLvl']; ?>" readonly/>
                        <label for="yearReg" class="form-label fs-6">Year Level</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-lg-12">
                    <div class="form-floating">
                        <input type="text" id="email" name="email" class="form-control form-control-lg input"
                        placeholder="Email" value="<?php echo dataDecrypt($row['idStud'],$row['email']);?>" readonly />
                        <label class="form-label fs-6" for="email">Email</label>
                    </div>
                </div>
            </div>
            
<?php } ?>