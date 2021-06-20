<?php
session_start();
include("includes/header.php");
?>


<div class="container mt-3 mb-3">

    <?php
        $connection = mysqli_connect("localhost","root","","registrationform");
        
        $query = "SELECT * FROM form";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
            ?>
                <div class="text-center">
                    <div class=" img-logo">
                        <img src="img/ctuLogo.png" class="img-fluid" alt="CTU Logo">
                    </div>
                    <div class="title">
                        <h4 class="font-weight-bold headerTitle">REGISTRATION FORM</h4> 
                    </div>
                    <hr>
                </div>
                <div class="row secondHeader">
                    <div class="col">
                        <h5 class="secondTitle"><b>STUDENT PERSONAL DATA</b></h5>
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
                            </tbody>
                        </table>

                <div class="downloadButton col-md-12 text-center mb-3">
                    <button onclick="sweetalertclick()" type="button" class="btn btn-primary"> download pdf</button>
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