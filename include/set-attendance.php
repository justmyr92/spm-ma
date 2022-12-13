<?php
include "database.php";

$date = $_POST['date'];
$sr_code = $_POST['sr_code'];
$status = $_POST['status'];

$sql = "SELECT * FROM student_attendance WHERE SR_CODE = '$sr_code' AND DATE = '$date';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "UPDATE student_attendance SET STATUS = '$status' WHERE SR_CODE = '$sr_code' AND DATE = '$date';";
    $conn->query($sql);
} else {
    $sql = "INSERT INTO student_attendance(SR_CODE, DATE, STATUS) VALUES ('$sr_code','$date','$status');";
    $conn->query($sql);
}
header("location: ../admin/index.php");