<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `user-faculty` WHERE `id` = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                        placeholder="First Name" value="<?php echo $row['fName']?>" readonly />
                        <label class="form-label fs-6" for="fName">First Name</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" id="mName" name="mName" class="form-control form-control-lg input"
                        placeholder="Middle Name" value="<?php echo $row['mName']?>" readonly/>
                        <label class="form-label fs-6" for="lastName">Middle Name</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating ">
                        <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                        placeholder="Last Name" value="<?php echo $row['lName']?>" readonly />
                        <label class="form-label fs-6" for="lName">Last Name</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-floating">
                        <select class="form-select input" name="department" id="department" disabled>
                        <option selected disabled>Select Department</option>
                        <?php
                        include('functions/php/config.php');
                        
                        $deptQry = "SELECT * FROM `departments`;";
                        $deptRes = $con->query($deptQry);

                        while ($deptData = $deptRes -> fetch_assoc()): ?>
                        <option value="<?php echo $deptData['idDept']?>"
                        <?php if($deptData['idDept'] == $row['department']){echo 'selected';}?>
                        ><?php echo $deptData['nameDept']?></option>

                        <?php endwhile?>
                        </select>
                        <label for="department" class="form-label fs-6">Department</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                    <select class="form-select input" name="curriculum" id="curriculum" disabled>
                        <option selected disabled>Select Curriculum</option>
                        <?php
                        include('functions/php/config.php');
                        
                        $currQry = "SELECT * FROM `curriculums`;";
                        $currRes = $con->query($currQry);

                        while ($currData = $currRes -> fetch_assoc()): ?>
                        <option value="<?php echo $currData['idCurr']?>"
                        <?php if($currData['idCurr'] == $row['curriculum']){echo 'selected';}?>
                        ><?php echo $currData['nameCurr']?></option>

                        <?php endwhile?>
                        </select>
                        <label for="curriculum" class="form-label fs-6">Curriculum</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="idFaculty" id="id" name="idFaculty" class="form-control form-control-lg input"
                        placeholder="idFaculty" value="<?php echo $row['idFaculty']?>" readonly />
                        <label class="form-label fs-6" for="idFaculty">Faculty Code</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" id="password" name="password" class="form-control form-control-lg input"
                        placeholder="password" value="<?php echo dataDecrypt($row['idFaculty'], $row['password'])?>" readonly />
                        <label class="form-label fs-6" for="Password">Password</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" id="email" name="email" class="form-control form-control-lg input"
                        placeholder="email" value="<?php echo dataDecrypt($row['idFaculty'], $row['email'])?>" readonly />
                        <label class="form-label fs-6" for="email">Email</label>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>