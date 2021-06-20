<?php
session_start();
include("includes/header.php");
$con = mysqli_connect('localhost', 'root', '', 'registrationform');

    if(isset($_POST['firstForm-edit'])){
        $id = $_POST['firstForm-id'];

        $query = "SELECT * FROM form WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);
        foreach($query_run as $row){
        ?>
<div class="section">
    <div class="container">
        <form action="code.php" method="POST">
        <input type="hidden" name="firstForm-id" value="<?php echo $row['id'];?>">
        <div class="text-center">
                    <div class=" img-logo">
                        <img src="img/ctuLogo.png" class="img-fluid" alt="CTU Logo">
                    </div>
                    <div class="title">
                        <h1 class="font-weight-bold headerTitle">UPDATE REGISTRATION FORM</h1> 
                    </div>
                    <hr>
                </div>
                <div class="row secondHeader">
                    <div class="col">
                        <h4 class="secondTitle"><b>STUDENT PERSONAL DATA</b></h4>
                    </div>   
                    <div class="col">
                        <div class="float-right">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm fName">Date</span>
                                </div>
                                <input type="text" class="form-control fName" value="<?php echo $row['userDate']?>" name="userDate" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm fName">First Name</span>
                            </div>
                            <input type="text" class="form-control fName" value="<?php echo $row['firstName']?>" name="firstName" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name</span>
                            </div>
                            <input type="text" class="form-control" value="<?php echo $row['middleName']?>" name="middleName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
                            </div>
                            <input type="text" class="form-control" value="<?php echo $row['lastName']?>" name="lastName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Home Address</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['userAddress']?>" name="userAddress" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Contact No.</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['phoneNum']?>" name="phoneNum" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Congressional District</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['congressionalDistrict']?>" name="congressionalDistrict" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">e-mail Address</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['email']?>" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['gender']?>" name="gender" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Birth Place</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['birthPlace']?>" name="birthPlace" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Birth Date</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['birthDate']?>" name="birthDate" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Age</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['age']?>" name="age" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Citizenship</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['citizenship']?>" name="citizenship" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Religion</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['religion']?>" name="religion" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Civil Status</label>
                                    </div>                                   
                                    <input type="text" class="form-control" value="<?php echo $row['civilStatus']?>" name="civilStatus" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Father Name</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['fatherName']?>" name="fatherName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Occupation</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['fatherOccupation']?>" name="fatherOccupation" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Mother Name</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['motherName']?>" name="motherName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Occupation</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['motherOccupation']?>" name="motherOccupation" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Guardian Name</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['guardianName']?>" name="guardianName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Contact Number</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['guardianContactNumber']?>" name="guardianContactNumber" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <p class="text-center">Educational Background</p>
                            </td>
                            <td colspan="2">
                                <p class="text-center">Academic Year</p>
                            </td>
                            <td colspan="2">
                                <p class="text-center">Honors Received</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Elementary</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['elementarySchoolYear']?>" name="elementarySchoolYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="text" class="form-control" value="<?php echo $row['elementaryAcademicYear']?>" name="elementaryAcademicYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                            <td colspan="2">
                                <input type="text" class="form-control" value="<?php echo $row['elementaryHonorsReceived']?>" name="elementaryHonorsReceived" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">High Schoool</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['highSchoolSchoolYear']?>" name="highSchoolSchoolYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="text" class="form-control" value="<?php echo $row['highSchoolAcademicYear']?>" name="highSchoolAcademicYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                            <td colspan="2">
                                <input type="text" class="form-control" value="<?php echo $row['highSchoolHonorsReceived']?>" name="highSchoolHonorsReceived" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">College</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['college']?>" name="collegeSchoolYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="text" class="form-control" value="<?php echo $row['collegeAcademicYear']?>" name="collegeAcademicYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                            <td colspan="2">
                                <input type="text" class="form-control" value="<?php echo $row['collegeHonorsReceived']?>" name="collegeHonorsReceived" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                        </tr>  
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                            <a href="thirdPhase.php" class="btn btn-danger btn-block"> CANCEL</a>
                    </div>
                    <div class="col">
                            <button type="submit" name="first-form-update" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<?php
        }
    }
include("includes/script.php");
include("includes/footer.php");
?>