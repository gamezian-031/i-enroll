<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `user-admin` WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form 
            action="functions/php/editAdmin.php" 
            method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                            placeholder="First Name" value="<?php echo $row['fName'] ?>"  />
                            <label class="form-label fs-6" for="fName">First Name</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" id="mName" name="mName" class="form-control form-control-lg input"
                            placeholder="Middle Name" value="<?php echo $row['mName'] ?>"  />
                            <label class="form-label fs-6" for="lastName">Middle Name</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating ">
                            <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                            placeholder="Last Name" value="<?php echo $row['lName'] ?>"  />
                            <label class="form-label fs-6" for="lName">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="row py-2 gap-2">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" id="email" name="email" class="form-control form-control-lg input"
                            placeholder="email" value="<?php echo dataDecrypt($row['idAdmin'], $row['email']) ?>"  />
                            <label class="form-label fs-6" for="email">E-Mail</label>
                        </div>
                    </div>
                </div>

                <div class="row py-2 gap-2 gap-lg-0">
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" id="username" name="username" class="form-control form-control-lg input"
                            placeholder="username" value="<?php echo $row['username'] ?>"  />
                            <label class="form-label fs-6" for="username">Username</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="password" id="password" name="password" class="form-control form-control-lg input"
                            placeholder="password" value="<?php echo dataDecrypt($row['idAdmin'], $row['password']) ?>"  />
                            <label class="form-label fs-6" for="Password">Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating">
                            <input type="text" class="form-control visually-hidden" 
                            value="<?php echo $row['idAdmin']?>" name="idAdmin" placeholder="id">
                    </div>
                    <button class="btn btn-success" type="submit" name="editAdmin">Edit Admin Data</button>
                </div>
            </div>
        </form>
<?php } ?>