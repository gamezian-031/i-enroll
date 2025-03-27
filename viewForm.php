<!doctype html>
<?php
    include('functions/php/config.php');
    error_reporting(E_ALL ^ E_WARNING); 

    $enrollCode = $_POST['enrollCode'];

    $enrollQuery =  $con -> query("SELECT * FROM `enroll-codes` WHERE `enrollCode` = '$enrollCode'") or die($con -> error);
    $enrollData = $enrollQuery -> fetch_assoc();

?>
<html>

    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>
        <script src="lib/js/html2pdf.bundle.min.js"></script>

    </head>

    <body>
        <div class="d-flex flex-column align-items-center justify-content-center my-1 gap-5" id="document">
            <div class="container container-fluid border border-dark border-2 mt-5"> <!-- upper part -->
                <div class="d-flex flex-row align-items-center justify-content-center gap-5 py-2">
                    <img src="assets/img/taguig-logo.png" alt="" srcset="" style="height: 6rem;">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h5>Republic of the Philippines</h5>
                        <h2>Taguig City University</h2> 

                    </div>
                    <img src="assets/img/school-logo.png" alt="" srcset="" style="height: 6rem;">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center py-1">
                    <h3>Certificate of Enrollment</h3>
                    <h4>Academic Year <?php echo $enrollData['year'];?> - <?php echo $enrollData['year'] + 1;?></h4>
                    <h4><?php if($enrollData['semester'] == 1) echo "First"; elseif($enrollData['semester'] == 2) echo "Second";?> Semester</h4> 
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center py-1">
                    <?php
                        $idStud = $enrollData['idStud'];
                        $studQuery =  $con -> query("SELECT * FROM `user-student` WHERE `idStud` = '$idStud'") or die($con -> error);
                        $studData = $studQuery -> fetch_assoc();
                    ?>

                    <h6 class="pb-1 fs-4"><b>Student No.:</b> <?php echo $studData['idStud']?></h6>
                    
                    <h6><b>Name: </b><?php echo $studData['lName'] . ", " . $studData['fName'] . " " . $studData['mName']?></h6>
                    
                    <h6><b>Year Level / Section: </b> <?php 
                        $status;
                        if ($studData['status'] == 'N') $status = "New";
                        elseif ($studData['status'] == 'R') $status = "Regular";
                        elseif ($studData['status'] == 'X') $status = "Irregular";
                        echo $studData['yrLvl'] . "/ " . $studData['program'] . " /" .  $status?></h6>

                    <?php
                        $curr = $studData['program'];
                        $currQuery =  $con -> query("SELECT * FROM `curriculums` WHERE `idCurr` = '$curr'") or die($con -> error);
                        $currData = $currQuery -> fetch_assoc();

                        $dept = $currData['department'];
                        $deptQuery =  $con -> query("SELECT * FROM `departments` WHERE `idDept` = '$dept'") or die($con -> error);
                        $deptData = $deptQuery -> fetch_assoc();
                    ?>

                    <h6><b>College: </b><?php echo "(". $deptData['idDept'] . ") " . $deptData['nameDept']?></h6>
                    <h6><b>Course / Track: </b><?php echo "(". $currData['idCurr'] . ") " . $currData['nameCurr']?></h6>   
                </div>
                
                <div class="d-flex flex-column align-items-start justify-content-center py-1">
                    <?php
                        $studQuery =  $con -> query("SELECT * FROM `user-student` WHERE `idStud` = '$idStud'") or die($con -> error);
                        $studData = $studQuery -> fetch_assoc();
                    ?>

                    <h5 class=""><b>Enrolled Courses</b></h5>

                    <table class="table table-bordered w-100 text-center">
                        <thead class="fs-6">
                            <tr>
                                <th>Subject Code</th>
                                <th>Title</th>
                                <th>Section</th>
                                <th>Units</th>
                                <th>Schedule</th>
                                <th>Room</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $units = 0;
                            $enrolledQuery = $con -> query("SELECT * FROM `student-enrollment` WHERE `idStud` = '$idStud' AND `enrollCode` = '$enrollCode'") or die($con -> error);
                            while($rowEnroll = $enrolledQuery -> fetch_assoc()):
                                $section = $rowEnroll['section'];
                                $enSubj = $rowEnroll['idSub'];
                                $enSubQuery = $con -> query("SELECT * FROM `subject` WHERE `idSub` = '$enSubj'") or die($con -> error);
                                $enSubRes = $enSubQuery -> fetch_assoc();
                                $enSchedQuery = $con -> query("SELECT * FROM `schedule` WHERE `idSub` = '$enSubj' AND `section` = '$section'") or die($con -> error);
                                $enSchedRes = $enSchedQuery -> fetch_assoc();
                                $units += $enSubRes['unitTot'];
                        ?>
                            <tr>
                                <td> <?php echo $enSubRes['idSub']; ?> </td>
                                <td> <?php echo $enSubRes['name'];?> </td>
                                <td> <?php echo $section?> </td>
                                <td> <?php echo $enSubRes['unitTot']; ?> </td>
                                
                                <td>    <?php 
                                        if(is_null($enSchedRes['days']) || is_null($enSchedRes['timeIni']) || is_null($enSchedRes['timeEnd'])){
                                            echo "TBA";
                                        } else {
                                            echo $enSchedRes['days'] . " / " . $enSchedRes['timeIni'] . "-" . $enSchedRes['timeEnd'];
                                        }
                                        ?> </td>
                                
                                <td>    <?php 
                                        if(is_null($enSchedRes['room'])){
                                            echo "TBA";
                                        }else{
                                            echo $enSchedRes['room']; 
                                        }
                                ?> </td>
                            </tr>

                        <?php endwhile ?>

                            <tr>
                                <td class="text-end" colspan="3"><b>Total Units</b></td>
                                <td><?php echo $units; ?></td>
                                <td colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="py-5"></div>
                <div class="py-5"></div>

                <div class="d-flex flex-column mt-5">
                    <div class="d-flex flex-row justify-content-end">
                        <p class="fs-5">Approved By: </p>
                        <img src="assets/img/esig.png" alt="">
                    </div>
                    
                    <div class="d-flex flex-row justify-content-end">
                        <p class="" style="font-size: 1rem;"> Note: The University Registrar is system generated.</p>
                    </div>
                </div>
            </div>


            <div class="container container-fluid m-0 gap-0"> <!-- lower part -->
                <div class="m-0 d-flex flex-row align-items-center justify-content-center w-100 gap-0">
                    <div class="left d-flex flex-column gap-0 p-1 w-100">

                        <h5 class="border border-2 border-dark m-0 p-1 text-center"><b>I: LOSS OF CERTIFICATE OF ENROLLMENT (COE)</b></h5>
                        <div class="border border-2 border-top-0 border-bottom-0 border-dark m-0 p-1 d-flex flex-column align-items-center justify-content-center">
                            <p> 
                                A COE can only be issued once and only a certified true copy shall be <br>
                                issued in case of loss. A certified true copy of the COE shall only be <br>
                                issued twice per term except for special cases.
                            </p>
                            <ol class="ms-1">
                                <li>Secure an Affidavit of Loss from the Public Attorney Office<br>
                                    (PAO) stating the reason of loss.
                                </li>
                                <li>Present Affidavit of Loss to the Registrar's Office.</li>
                                <li>Keep the certified true copy of COE safe and untampered.</li>
                            </ol>
                        </div>

                        <h5 class="border border-2 border-dark m-0 p-1 text-center"><b>II: CHANGING OF SUBJECTS</b></h5>
                        <div class="border border-2 border-top-0 border-bottom-0 border-dark m-0 p-1 d-flex flex-column align-items-center justify-content-center">
                            <p> 
                                Changing of subjects is only allowed if the subject is dissolved. No <br>
                                changing of subjects will be allowed two (2) weeks from the opening  <br>
                                of classes during the semester or after one (1) week from the opening<br>
                                of summer classes.
                            </p>
                        </div>

                        <h5 class="border border-2 border-dark m-0 p-1 text-center"><b>III: DROPPING OF SUBJECTS</b></h5>
                        <div class="border border-2 border-top-0 border-bottom-0 border-dark m-0 p-1 d-flex flex-column align-items-center justify-content-center">
                            <p> 
                                Dropping of subject/s is allowed two (2) weeks before the midterm   <br>
                                examination.
                            </p>
                            <h6 class="text-start"><b>PROCEDURE FOR DROPPING OF SUBJECTS</b></h6>
                            <ol class="ms-1">
                                <li>Seek the Dropping Form from the Office of the University <br>
                                    Registrar.
                                </li>
                                <li>Seek approval of the Subject Professor.</li>
                                <li>Submit the accomplished form to the Office of the       <br>
                                    Universiy Registrar for recording and filing.
                                </li>
                            </ol>
                        </div>

                        <h5 class="border border-2 border-dark m-0 p-1 text-center"><b>IV: ADDING OF SUBJECTS</b></h5>
                        <div class="border border-2 border-top-0 border-dark m-0 p-1 d-flex flex-column align-items-center justify-content-center">
                            <p> 
                                Adding of subject/s is allowed during the first (1st) week of classes ONLY.
                            </p>
                            <h6 class="text-start"><b>PROCEDURE FOR ADDING OF SUBJECTS</b></h6>
                            <ol class="ms-1">
                                <li>Secure an Adding Form from the Office of the University <br>
                                    Registrar.
                                </li>
                                <li>Have the Adding form validated by the Office of the     <br>
                                    Universiy Registrar.
                                </li>
                            </ol>
                        </div>

                    </div>

                    <div class="d-flex flex-column gap-0 p-1 w-100 h-100">
                        <h5 class="border border-2 border-dark m-0 p-1 text-center"><b>V: WITHDRAWAL OF REGISTRATION</b></h5>
                        <div class="border border-2 border-top-0 border-bottom-0 border-dark m-0 p-1 d-flex flex-column align-items-center justify-content-center">
                            <p> 
                                A student who withdrawn his/her registration within specified period <br>
                                shall be entitled to withdraw his/her credentials submitted as       <br>
                                requirement for enrollment, but if withdrawal is made outside the    <br>
                                specified period, the rules on dropping shall be followed.   
                            </p>
                            <p> 
                                A student who wishes to withdraw from all university classes after   <br>
                                completion for a semester must go through the following procedure:   <br>
                            </p>
                            <ol class="ms-1">
                                <li>Secure and accomplish Request for Withrawal of Registration.
                                </li>
                                <li>Present a written statement from a parent, guardian or  <br>
                                    indicating that the responsible person knows of the     <br>
                                    intent to withdraw.
                                </li>
                                <li>Submit a copy of the accomplished form to the Office of <br>
                                    the Registrar together with the required documents for  <br>
                                    recording.
                                </li>
                            </ol>
                        </div>

                        <h5 class="border border-2 border-dark m-0 p-1 text-center h-100"><b>VI: COMPLETION OF INCOMPLETE GRADES</b></h5>
                        <div class="border border-2 border-top-0 border-dark m-0 p-1 d-flex flex-column align-items-center justify-content-center">
                            <p> 
                                An incomplete grade must be completed within one (1) academic year <br>
                                from the date the grade of INC has been received; otherwise, the       <br>
                                grade becomes an automatic failure
                            </p>
                            <h6 class="text-start"><b>PROCEDURE FOR COMPLETION OF GRADES</b></h6>
                            <ol class="ms-1">
                                <li>Secure the Completion Form from the Office of the <br>
                                    University Registrar
                                </li>
                                <li>Completed grades must be duly signed by the Subject <br>
                                    instructor, recommending approval by the College Dean and <br>
                                    to be submitted to the Office of the University Registrar
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
             </div>
        </div>

    </body>

    <script>
        <?php
            $filename = $enrollCode .'.pdf';
        ?>

        let body = document.body;
        let html = document.documentElement;
        let height = Math.max(body.scrollHeight, body.offsetHeight,
                        html.clientHeight, html.scrollHeight, html.offsetHeight);
        let element = document.getElementById('document');
        let heightCM = height / 35.35;
        let widthCM = (heightCM / 11) * 8.5;

        html2pdf(element, {
            margin: 1,
            filename: '<?php echo $filename; ?>',
            html2canvas: { dpi: 192, letterRendering: true },
            jsPDF: {
                orientation: 'portrait',
                unit: 'cm',
                format: [heightCM, widthCM]
            }
        })
    
        /*
        var opt = {
            margin:       1,
            filename:     '<?php echo $filename; ?>',
            image:        { type: 'png', quality: 0.98 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };

        var worker = html2pdf().set({pagebreak: { mode: ['avoid-all'] }}).from(element).saveAs('<?php echo $filename; ?>');
        */
        
    </script>

</html>
