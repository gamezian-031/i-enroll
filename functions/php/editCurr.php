<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `curriculums` WHERE `id` = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form 
            action="functions/php/editCurriculum.php" 
            method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" id="idCurr" name="idCurr" class="form-control form-control-lg input"
                                    placeholder="Code" value="<?php echo $row['idCurr']?>" required/>
                            <label class="form-label fs-6" for="idCurr">Curriculum Code</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" id="idCourse" name="idCourse" class="form-control form-control-lg input"
                            placeholder="Course Code" value="<?php echo $row['idCourse']?>" required />
                            <label class="form-label fs-6" for="idCourse">Course Code</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" id="nameCurr" name="nameCurr" class="form-control form-control-lg input"
                                placeholder="Name" value="<?php echo $row['nameCurr']?>" required/>
                            <label class="form-label fs-6" for="nameCurr">Curriculum Name</label>
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
<?php } ?>