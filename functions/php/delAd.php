<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `user-admin` WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form
                action="functions/php/delAdmin.php" 
                method="post"
                onsubmit=""
                class="d-flex flex-column">

                    <div class="container my-1">
                        <h3>Delete Admin?</h3>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control visually-hidden" 
                        value="<?php echo $row['id']?>" name="id" placeholder="id">
                    </div>

                    <button class="btn btn-danger" type="submit" name="deleteCurriculum">Delete</button>
        </form>
<?php } ?>