<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `user-student` WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form
                action="functions/php/delStudent.php" 
                method="post"
                onsubmit=""
                class="d-flex flex-column">

                    <div class="container my-1">
                        <h3>Delete Student?</h3>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control visually-hidden" 
                        value="<?php echo $row['id']?>" name="id" placeholder="id">
                    </div>

                    <button class="btn btn-danger" type="submit" name="deleteStudent">Delete</button>
        </form>
<?php } ?>