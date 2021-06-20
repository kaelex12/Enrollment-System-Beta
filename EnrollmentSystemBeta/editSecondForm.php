<?php
session_start();
include("includes/header.php");
$con = mysqli_connect('localhost', 'root', '', 'registrationform');

    if(isset($_POST['secondForm-edit'])){
        $id = $_POST['secondForm-id'];

        $query = "SELECT * FROM form2 WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);
        foreach($query_run as $row){
        ?>
        <div class="container">
            <form action="code.php" method="post" autocomplete="off">
            <input type="hidden" name="secondForm-id" value="<?php echo $row['id'];?>">
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan=2>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">ID Number</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['studentIDNumber']?>" name="studentIDNumber" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Course</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['course']?>" name="course" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Major</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['major']?>" name="major" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Year Level</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['yearLevel']?>" name="yearLevel" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">School Year</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['schoolYear']?>" name="schoolYear" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Semester</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['semester']?>" name="semester" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="3">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Enrolment Status</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['enrolmentStatus']?>" name="enrolmentStatus" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Student Status</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['studentStatus']?>" name="studentStatus" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Block Section</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $row['blockSection']?>" name="blockSection" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-center">MIS Code</td>
                            <td class="text-center">Subject Code</td>
                            <td class="text-center">Descriptive Title</td>
                            <td class="text-center">Time</td>
                            <td class="text-center">Day</td>
                            <td class="text-center">Room</td>
                            <td class="text-center">Unit</td>
                        </tr>
                        <td> <input type="text" class="form-control" value="<?php echo $row['misCode1']?>" name="misCode1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode1']?>" name="subjectCode1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle1']?>" name="descriptiveTitle1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time1']?>" name="time1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day1']?>" name="day1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room1']?>" name="room1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit1']?>" name="unit1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode2']?>" name="misCode2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode2']?>" name="subjectCode2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle2']?>" name="descriptiveTitle2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time2']?>" name="time2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day2']?>" name="day2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room2']?>" name="room2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit2']?>" name="unit2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode3']?>" name="misCode3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode3']?>" name="subjectCode3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle3']?>" name="descriptiveTitle3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time3']?>" name="time3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day3']?>" name="day3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room3']?>" name="room3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit3']?>" name="unit3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode4']?>" name="misCode4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode4']?>" name="subjectCode4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle4']?>" name="descriptiveTitle4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time4']?>" name="time4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day4']?>" name="day4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room4']?>" name="room4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit4']?>" name="unit4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode5']?>" name="misCode5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode5']?>" name="subjectCode5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle5']?>" name="descriptiveTitle5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time5']?>" name="time5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day5']?>" name="day5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room5']?>" name="room5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit5']?>" name="unit5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode6']?>" name="misCode6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode6']?>" name="subjectCode6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle6']?>" name="descriptiveTitle6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time6']?>" name="time6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day6']?>" name="day6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room6']?>" name="room6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit6']?>" name="unit6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode7']?>" name="misCode7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode7']?>" name="subjectCode7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle7']?>" name="descriptiveTitle7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time7']?>" name="time7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day7']?>" name="day7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room7']?>" name="room7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit7']?>" name="unit7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode8']?>" name="misCode8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode8']?>" name="subjectCode8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle8']?>" name="descriptiveTitle8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time8']?>" name="time8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day8']?>" name="day8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room8']?>" name="room8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit8']?>" name="unit8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode9']?>" name="misCode9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode9']?>" name="subjectCode9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle9']?>" name="descriptiveTitle9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time9']?>" name="time9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day9']?>" name="day9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room9']?>" name="room9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit9']?>" name="unit9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" value="<?php echo $row['misCode10']?>" name="misCode10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['subjectCode10']?>" name="subjectCode10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['descriptiveTitle10']?>" name="descriptiveTitle10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['time10']?>" name="time10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['day10']?>" name="day10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['room10']?>" name="room10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                            <td> <input type="text" class="form-control" value="<?php echo $row['unit10']?>" name="unit10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                                <a href="thirdPage.php" class="btn btn-danger btn-block"> CANCEL</a>
                        </div>
                        <div class="col">
                                <button type="submit" name="second-form-update" class="btn btn-primary btn-block">UPDATE</button>
                        </div>
                    </div>
            </form>
        </div>

        <?php
        }
    }
include("includes/script.php");
include("includes/footer.php");
?>