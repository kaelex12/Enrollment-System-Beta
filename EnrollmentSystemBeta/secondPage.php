<?php 
session_start();
include("includes/header.php");
?>

        <div class="container mt-3 mb-3">
                    <form action="code.php" method="post" autocomplete="off">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan=2>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">ID Number</span>
                                            </div>
                                            <input type="text" class="form-control" name="studentIDNumber" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Course</span>
                                            </div>
                                            <input type="text" class="form-control" name="course" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Major</span>
                                            </div>
                                            <input type="text" class="form-control" name="major" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                    <td colspan="1">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Level</span>
                                            </div>
                                            <input type="text" class="form-control" name="yearLevel" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">School Year</span>
                                            </div>
                                            <input type="text" class="form-control" name="schoolYear" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Semester</span>
                                            </div>
                                            <input type="text" class="form-control" name="semester" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                    <td colspan="3">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Enrolment Status</span>
                                            </div>
                                            <input type="text" class="form-control" name="enrolmentStatus" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Student Status</span>
                                            </div>
                                            <input type="text" class="form-control" name="studentStatus" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </td>
                                    <td colspan="4">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Block Section</span>
                                            </div>
                                            <input type="text" class="form-control" name="blockSection" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit6" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit7" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit8" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit9" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit11" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit12" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                                <tr>
                                    <td> <input type="text" class="form-control" name="misCode13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="subjectCode13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="descriptiveTitle13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="time13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="day13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="room13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                    <td> <input type="text" class="form-control" name="unit13" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></td>
                                </tr>
                            </tbody>
                        </table>
                            <input type="submit" class="btn btn-success btn-lg btn-block" name="secondPageForm" role="button" aria-pressed="true" value="Submit">
                    </form>
                </div>

<?php
include("includes/script.php");
include("includes/footer.php");
?>