<?php
include '../include/database.php';

session_start();
if (!isset($_SESSION['ADMIN_ID'])) {
    header("location: ../index.php");
}



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
            header("location: index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="icon" href="../images/BSU.png" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <title>Student Profile Management System</title>
</head>

<body>
    <?php
    include "../include/header.php";
    ?>
    <section class="admin-section" style="margin-top: 96px">
        <div class="d-flex align-items-start h-100">
            <div class="nav flex-column nav-pills p-3 h-100 bg-dark" style="width:18vw" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link rounded-0 active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </button>
                <button class="nav-link rounded-0" id="v-pills-studentprofile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-studentprofile" type="button" role="tab" aria-controls="v-pills-studentprofile" aria-selected="false">
                    <i class="bi bi-person-lines-fill"></i> Student Profile
                </button>
                <button class="nav-link" id="v-pills-create-tab" data-bs-toggle="pill" data-bs-target="#v-pills-create" type="button" role="tab" aria-controls="v-pills-create" aria-selected="false">
                    <i class="bi bi-person-plus-fill"></i> Create
                </button>
                <button class="nav-link" id="v-pills-attendance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-attendance" type="button" role="tab" aria-controls="v-pills-attendance" aria-selected="false"><i class="bi bi-calendar2-check"></i> Attendance</button>
                <button class="nav-link" id="v-pills-feedback-tab" data-bs-toggle="pill" data-bs-target="#v-pills-feedback" type="button" role="tab" aria-controls="v-pills-feedback" aria-selected="false"><i class="bi bi-chat-left-dots-fill"></i>
                    Feedback</button>
                <a href="logout.php" class="nav-link"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>
            <div class="tab-content h-100" style="width:82vw" id="v-pills-tabContent">
                <div class="tab-pane p-3 fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab" tabindex="0">
                    <?php include "../include/dashboard.php"; ?>
                </div>
                <div class="tab-pane p-3 fade" id="v-pills-studentprofile" role="tabpanel" aria-labelledby="v-pills-studentprofile-tab" tabindex="0">
                    <?php include "../include/student-profile.php"; ?>
                </div>
                <div class="tab-pane p-3 fade" id="v-pills-create" role="tabpanel" aria-labelledby="v-pills-create-tab" tabindex="0">
                    <?php include "../include/student-form.php"; ?>
                </div>
                <div class="tab-pane p-3 fade" id="v-pills-attendance" role="tabpanel" aria-labelledby="v-pills-attendance-tab" tabindex="0">
                    <?php include "../include/attendance.php"; ?>
                </div>
                <div class="tab-pane p-3 fade" id="v-pills-feedback" role="tabpanel" aria-labelledby="v-pills-feedback-tab" tabindex="0">
                    <?php include "../include/feedback.php"; ?>
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
            text: "Welcome Administrator",
        });
        </script>';
            unset($_SESSION['ERROR']);
        }
    }
    ?>
    <script>
        $('#studentprofileTable').DataTable();
        //$('#attendanceTable').DataTable();
        var xValues = ["Dean Lister", "Passed", "At Risk", "Incomplete"];
        var yValues = [<?php echo $totalDL . ', ' . $totalPassed . ', ' . $totalAR . ', ' . $totalINC ?>];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("academicPerformanceChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    position: "right"
                },
                title: {
                    display: true,
                    text: "Academic Performance"
                }
            }
        });

        var xval = ["BSMM", "BSIT", "BSDC"];
        var yval = [<?php echo $totalBSMM . ', ' . $totalBSIT . ', ' . $totalBSDC; ?>];
        var bColors = ["red", "green", "blue"];

        new Chart("population", {
            type: "bar",
            data: {
                labels: xval,
                datasets: [{
                    backgroundColor: bColors,
                    data: yval
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Total Population"
                }
            }
        });
    </script>
    <script src="../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>