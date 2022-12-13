<?php

include 'database.php';

$sql = "SELECT SR_CODE FROM student_table";
$date = $_POST['date'];
$result = $conn->query($sql);
$sql = "SELECT * FROM student_attendance WHERE DATE = '" . $date . "'";
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
    echo "Attendance sheet already created for this date";
    exit();
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sql = "INSERT INTO student_attendance (SR_CODE, DATE, STATUS) VALUES ('" . $row['SR_CODE'] . "', '" . $date . "', '')";
            $conn->query($sql);
        }
    }
}