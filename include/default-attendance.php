<?php
include "database.php";

$date = $_POST['dateInput'];
$sr_code = $_POST['srCodeInput'];
$status = $_POST['statusInput'];

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