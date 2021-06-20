<?php
session_start();
include("includes/header.php");
?>


<div class="container mt-3 mb-3" id="invoice" >

    <?php
        $connection = mysqli_connect("localhost","root","","registrationform");
        
        $query = "SELECT * FROM form";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
            ?>
            <script>
                Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
                )
            </script>
            <div class="form1Container">
                <div class="text-center">
                    <div class=" img-logo">
                        <img src="img/ctuLogo.png" class="img-fluid" alt="CTU Logo">
                    </div>
                    <div class="title">
                        <a class="download" href="#", id="download"><h6"><b>REGISTRATION FORM</b></h6> </a>
                    </div>
                    <hr>
                </div>
                <div class="row secondHeader">
                    <div class="col">
                        <p><b>STUDENT PERSONAL DATA</b></p>
                    </div>   
                    <div class="col">
                        <div class="float-right">
                            <p><b>Date:</b> <?php echo $row['userDate'];?></p>
                        </div>
                    </div>
                </div>
                <div class="row namePadding">
                    <div class="col">
                        <p c><b>First Name:</b> <?php echo $row['firstName'];?></p>
                    </div>
                    <div class="col">
                        <p c><b>Middle Name:</b> <?php echo $row['middleName'];?></p>
                    </div>
                    <div class="col">
                        <p c><b>Last Name:</b> <?php echo $row['lastName'];?></p>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td colspan="4">               
                                <p c><b>Home Address:</b> <?php echo $row['userAddress'];?></p>
                            </td>
                            <td colspan="4">
                                <p c><b>Contact No.:</b> <?php echo $row['phoneNum'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">       
                                <p c><b>Congressional District:</b> <?php echo $row['congressionalDistrict'];?></p>
                            </td>
                            <td colspan="4">
                                <p c><b>e-mail Address:</b> <?php echo $row['email'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">                
                                <p c><b>Gender:</b> <?php echo $row['gender'];?></p>
                            </td>
                            <td colspan="2">
                                <p c><b>Birth Place:</b> <?php echo $row['birthPlace'];?></p>
                            </td>
                            <td colspan="2">
                                <p c><b>Birth Date:</b> <?php echo $row['birthDate'];?></p>
                            </td>
                            <td colspan="2">
                                <p c><b>Age:</b> <?php echo $row['age'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">        
                                <p c><b>Citizenship:</b> <?php echo $row['citizenship'];?></p>   
                            </td>
                            <td colspan="2">
                                <p c><b>Religion:</b> <?php echo $row['religion'];?></p> 
                            </td>
                            <td colspan="4">
                                <p c><b>Civil Status:</b> <?php echo $row['civilStatus'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <p c><b>Father Name:</b> <?php echo $row['fatherName'];?></p>
                            </td>
                            <td colspan="4">
                                <p c><b>Occupation:</b> <?php echo $row['fatherOccupation'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">        
                                <p c><b>Mother Name:</b> <?php echo $row['motherName'];?></p>        
                            </td>
                            <td colspan="4">
                                <p c><b>Occupation:</b> <?php echo $row['motherOccupation'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">            
                                <p c><b>Guardian Name:</b> <?php echo $row['guardianName'];?></p>   
                            </td>
                            <td colspan="4">
                                <p c><b>Contact Number:</b> <?php echo $row['guardianContactNumber']?></p>  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <p class="text-center"><b>Educational Background</b></p>
                            </td>
                            <td colspan="2">
                                <p class="text-center"><b>Academic Year</b></p>
                            </td>
                            <td colspan="2">
                                <p class="text-center"><b>Honors Received</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">         
                                <p c><b>Elementary:</b> <?php echo $row['elementarySchoolYear']?></p>         
                            </td>
                            <td colspan="2">
                                <p c><?php echo $row['elementaryAcademicYear']?></p>   
                            </td>
                            <td colspan="2">
                                <p c><?php echo $row['elementaryHonorsReceived']?></p>  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">         
                                <p c><b>High School:</b> <?php echo $row['highSchoolSchoolYear']?></p>         
                            </td>
                            <td colspan="2">
                                <p c><?php echo $row['highSchoolAcademicYear']?></p>   
                            </td>
                            <td colspan="2">
                                <p c><?php echo $row['highSchoolHonorsReceived']?></p>  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">         
                                <p c><b>College:</b> <?php echo $row['collegeSchoolYear']?></p>         
                            </td>
                            <td colspan="2">
                                <p c><?php echo $row['collegeAcademicYear']?></p>   
                            </td>
                            <td colspan="2">
                                <p c><?php echo $row['collegeHonorsReceived']?></p>  
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="">
                    <p><b>Enrolment Document Submitted:</b></p>
                        <input type="checkbox" id="form138" name="eds1" value="Form138">
                        <label for="eds1"><p> Form 138</p></label>
                        <input type="checkbox" id="nso" name="eds2" value="nso">
                        <label for="eds2"><p> Birth Certificate/NSO</p></label>
                        <input type="checkbox" id="goodMoral" name="eds3" value="goodMoral">
                        <label for="eds3"><p> Certificate of Good Moral</p></label>
                        <input type="checkbox" id="tor" name="eds4" value="tor">
                        <label for="eds4"><p> Certificate of Transfer Credential & TOR</p></label>
                        <input type="checkbox" id="medicalCerti" name="eds5" value="medicalCerti">
                        <label for="eds5"><p> Medical Certificate</p></label>
                    <div class="indent">
                        <p>I hereby certify that all entries are true and correct. I do solemnly swear to abide with the laws, policies, rules and regulations
                        set forth by the University.</p>
                    </div>
                    <div class="studentSignature">
                        <p>________________________________</br>
                            Student's Signature Over Printed Name
                        </p>
                    </div>
                </form>
                <?php
            }
        }
        else
        {
            echo "No Record Found";
        }
        ?>
                <?php
        $connection = mysqli_connect("localhost","root","","registrationform");
        
        $query = "SELECT * FROM form2";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
            ?>
                <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <p><b>ID Number</b>: <?php echo $row['studentIDNumber']?></p>  
                                    </td>
                                    <td colspan="2">
                                        <p><b>Course:</b> <?php echo $row['course']?></p>  
                                    </td>
                                    <td colspan="2">
                                        <p><b>Major:</b> <?php echo $row['major']?></p>  
                                    </td>
                                    <td colspan="1">
                                        <p><b>Year Level:</b> <?php echo $row['yearLevel']?></p>  
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><b>School Year:</b> <?php echo $row['schoolYear']?></p>  
                                    </td>
                                    <td colspan="2">
                                    <p><b>Semester: </b><?php echo $row['semester']?></p>  
                                    </td>
                                    <td colspan="3">
                                    <p><b>Enrolment Status:</b> <?php echo $row['enrolmentStatus']?></p>  
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                    <p><b>Student Status:</b> <?php echo $row['studentStatus']?></p>  
                                    </td>
                                    <td colspan="3">
                                    <p><b>Block Section:</b> <?php echo $row['blockSection']?></p>  
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p><b>MIS Code</b></p> </td>
                                    <td> <p><b>Subject Code</b></p> </td>
                                    <td> <p><b>Descriptive Title</b></p> </td>
                                    <td> <p><b>Time</b></p> </td>
                                    <td> <p><b>Day</b></p> </td>
                                    <td> <p><b>Room</b></p> </td>
                                    <td> <p><b>Unit</b></p> </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode1']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode1']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle1']?></p>  </td>
                                    <td> <p> <?php echo $row['time1']?></p>  </td>
                                    <td> <p> <?php echo $row['day1']?></p>  </td>
                                    <td> <p> <?php echo $row['room1']?></p>  </td>
                                    <td> <p> <?php echo $row['unit1']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode2']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode2']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle2']?></p>  </td>
                                    <td> <p> <?php echo $row['time2']?></p>  </td>
                                    <td> <p> <?php echo $row['day2']?></p>  </td>
                                    <td> <p> <?php echo $row['room2']?></p>  </td>
                                    <td> <p> <?php echo $row['unit2']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode3']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode3']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle3']?></p>  </td>
                                    <td> <p> <?php echo $row['time3']?></p>  </td>
                                    <td> <p> <?php echo $row['day3']?></p>  </td>
                                    <td> <p> <?php echo $row['room3']?></p>  </td>
                                    <td> <p> <?php echo $row['unit3']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode4']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode4']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle4']?></p>  </td>
                                    <td> <p> <?php echo $row['time4']?></p>  </td>
                                    <td> <p> <?php echo $row['day4']?></p>  </td>
                                    <td> <p> <?php echo $row['room4']?></p>  </td>
                                    <td> <p> <?php echo $row['unit4']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode5']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode5']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle5']?></p>  </td>
                                    <td> <p> <?php echo $row['time5']?></p>  </td>
                                    <td> <p> <?php echo $row['day5']?></p>  </td>
                                    <td> <p> <?php echo $row['room5']?></p>  </td>
                                    <td> <p> <?php echo $row['unit5']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode6']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode6']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle6']?></p>  </td>
                                    <td> <p> <?php echo $row['time6']?></p>  </td>
                                    <td> <p> <?php echo $row['day6']?></p>  </td>
                                    <td> <p> <?php echo $row['room6']?></p>  </td>
                                    <td> <p> <?php echo $row['unit6']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode6']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode6']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle6']?></p>  </td>
                                    <td> <p> <?php echo $row['time6']?></p>  </td>
                                    <td> <p> <?php echo $row['day6']?></p>  </td>
                                    <td> <p> <?php echo $row['room6']?></p>  </td>
                                    <td> <p> <?php echo $row['unit6']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode7']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode7']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle7']?></p>  </td>
                                    <td> <p> <?php echo $row['time7']?></p>  </td>
                                    <td> <p> <?php echo $row['day7']?></p>  </td>
                                    <td> <p> <?php echo $row['room7']?></p>  </td>
                                    <td> <p> <?php echo $row['unit7']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode8']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode8']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle8']?></p>  </td>
                                    <td> <p> <?php echo $row['time8']?></p>  </td>
                                    <td> <p> <?php echo $row['day8']?></p>  </td>
                                    <td> <p> <?php echo $row['room8']?></p>  </td>
                                    <td> <p> <?php echo $row['unit8']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode9']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode9']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle9']?></p>  </td>
                                    <td> <p> <?php echo $row['time9']?></p>  </td>
                                    <td> <p> <?php echo $row['day9']?></p>  </td>
                                    <td> <p> <?php echo $row['room9']?></p>  </td>
                                    <td> <p> <?php echo $row['unit9']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> <?php echo $row['misCode10']?></p>  </td>
                                    <td> <p> <?php echo $row['subjectCode10']?></p>  </td>
                                    <td> <p> <?php echo $row['descriptiveTitle10']?></p>  </td>
                                    <td> <p> <?php echo $row['time10']?></p>  </td>
                                    <td> <p> <?php echo $row['day10']?></p>  </td>
                                    <td> <p> <?php echo $row['room10']?></h6>  </td>
                                    <td> <p> <?php echo $row['unit10']?></p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p>0</p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p>0</p>  </td>
                                </tr>
                                <tr>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p> </p>  </td>
                                    <td> <p>0</p>  </td>
                                </tr>
                                <tr>
                                    <td colspan = "7"> <p><b>Evaluated by: </b></p></td>
                                </tr>
                                <tr>
                                    <td colspan = "3"> <p><b>College Dean/Enrollment: </b></p></td>
                                    <td colspan = "3"> <p><b>Evaluated Date: </b></p></td>
                                    <td colspan = "1"> <p><b>Total Unit: </b></p></td>

                                </tr>
                                <tr>
                                    <td colspan = "7"> <p><b>Approved by: </b></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td colspan = "1"> <p><b>MEDICAL CLINIC </b></br>(Physical Examination)</p>
                                        <div class="signature">
                                            <p><b>JANETTE S. PUZON</b><br>
                                            School Physician/Nurse</p>
                                        </div>
                                    </td>
                                    <td colspan = "1"> <p><b>MIS OFFICE </b></br>(Encoding of Class Schedules</br>Assessment of Student Load)</p>
                                        <div class="signature">
                                            <p>_______________<br>
                                            System's Operator
                                            </p>
                                        </div>
                                    </td>
                                    <td colspan = "1"> <p><b>CASHIER'S OFFICE </b></br>(Payment of School Fees)</p>
                                        <div class="signature">
                                            </br><p>_______________<br>
                                            Teller
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>                                    
                                    <td colspan = "1"> <p><b>NSTP </b></br>(Enlistment for those who will </br>be taking CWTS or ROTC)</p>
                                        <div class="signature">
                                            <p>_______________<br>
                                            Coordinator
                                            </p>
                                        </div>
                                    </td>                                 
                                    <td colspan = "1"> <p><b>STUDENTS AFFAIRS OFFICE</b></br>(RA 10931 Certification Scholarship Certificate)</p>
                                        <div class="signature">
                                            </br><p>_______________<br>
                                            </p>
                                        </div>
                                    </td>                                    
                                    <td colspan = "1"> <p><b>REGISTRAR'S OFFICE </b></br>(Printing of Certificate of Registration / Submission of </br>registration form / Enrolment credentials)</p>
                                        <div class="signature">
                                            <p><b>JOSEPHINE MAMITES CABARDO</b><br>
                                            Registrar II</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        <?php
            }
        }
        else
        {
            echo "No Record Found";
        }
        ?>
        
</div>



<?php
include("includes/script.php");
include("includes/footer.php");
?>