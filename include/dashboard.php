<?php

$sql = "SELECT COUNT(*) FROM Student_Table WHERE COURSE like 'BS Information Technology'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalBSIT = $row["COUNT(*)"];
    }
}
$sql = "SELECT COUNT(*) FROM Student_Table WHERE COURSE like 'BS Development Communication'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalBSDC = $row["COUNT(*)"];
    }
}
$sql = "SELECT COUNT(*) FROM Student_Table WHERE COURSE like 'BS Marketing Management'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalBSMM = $row["COUNT(*)"];
    }
}
$sql = "SELECT COUNT(*) FROM student_performance_table WHERE GWA >= 1.00 AND GWA <= 1.99";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalDL = $row["COUNT(*)"];
    }
}
$sql = "SELECT COUNT(*) FROM student_performance_table WHERE GWA >= 2.00 AND GWA <= 3.00";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalPassed = $row["COUNT(*)"];
    }
}
$sql = "SELECT COUNT(*) FROM student_performance_table WHERE GWA >= 3.01 AND GWA <= 5.00";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalAR = $row["COUNT(*)"];
    }
}

$sql = "SELECT COUNT(*) FROM student_performance_table WHERE GWA = 0.00";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalINC = $row["COUNT(*)"];
    }
}
?>
<section class="dashboard-section">
    <div class="container">
        <h3><i class="bi bi-speedometer2"></i> DASHBOARD</h3>
        <hr>
        <div class="d-flex justify-content-center gap-5 mb-5">
            <div class="card border-dark">
                <div class="card-header">BS Information Technology</div>
                <div class="card-body text-dark">
                    <h3 class="card-title text-center"><?php echo $totalBSIT; ?> </h3>
                </div>
            </div>
            <div class="card border-dark">
                <div class="card-header">BS Marketing Management</div>
                <div class="card-body text-dark">
                    <h3 class="card-title text-center"><?php echo $totalBSMM; ?></h3>
                </div>
            </div>
            <div class="card border-dark">
                <div class="card-header">BS Development Communication</div>
                <div class="card-body text-dark">
                    <h3 class="card-title text-center"><?php echo $totalBSDC; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 border p-5 shadow-sm">
                <canvas id="population" style="width:400px"></canvas>
            </div>
            <div class="col-6 border p-5 shadow-sm">
                <canvas id="academicPerformanceChart" class="academicPerformanceChart"></canvas>
            </div>
        </div>
    </div>
</section>