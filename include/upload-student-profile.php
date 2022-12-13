<?php
include '../include/database.php';

session_start();

if (isset($_POST['studentSubmitBTN'])) {
    $sr_code = $_POST['srcodeInput'];
    $first_name = $_POST['firstNameInput'];
    $last_name = $_POST['lastNameInput'];
    $birth_date = $_POST['birthDateInput'];
    $age = $_POST['ageInput'];
    $address = $_POST['addressInput'];
    $sex = $_POST['sexInput'];
    $contact_no = $_POST['contactNoInput'];
    $section = $_POST['sectionInput'];
    $year_level = $_POST['yearLevelInput'];
    $semester = $_POST['semesterInput'];
    $course = $_POST['courseInput'];

    $password = md5($sr_code . strtoupper($first_name[0]) . strtoupper($last_name[0]));

    $sql = "INSERT INTO student_table(SR_CODE, FIRSTNAME, LASTNAME, BIRTHDATE, AGE, SEX, ADDRESS, CONTACT_NO, YEAR_LEVEL, SEM, SECTION, COURSE) VALUES ('$sr_code','$first_name','$last_name','$birth_date',$age,'$sex','$address','$contact_no','$year_level','$semester','$section','$course')";
    if ($conn->query($sql) === TRUE) {
        $sql = "INSERT INTO `student_account_table`(`SR_CODE`, `PASSWORD`) VALUES ('$sr_code', '$password');";
        if ($conn->query($sql) == TRUE) {
            header("location: ../admin/index.php");
        }
    }
}