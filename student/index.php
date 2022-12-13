<?php
session_start();
include "../include/database.php";
if (!isset($_SESSION['SR_CODE'])) {
    header("location: ../index.php");
}

if (isset($_SESSION['SR_CODE'])) {
    //fetch from student table
    $sql = "SELECT * FROM student_table WHERE SR_CODE = '" . $_SESSION['SR_CODE'] . "'";
    $student = $conn->query($sql);
    $student = $student->fetch_assoc();
    $student_name = $student['FIRSTNAME'] . " " . $student['LASTNAME'];
    //bday
    $student_bday = $student['BIRTHDATE'];
    $student_bday = date("F d, Y", strtotime($student_bday));
    //age
    $student_age = $student['AGE'];
    //address
    //gender
    $student_gender = $student['SEX'];
    $student_address = $student['ADDRESS'];
    $student_contact = $student['CONTACT_NO'];
    $student_course = $student['COURSE'];
    $student_year_level = $student['YEAR_LEVEL'];
    $student_semester = $student['SEM'];
    $student_section = $student['SECTION'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="icon" href="../images/BSU.png" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <title>Student Profile Management System</title>
</head>

<body>
    <?php include "../include/header.php"; ?>
    <section class="admin-section" style="margin-top: 96px">
        <div class="d-flex align-items-start h-100">
            <div class="nav flex-column nav-pills p-3 h-100 bg-dark" style="width:40vh" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <button class="nav-link rounded-0 active" id="v-pills-myprofile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-myprofile" type="button" role="tab" aria-controls="v-pills-myprofile"
                    aria-selected="true">
                    <i class="bi bi-person-circle"></i> My Profile
                </button>
                <button class="nav-link" id="v-pills-feedback-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-feedback" type="button" role="tab" aria-controls="v-pills-feedback"
                    aria-selected="false"><i class="bi bi-chat-left-dots-fill"></i>
                    Feedback</button>
                <a href="logout.php" class="nav-link"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>
            <div class="tab-content w-75 h-100" id="v-pills-tabContent">
                <div class="tab-pane p-3 fade show active" id="v-pills-myprofile" role="tabpanel"
                    aria-labelledby="v-pills-myprofile-tab" tabindex="0">
                    <?php include "../include/my-profile.php"; ?>
                </div>
                <div class="tab-pane p-3 fade" id="v-pills-feedback" role="tabpanel"
                    aria-labelledby="v-pills-feedback-tab" tabindex="0">
                    <?php include "../include/student-feedback.php"; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_SESSION['ERROR'])) {
        if ($_SESSION['ERROR'] === FALSE) {
            echo '<script>
        Swal.fire({
            icon: "success",
            title: "Login Successsul!",
            text: "Welcome Student!",
        });
        </script>';
            unset($_SESSION['ERROR']);
        }
    }
    ?>
    <script>
    $(document).ready(function() {
        $('.update-student-profile-btn').click(function() {
            var sr_code = $(this).attr('id');
            $.ajax({
                url: "../include/edit-profile-form.php",
                method: "POST",
                data: {
                    sr_code: sr_code
                },
                success: function(data) {
                    $('.edit-profile-form').html(data);
                }
            });
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>