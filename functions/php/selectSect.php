<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];

    $idStud = $_SESSION['studUser'];
    $enrollCode = $_SESSION['enrollCode'];
    ?>

        <div class="container gap-2 d-flex flex-column">
            <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
                <h4>Course Schedules</h4>

                <?php   $schedQuery = $con -> query("SELECT * from `schedule` WHERE `idSub` = '$id'") or die($con -> error);
                        if(mysqli_num_rows($schedQuery) > 0): ?>
                    <table class="table table-striped table-bordered w-100">
                            <thead class="fs-6">
                                <tr>
                                    <th>Section</th>
                                    <th>Class Size</th>
                                    <th>Professor</th>
                                    <th>Room</th>
                                    <th>Days</th>
                                    <th>Time Start</th>
                                    <th>Time End</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php while($rows = $schedQuery -> fetch_assoc()):
                            $subj = $rows['idSub'];
                            $sect = $rows['section'];?>
                            <tr>
                                <td class=""><?php echo $rows['section']; ?></td>
                                <td class=""><?php echo $rows['studLimit']; ?></td>
                                <td class=""><?php echo $rows['faculty']; ?></td>
                                <td class=""><?php echo $rows['room']; ?></td>
                                <td class=""><?php echo $rows['days']; ?></td>
                                <td class="text-center"><?php echo $rows['timeIni']; ?></td>
                                <td class="text-center"><?php echo $rows['timeEnd']; ?></td>
                                <td class="">
                                    <?php   
                                        $countQuery = $con -> query("SELECT COUNT(*) as `studCount` FROM `student-enrollment` WHERE `section` = '$sect' AND `idSub` = '$id'") or die($con -> error);
                                        $countData = $countQuery -> fetch_assoc();
                                        $limitQuery = $con -> query("SELECT `studLimit` FROM `schedule` WHERE `section` = '$sect' AND `idSub` = '$id'") or die($con -> error);
                                        $limitData = $limitQuery -> fetch_assoc();
                                        if($countData['studCount'] < $limitData['studLimit']):
                                            $enrollQuery = $con -> query("SELECT * from `student-enrollment` WHERE `section` = '$sect' AND `enrollCode` = '$enrollCode' AND `idSub` = '$id'") or die($con -> error);
                                            if(mysqli_num_rows($enrollQuery) > 0): ?>
                                            <form   action="functions/php/functionSections.php" 
                                                    method="post">
                                                    <input type="text" id="type" name="type" class="form-control form-control-lg input visually-hidden"
                                                    value="delete"/>
                                                    <input type="text" id="idSub" name="idSub" class="form-control form-control-lg input visually-hidden"
                                                    value="<?php echo $subj?>"/>
                                                    <input type="text" id="section" name="section" class="form-control form-control-lg input visually-hidden"
                                                    value="<?php echo $sect?>"/>
                                                    <button class="btn btn-sm btn-outline-none shadow-none text-nowrap text-danger fs-6" type="submit" name="functionSections"><i class="bi bi-dash"></i>Remove</button>
                                            </form>
                                            <?php else: 
                                            $statQuery = $con -> query("SELECT * from `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$subj'") or die($con -> error);
                                            $statData = $statQuery -> fetch_assoc();
                                                if($statData['status'] == 'R'): ?>
                                                    <form   action="functions/php/functionSections.php" 
                                                            method="post">
                                                            <input type="text" id="type" name="type" class="form-control form-control-lg input visually-hidden"
                                                            value="change"/>
                                                            <input type="text" id="idSub" name="idSub" class="form-control form-control-lg input visually-hidden"
                                                            value="<?php echo $subj?>"/>
                                                            <input type="text" id="section" name="section" class="form-control form-control-lg input visually-hidden"
                                                            value="<?php echo $sect?>"/>
                                                            <button class="btn btn-sm btn-outline-none shadow-none text-nowrap text-dark fs-6" type="submit" name="functionSections"><i class="bi bi-plus"></i>Change</button>
                                                    </form>
                                                    <?php else: ?>
                                                    <form   action="functions/php/functionSections.php" 
                                                            method="post">
                                                            <input type="text" id="type" name="type" class="form-control form-control-lg input visually-hidden"
                                                            value="add"/>
                                                            <input type="text" id="idSub" name="idSub" class="form-control form-control-lg input visually-hidden"
                                                            value="<?php echo $subj?>"/>
                                                            <input type="text" id="section" name="section" class="form-control form-control-lg input visually-hidden"
                                                            value="<?php echo $sect?>"/>
                                                            <button class="btn btn-sm btn-outline-none shadow-none text-nowrap text-primary fs-6" type="submit" name="functionSections"><i class="bi bi-plus"></i>Select</button>
                                                    </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <a class="fs-6 text-danger text-decoration-none"> <i class="bi bi-slash-circle"></i> Full </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                            </tbody>
                    </table>
                    <?php else: ?>
                    <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                        <h2 class="fs-3 text-white text-center"> No schedules yet! </h2>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
<?php ?>