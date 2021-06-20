<?php 
session_start();
include("includes/header.php");
?>
    <div class="section mt-3 mb-3">
        <div class="container">
            <form action="code.php" method="post" autocomplete="off">
            <div class="text-center">
                    <div class=" img-logo">
                        <img src="img/ctuLogo.png" class="img-fluid" alt="CTU Logo">
                    </div>
                    <div class="title">
                        <h1 class="font-weight-bold headerTitle">REGISTRATION FORM</h1> 
                    </div>
                    <hr>
                </div>
                <div class="row secondHeader">
                    <div class="col">
                        <p class="secondTitle"><b>STUDENT PERSONAL DATA</b></p>
                    </div>   
                    <div class="col">
                        <div class="float-right">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm fName">Date</span>
                                </div>
                                <input type="text" class="form-control fName" name="userDate" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
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
                            <input type="text" class="form-control fName" name="firstName" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name</span>
                            </div>
                            <input type="text" class="form-control" name="middleName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
                            </div>
                            <input type="text" class="form-control" name="lastName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Home Address</span>
                                    </div>
                                    <input type="text" class="form-control" name="userAddress" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Contact No.</span>
                                    </div>
                                    <input type="text" class="form-control" name="phoneNum" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Congressional District</span>
                                    </div>
                                    <input type="text" class="form-control" name="congressionalDistrict" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">e-mail Address</span>
                                    </div>
                                    <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Gender</span>
                                    </div>
                                    <input type="text" class="form-control" name="gender" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Birth Place</span>
                                    </div>
                                    <input type="text" class="form-control" name="birthPlace" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Birth Date</span>
                                    </div>
                                    <input type="text" class="form-control" name="birthDate" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Age</span>
                                    </div>
                                    <input type="text" class="form-control" name="age" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Citizenship</span>
                                    </div>
                                    <input type="text" class="form-control" name="citizenship" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Religion</span>
                                    </div>
                                    <input type="text" class="form-control" name="religion" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Civil Status</span>
                                    </div>
                                    <input type="text" class="form-control" name="civilStatus" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Father's Name</span>
                                    </div>
                                    <input type="text" class="form-control" name="fatherName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Occupation</span>
                                    </div>
                                    <input type="text" class="form-control" name="fatherOccupation" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Name</span>
                                    </div>
                                    <input type="text" class="form-control" name="motherName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Occupation</span>
                                    </div>
                                    <input type="text" class="form-control" name="motherOccupation" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Guardian's Name</span>
                                    </div>
                                    <input type="text" class="form-control" name="guardianName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Contact Number</span>
                                    </div>
                                    <input type="text" class="form-control" name="guardianContactNumber" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <h5 class="text-center ">Educational Background</h5>
                            </td>
                            <td colspan="2">
                                <h5 class="text-center ">Academic Year</h5>
                            </td>
                            <td colspan="2">
                                <h5 class="text-center ">Honors Received</h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Elementary</span>
                                    </div>
                                    <input type="text" class="form-control" name="elementarySchoolYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="elementaryAcademicYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="elementaryHonorsReceived" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">High Schoool</span>
                                    </div>
                                    <input type="text" class="form-control" name="highSchoolSchoolYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="highSchoolAcademicYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                            <td colspan="2">
                            <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="highSchoolHonorsReceived" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">                
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">College</span>
                                    </div>
                                    <input type="text" class="form-control" name="collegeSchoolYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="collegeAcademicYear" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="collegeHonorsReceived" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </td>
                        </tr>  
                    </tbody>
                </table>
                <input type="submit" class="btn btn-primary btn-lg btn-block button" name="firstPageSubmit" role="button" aria-pressed="true" value="Next">
            </form>
        </div>
    </div>
<?php
include("includes/script.php");
include("includes/footer.php");
?>