<?php
include 'database.php';
$date = $_POST['date'];
$sql = "SELECT * FROM student_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sr_code = $row['SR_CODE'];
        $name = $row['FIRSTNAME'] . ' ' . $row['LASTNAME'];
        $section = $row['SECTION'];
        echo "<tr>
                <td>$sr_code</td>
                <td>$name</td>
                <td>$section</td>";
        $sql = "SELECT * FROM student_attendance WHERE SR_CODE = '$sr_code' AND DATE = '$date';";
        $result2 = $conn->query($sql);
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $status = $row2['STATUS'];
                echo $status;
                if ($status == "Present") {
                    echo "<td><select class='form-select setAttendance' id='$sr_code'>
                            <option value='Present' selected>Present</option>
                            <option value='Absent'>Absent</option>
                        </select></td>";
                } else if ($status == "Absent") {
                    echo "<td><select class='form-select setAttendance' id='$sr_code'>
                            <option value='Present'>Present</option>
                            <option value='Absent' selected>Absent</option>
                        </select></td>";
                } else {
                    echo "<td><select class='form-select setAttendance' id='$sr_code'>
                            <option selected>Set Attendance</option>
                            <option value='Present'>Present</option>
                            <option value='Absent'>Absent</option>
                        </select></td>";
                }
            }
        }
        echo "</tr>";
    }
}

?>


<script>
$('.setAttendance').change(function() {
    console.log($(this).val());
    var date = $('#dateInput').val();
    var sr_code = $(this).attr('id');
    var status = $(this).val();
    $.ajax({
        url: "../include/set-attendance.php",
        method: "POST",
        data: {
            sr_code: sr_code,
            date: date,
            status: status
        },
        success: function(_data) {
            console.log(date);
            console.log(sr_code);
            console.log(status);
        }
    });
});
</script>