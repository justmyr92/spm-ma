<?php

include 'database.php';
$sr_code = $_POST['sr_code'];
$sql = "DELETE FROM student_account_table WHERE SR_CODE = '$sr_code';";
$sql .= "DELETE FROM student_feedback_table WHERE SR_CODE = '$sr_code';";
$sql .= "DELETE FROM student_performance_table WHERE SR_CODE = '$sr_code';";
$sql .= "DELETE FROM student_attendance WHERE SR_CODE = '$sr_code';";
$sql .= "DELETE FROM student_table WHERE SR_CODE = '$sr_code';";

echo $sql;
if ($conn->multi_query($sql) === TRUE) {
    //header("location: ../admin/index.php");
}