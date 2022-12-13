<?php
include 'database.php';
session_start();
$date = date('Y-m-d');
$subject = $_POST['subject'];
$feedback = $_POST['feedback'];
$feedback_id = "FID" . rand(100000, 9999999);
$sr_code = $_SESSION['SR_CODE'];

$sql = "INSERT INTO student_feedback_table(FEEDBACK_ID, SR_CODE, FEEDBACK, DATE, SUBJECT) VALUES ('$feedback_id','$sr_code','$feedback','$date','$subject')";

$conn->query($sql);

header("location: ../student/index.php");