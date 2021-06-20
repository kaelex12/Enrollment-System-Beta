<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'registrationform';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if(isset($_POST['firstPageSubmit'])){
    $userDate = $_POST['userDate'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $userAddress = $_POST['userAddress'];
    $phoneNum = $_POST['phoneNum'];
    $congressionalDistrict =  $_POST['congressionalDistrict'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birthPlace = $_POST['birthPlace'];
    $birthDate = $_POST['birthDate'];
    $age = $_POST['age'];
    $citizenship = $_POST['citizenship'];
    $religion = $_POST['religion'];
    $civilStatus = $_POST['civilStatus'];
    $fatherName = $_POST['fatherName'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $motherName = $_POST['motherName'];
    $motherOccupation = $_POST['motherOccupation'];
    $guardianName = $_POST['guardianName'];
    $guardianContactNumber = $_POST['guardianContactNumber'];
    $elementarySchoolYear = $_POST['elementarySchoolYear'];
    $elementaryAcademicYear = $_POST['elementaryAcademicYear'];
    $elementaryHonorsReceived = $_POST['elementaryHonorsReceived'];
    $highSchoolSchoolYear = $_POST['highSchoolSchoolYear'];
    $highSchoolAcademicYear = $_POST['highSchoolAcademicYear'];
    $highSchoolHonorsReceived = $_POST['highSchoolHonorsReceived'];
    $collegeSchoolYear = $_POST['collegeSchoolYear'];
    $collegeAcademicYear = $_POST['collegeAcademicYear'];
    $collegeHonorsReceived = $_POST['collegeHonorsReceived'];

    if ($stmt = $con->prepare('INSERT INTO form (userDate, firstName, middleName, lastName, userAddress, phoneNum, congressionalDistrict,
        email, gender, birthPlace, birthDate, age, citizenship, religion, civilStatus, fatherName, fatherOccupation, motherName,
        motherOccupation, guardianName, guardianContactNumber, elementarySchoolYear , elementaryAcademicYear, elementaryHonorsReceived,
        highSchoolSchoolYear, highSchoolAcademicYear, highSchoolHonorsReceived, collegeSchoolYear, collegeAcademicYear, collegeHonorsReceived)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'))
    {

        $stmt->bind_param('sssssisssssissssssssisssssssss',$_POST['userDate'], $_POST["firstName"], $_POST['middleName'], $_POST["lastName"], $_POST["userAddress"],
        $_POST["phoneNum"], $_POST["congressionalDistrict"], $_POST["email"], $_POST["gender"], $_POST["birthPlace"],
        $_POST["birthDate"],  $_POST["age"], $_POST["citizenship"], $_POST["religion"], $_POST["civilStatus"], $_POST['fatherName'],
        $_POST['fatherOccupation'], $_POST['motherName'], $_POST['motherOccupation'], $_POST['guardianName'], $_POST['guardianContactNumber'], 
        $_POST["elementarySchoolYear"], $_POST["elementaryAcademicYear"], $_POST["elementaryHonorsReceived"], $_POST['highSchoolSchoolYear'], $_POST['highSchoolAcademicYear'], 
        $_POST['highSchoolHonorsReceived'], $_POST['collegeSchoolYear'], $_POST['collegeAcademicYear'], $_POST['collegeHonorsReceived']);

        $stmt->execute();
        $_SESSION['status'] = "You have successfully submitted your form!";
        $_SESSION['status_code'] = "success";
        header('Location: secondPage.php');

    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        $_SESSION['status'] = "Could not prepare statement!";
        $_SESSION['status_code'] = "error";
        header('Location: firstPage.php');
    }
    $stmt->close();
}
if(isset($_POST['secondPageForm'])){
    $studentIDNumber = $_POST['studentIDNumber'];
    $course = $_POST['course'];
    $major = $_POST['major'];
    $yearLevel = $_POST['yearLevel'];
    $schoolYear = $_POST['schoolYear'];
    $semester = $_POST['semester'];
    $enrolmentStatus = $_POST['enrolmentStatus'];
    $studentStatus = $_POST['studentStatus'];
    $blockSection = $_POST['blockSection'];

    $misCode1 = $_POST['misCode1'];
    $subjectCode1 = $_POST['subjectCode1'];
    $descriptiveTitle1 = $_POST['descriptiveTitle1'];
    $time1 = $_POST['time1'];
    $day1 = $_POST['day1'];
    $room1 = $_POST['room1'];
    $unit1 = $_POST['unit1'];

    $misCode2 = $_POST['misCode2'];
    $subjectCode2 = $_POST['subjectCode2'];
    $descriptiveTitle2 = $_POST['descriptiveTitle2'];
    $time2 = $_POST['time2'];
    $day2 = $_POST['day2'];
    $room2 = $_POST['room2'];
    $unit2 = $_POST['unit2'];

    $misCode3 = $_POST['misCode3'];
    $subjectCode3 = $_POST['subjectCode3'];
    $descriptiveTitle3 = $_POST['descriptiveTitle3'];
    $time3 = $_POST['time3'];
    $day3 = $_POST['day3'];
    $room3 = $_POST['room3'];
    $unit3 = $_POST['unit3'];

    $misCode4 = $_POST['misCode4'];
    $subjectCode4 = $_POST['subjectCode4'];
    $descriptiveTitle4 = $_POST['descriptiveTitle4'];
    $time4 = $_POST['time4'];
    $day4 = $_POST['day4'];
    $room4 = $_POST['room4'];
    $unit4 = $_POST['unit4'];

    $misCode5 = $_POST['misCode5'];
    $subjectCode5 = $_POST['subjectCode5'];
    $descriptiveTitle5 = $_POST['descriptiveTitle5'];
    $time5 = $_POST['time5'];
    $day5 = $_POST['day5'];
    $room5 = $_POST['room5'];
    $unit5 = $_POST['unit5'];

    $misCode6 = $_POST['misCode6'];
    $subjectCode6 = $_POST['subjectCode6'];
    $descriptiveTitle6 = $_POST['descriptiveTitle6'];
    $time6 = $_POST['time6'];
    $day6 = $_POST['day6'];
    $room6 = $_POST['room6'];
    $unit6 = $_POST['unit6'];

    $misCode7 = $_POST['misCode7'];
    $subjectCode7 = $_POST['subjectCode7'];
    $descriptiveTitle7 = $_POST['descriptiveTitle7'];
    $time7 = $_POST['time7'];
    $day7 = $_POST['day7'];
    $room7 = $_POST['room7'];
    $unit7 = $_POST['unit7'];

    $misCode8 = $_POST['misCode8'];
    $subjectCode8 = $_POST['subjectCode8'];
    $descriptiveTitle8 = $_POST['descriptiveTitle8'];
    $time8 = $_POST['time8'];
    $day8 = $_POST['day8'];
    $room8 = $_POST['room8'];
    $unit8 = $_POST['unit8'];

    $misCode9 = $_POST['misCode9'];
    $subjectCode9 = $_POST['subjectCode9'];
    $descriptiveTitle9 = $_POST['descriptiveTitle9'];
    $time9 = $_POST['time9'];
    $day9 = $_POST['day9'];
    $room9 = $_POST['room9'];
    $unit9 = $_POST['unit9'];

    $misCode10 = $_POST['misCode10'];
    $subjectCode10 = $_POST['subjectCode10'];
    $descriptiveTitle10 = $_POST['descriptiveTitle10'];
    $time10 = $_POST['time10'];
    $day10 = $_POST['day10'];
    $room10 = $_POST['room10'];
    $unit10 = $_POST['unit10'];

    if ($stmt = $con->prepare('INSERT INTO form2 (studentIDNumber, course, major, yearLevel, schoolYear, 
        semester, enrolmentStatus, studentStatus, blockSection, 
        misCode1, subjectCode1, descriptiveTitle1, time1, day1, room1, unit1, 
        misCode2, subjectCode2, descriptiveTitle2, time2, day2, room2, unit2, 
        misCode3, subjectCode3, descriptiveTitle3, time3, day3, room3, unit3, 
        misCode4, subjectCode4, descriptiveTitle4, time4, day4, room4, unit4, 
        misCode5, subjectCode5, descriptiveTitle5, time5, day5, room5, unit5, 
        misCode6, subjectCode6, descriptiveTitle6, time6, day6, room6, unit6, 
        misCode7, subjectCode7, descriptiveTitle7, time7, day7, room7, unit7, 
        misCode8, subjectCode8, descriptiveTitle8, time8, day8, room8, unit8, 
        misCode9, subjectCode9, descriptiveTitle9, time9, day9, room9, unit9, 
        misCode10, subjectCode10, descriptiveTitle10, time10, day10, room10, unit10) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?)')) {

        $stmt->bind_param
        ('issssssssssssssissssssissssssissssssissssssissssssissssssissssssissssssissssssi', $_POST["studentIDNumber"], $_POST["course"],$_POST["major"], $_POST["yearLevel"], 
        $_POST["schoolYear"], $_POST["semester"], $_POST['enrolmentStatus'], $_POST['studentStatus'], $_POST['blockSection'], 
        $_POST['misCode1'], $_POST['subjectCode1'], $_POST['descriptiveTitle1'], $_POST['time1'], $_POST['day1'], $_POST['room1'], $_POST['unit1'], 
        $_POST['misCode2'], $_POST['subjectCode2'], $_POST['descriptiveTitle2'], $_POST['time2'], $_POST['day2'], $_POST['room2'], $_POST['unit2'], 
        $_POST['misCode3'], $_POST['subjectCode3'], $_POST['descriptiveTitle3'], $_POST['time3'], $_POST['day3'], $_POST['room3'], $_POST['unit3'], 
        $_POST['misCode4'], $_POST['subjectCode4'], $_POST['descriptiveTitle4'], $_POST['time4'], $_POST['day4'], $_POST['room4'], $_POST['unit4'],
        $_POST['misCode5'], $_POST['subjectCode5'], $_POST['descriptiveTitle5'], $_POST['time5'], $_POST['day5'], $_POST['room5'], $_POST['unit5'],
        $_POST['misCode6'], $_POST['subjectCode6'], $_POST['descriptiveTitle6'], $_POST['time6'], $_POST['day6'], $_POST['room6'], $_POST['unit6'],
        $_POST['misCode7'], $_POST['subjectCode7'], $_POST['descriptiveTitle7'], $_POST['time7'], $_POST['day7'], $_POST['room7'], $_POST['unit7'], 
        $_POST['misCode8'], $_POST['subjectCode8'], $_POST['descriptiveTitle8'], $_POST['time8'], $_POST['day8'], $_POST['room8'], $_POST['unit8'], 
        $_POST['misCode9'], $_POST['subjectCode9'], $_POST['descriptiveTitle9'], $_POST['time9'], $_POST['day9'], $_POST['room9'], $_POST['unit9'], 
        $_POST['misCode10'], $_POST['subjectCode10'], $_POST['descriptiveTitle10'], $_POST['time10'], $_POST['day10'], $_POST['room10'], $_POST['unit10']);

        $stmt->execute();
        $_SESSION['status'] = "You have successfully submitted your form!";
        $_SESSION['status_code'] = "success";
        header('Location: thirdPage.php');

    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        $_SESSION['status'] = "Could not prepare statement!";
        $_SESSION['status_code'] = "error";
        header('Location: secondPage.php');
    }
    $stmt->close();
}

// Update First page
if(isset($_POST['first-form-update'])){

    $id = $_POST['firstForm-id'];
    $userDate = $_POST['userDate'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $userAddress = $_POST['userAddress'];
    $phoneNum = $_POST['phoneNum'];
    $congressionalDistrict =  $_POST['congressionalDistrict'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birthPlace = $_POST['birthPlace'];
    $birthDate = $_POST['birthDate'];
    $age = $_POST['age'];
    $citizenship = $_POST['citizenship'];
    $religion = $_POST['religion'];
    $civilStatus = $_POST['civilStatus'];
    $fatherName = $_POST['fatherName'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $motherName = $_POST['motherName'];
    $motherOccupation = $_POST['motherOccupation'];
    $guardianName = $_POST['guardianName'];
    $guardianContactNumber = $_POST['guardianContactNumber'];
    $elementaryelementarySchoolYear = $_POST['elementarySchoolYear'];
    $elementaryAcademicYear = $_POST['elementaryAcademicYear'];
    $elementaryHonorsReceived = $_POST['elementaryHonorsReceived'];
    $highSchoolSchoolYear = $_POST['highSchoolSchoolYear'];
    $highSchoolAcademicYear = $_POST['highSchoolAcademicYear'];
    $highSchoolHonorsReceived = $_POST['highSchoolHonorsReceived'];
    $collegeSchoolYear = $_POST['collegeSchoolYear'];
    $collegeAcademicYear = $_POST['collegeAcademicYear'];
    $collegeHonorsReceived = $_POST['collegeHonorsReceived'];

    $query = "UPDATE form SET userDate = '$userDate', firstName = '$firstName', middleName ='$middleName', lastName = '$lastName', 
    userAddress = '$userAddress', phoneNum = '$phoneNum', congressionalDistrict = '$congressionalDistrict', email = '$email', 
    gender = '$gender', birthPlace = '$birthPlace', birthDate = '$birthDate', age = '$age', citizenship = '$citizenship', religion = '$religion',
    civilStatus = '$civilStatus', fatherName = '$fatherName', fatherOccupation = '$fatherOccupation', motherName = '$motherName', motherOccupation = '$motherOccupation', 
    guardianName = '$guardianName', guardianContactNumber = '$guardianContactNumber', elementarySchoolYear = '$elementarySchoolYear',  elementaryAcademicYear = '$elementaryAcademicYear', 
    elementaryHonorsReceived = '$elementaryHonorsReceived', highSchoolSchoolYear = '$highSchoolSchoolYear', highSchoolAcademicYear = '$highSchoolAcademicYear', highSchoolHonorsReceived = '$highSchoolHonorsReceived', 
    collegeSchoolYear = '$collegeSchoolYear', collegeAcademicYear = '$collegeAcademicYear', collegeHonorsReceived = '$collegeHonorsReceived' WHERE id='$id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: thirdPage.php');
    }
    else{
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: editForm.php');
    }
}
// Update Second page
if(isset($_POST['second-form-update'])){

    $id = $_POST['secondForm-id'];
    $studentIDNumber = $_POST['studentIDNumber'];
    $course = $_POST['course'];
    $major = $_POST['major'];
    $yearLevel = $_POST['yearLevel'];
    $schoolYear = $_POST['schoolYear'];
    $semester = $_POST['semester'];
    $enrolmentStatus = $_POST['enrolmentStatus'];
    $studentStatus = $_POST['studentStatus'];
    $blockSection = $_POST['blockSection'];

    $misCode1 = $_POST['misCode1'];
    $subjectCode1 = $_POST['subjectCode1'];
    $descriptiveTitle1 = $_POST['descriptiveTitle1'];
    $time1 = $_POST['time1'];
    $day1 = $_POST['day1'];
    $room1 = $_POST['room1'];
    $unit1 = $_POST['unit1'];

    $misCode2 = $_POST['misCode2'];
    $subjectCode2 = $_POST['subjectCode2'];
    $descriptiveTitle2 = $_POST['descriptiveTitle2'];
    $time2 = $_POST['time2'];
    $day2 = $_POST['day2'];
    $room2 = $_POST['room2'];
    $unit2 = $_POST['unit2'];

    $misCode3 = $_POST['misCode3'];
    $subjectCode3 = $_POST['subjectCode3'];
    $descriptiveTitle3 = $_POST['descriptiveTitle3'];
    $time3 = $_POST['time3'];
    $day3 = $_POST['day3'];
    $room3 = $_POST['room3'];
    $unit3 = $_POST['unit3'];

    $misCode4 = $_POST['misCode4'];
    $subjectCode4 = $_POST['subjectCode4'];
    $descriptiveTitle4 = $_POST['descriptiveTitle4'];
    $time4 = $_POST['time4'];
    $day4 = $_POST['day4'];
    $room4 = $_POST['room4'];
    $unit4 = $_POST['unit4'];

    $misCode5 = $_POST['misCode5'];
    $subjectCode5 = $_POST['subjectCode5'];
    $descriptiveTitle5 = $_POST['descriptiveTitle5'];
    $time5 = $_POST['time5'];
    $day5 = $_POST['day5'];
    $room5 = $_POST['room5'];
    $unit5 = $_POST['unit5'];

    $misCode6 = $_POST['misCode6'];
    $subjectCode6 = $_POST['subjectCode6'];
    $descriptiveTitle6 = $_POST['descriptiveTitle6'];
    $time6 = $_POST['time6'];
    $day6 = $_POST['day6'];
    $room6 = $_POST['room6'];
    $unit6 = $_POST['unit6'];

    $misCode7 = $_POST['misCode7'];
    $subjectCode7 = $_POST['subjectCode7'];
    $descriptiveTitle7 = $_POST['descriptiveTitle7'];
    $time7 = $_POST['time7'];
    $day7 = $_POST['day7'];
    $room7 = $_POST['room7'];
    $unit7 = $_POST['unit7'];

    $misCode8 = $_POST['misCode8'];
    $subjectCode8 = $_POST['subjectCode8'];
    $descriptiveTitle8 = $_POST['descriptiveTitle8'];
    $time8 = $_POST['time8'];
    $day8 = $_POST['day8'];
    $room8 = $_POST['room8'];
    $unit8 = $_POST['unit8'];

    $misCode9 = $_POST['misCode9'];
    $subjectCode9 = $_POST['subjectCode9'];
    $descriptiveTitle9 = $_POST['descriptiveTitle9'];
    $time9 = $_POST['time9'];
    $day9 = $_POST['day9'];
    $room9 = $_POST['room9'];
    $unit9 = $_POST['unit9'];

    $misCode10 = $_POST['misCode10'];
    $subjectCode10 = $_POST['subjectCode10'];
    $descriptiveTitle10 = $_POST['descriptiveTitle10'];
    $time10 = $_POST['time10'];
    $day10 = $_POST['day10'];
    $room10 = $_POST['room10'];
    $unit10 = $_POST['unit10'];
    
    $query = "UPDATE form2 SET studentIDNumber = '$studentIDNumber', course = '$course', major = '$major', yearLevel = '$yearLevel', schoolYear = '$schoolYear', 
    semester = '$semester', enrolmentStatus = '$enrolmentStatus', studentStatus = '$studentStatus', blockSection = '$blockSection',
    misCode1 = '$misCode1', subjectCode1 = '$subjectCode1', descriptiveTitle1 = '$descriptiveTitle1', 
    time1 = '$time1', day1 = '$day1', room1 = '$room1', unit1 = '$unit1',
    misCode2 = '$misCode2', subjectCode2 = '$subjectCode2', descriptiveTitle2 = '$descriptiveTitle2', 
    time2 = '$time2', day2 = '$day2', room2 = '$room2', unit2 = '$unit2',
    misCode3 = '$misCode3', subjectCode3 = '$subjectCode3', descriptiveTitle3 = '$descriptiveTitle3', 
    time3 = '$time3', day3 = '$day3', room3 = '$room3', unit3 = '$unit3',
    misCode4 = '$misCode4', subjectCode4 = '$subjectCode4', descriptiveTitle4 = '$descriptiveTitle4', 
    time4 = '$time4', day4 = '$day4', room4 = '$room4', unit4 = '$unit4',
    misCode5 = '$misCode5', subjectCode5 = '$subjectCode5', descriptiveTitle5 = '$descriptiveTitle5', 
    time5 = '$time5', day5 = '$day5', room5 = '$room5', unit5 = '$unit5',
    misCode6 = '$misCode6', subjectCode6 = '$subjectCode6', descriptiveTitle6 = '$descriptiveTitle6', 
    time6 = '$time6', day6 = '$day6', room6 = '$room6', unit6 = '$unit6',
    misCode7 = '$misCode7', subjectCode7 = '$subjectCode7', descriptiveTitle7 = '$descriptiveTitle7', 
    time7 = '$time7', day7 = '$day7', room7 = '$room7', unit7 = '$unit7',
    misCode8 = '$misCode8', subjectCode8 = '$subjectCode8', descriptiveTitle8 = '$descriptiveTitle8', 
    time8 = '$time8', day8 = '$day8', room8 = '$room8', unit8 = '$unit8',
    misCode9 = '$misCode9', subjectCode9 = '$subjectCode9', descriptiveTitle9 = '$descriptiveTitle9', 
    time9 = '$time9', day9 = '$day9', room9 = '$room9', unit9 = '$unit9',
    misCode10 = '$misCode10', subjectCode10 = '$subjectCode10', descriptiveTitle10 = '$descriptiveTitle10', 
    time10 = '$time10', day10 = '$day10', room10 = '$room10', unit10 = '$unit10' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: thirdPage.php');
    }
    else{
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: thirdPage.php');
    }
}

$con->close();
?>