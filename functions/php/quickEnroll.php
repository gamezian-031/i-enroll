<?php
    session_start();
    include_once "config.php";
    $id = $_POST['uid'];

    ?>
        <h6>Select a section that you want to enroll</h6>
        <form   action="functions/php/functionSections.php" 
                method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                        <select class="form-select input" name="section">
                        <option selected disabled>Section</option>
                            <?php
                            $querysec = "SELECT * FROM `sections` WHERE `type` = 'B'";
                            $resultsec = $con->query($querysec);

                            while ($rowsec = $resultsec -> fetch_assoc()): ?>
                            <option value="<?php echo $rowsec['section']?>"> <?php echo $rowsec['section']?></option>

                            <?php endwhile?>
                        </select>
                        <label for="section" class="form-label fs-6">Section</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input  type="text" id="type" name="type" class="form-control form-control-lg input visually-hidden"
                    value="quick"/>
                    <button class="btn btn-success" type="submit" name="quickEnroll">Quick Enroll</button>
                </div>
            </div>
        </form>
<?php ?>