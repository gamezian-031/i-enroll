<?php
    session_start();
    include "config.php";


    $id = $_POST['uid']; ?>
        <form 
            action="functions/php/changePassword.php" 
            method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" name="id" class="form-control form-control-lg input"
                            placeholder="ID Number" value="<?php echo $id?>" readonly/>
                            <label class="form-label fs-6" for="id">ID</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" name="type" class="form-control form-control-lg input"
                            placeholder="ID Number" 
                            value="<?php 
                            if      (isset($_SESSION['studUser'])){
                                    echo 'student';} 
                            elseif  (isset($_SESSION['faculUser'])){
                                    echo 'faculty';}
                            ?>" 
                            readonly/>
                            <label class="form-label fs-6" for="type">Type</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="password" id="oldPass" name="oldPass" class="form-control form-control-lg input"
                            placeholder="New Password"/>
                            <label class="form-label fs-6" for="newPass">Old Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="password" id="newPass" name="newPass" class="form-control form-control-lg input"
                            placeholder="New Password"/>
                            <label class="form-label fs-6" for="newPass">New Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="password" id="newPassC" name="newPassC" class="form-control form-control-lg input"
                            placeholder="New Password"/>
                            <label class="form-label fs-6" for="newPassC">Confirm New Password</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Change Password</button>
                </div>
            </div>
        </form>

        
