<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `departments` WHERE `id` = '$id'") or die($con -> error);
    $row = $query -> fetch_assoc()?>
        <form 
            action="functions/php/editDepartment.php" 
            method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" id="idDept" name="idDept" class="form-control form-control-lg input"
                                    placeholder="Code" value="<?php echo $row['idDept']?>" required />
                            <label class="form-label fs-6" for="idDept">Department Code</label>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-floating">
                            <input type="text" id="nameDept" name="nameDept" class="form-control form-control-lg input"
                            placeholder="Course Code" value="<?php echo $row['nameDept']?>" required />
                            <label class="form-label fs-6" for="nameDept">Department Name</label>
                        </div>
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
<?php  ?>