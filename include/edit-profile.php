<?php

include 'database.php';

$sr_code = $_POST['srcodeInput'];
echo $sr_code;
$age = $_POST['ageInput'];
$contact = $_POST['contactNoInput'];
$section = $_POST['sectionInput'];
$year_level = $_POST['yearLevelInput'];
$semester = $_POST['semesterInput'];

$sql = "UPDATE student_table SET AGE=$age, CONTACT_NO='$contact',YEAR_LEVEL='$year_level',SEM='$semester',SECTION='$section' WHERE SR_CODE='$sr_code'";

if ($conn->query($sql) == TRUE) {

    header("location: ../admin/index.php");
}