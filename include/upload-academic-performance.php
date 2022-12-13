<?php

include 'database.php';
$sr_code = $_POST['srcodeInput'];
$year_level = $_POST['yearLevelInput'];
$sem = $_POST['semesterInput'];
$gwa = $_POST['gwaInput'];
echo $year_level . ' ' . $sem . ' ' . $gwa;
$sql = "SELECT SR_CODE FROM STUDENT_TABLE WHERE SR_CODE = '$sr_code'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($_FILES["certificateInput"]["error"] == 4) {
            echo
            "<script> alert('Image Does Not Exist'); </script>";
        } else {
            $fileName = $_FILES["certificateInput"]["name"];
            $fileSize = $_FILES["certificateInput"]["size"];
            $tmpName = $_FILES["certificateInput"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                "
                    <script>
                    alert('Invalid Image Extension');
                    </script>
                    ";
            } else if ($fileSize > 1000000) {
                echo  "<script>
                            alert('Image Size Is Too Large');
                        </script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                move_uploaded_file($tmpName, '../images/certificate/' . $newImageName);
                $query = "INSERT INTO student_performance_table(SR_CODE, YEAR_LEVEL, SEM, GWA, CERTIFICATE) VALUES ('$sr_code','$year_level','$sem', $gwa,'$newImageName');";
                $conn->query($query);
            }
        }
        echo "New record created successfully";
    }
}

header("Location: ../admin/index.php");