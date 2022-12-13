<?php
include "include/database.php";
session_start();

if (isset($_SESSION['ADMIN_ID'])) {
    header("location: admin/index.php");
} else if (isset($_SESSION['SR_CODE'])) {
    header("location: student/index.php");
}

if (isset($_POST['usernameInput']) && isset($_POST['passwordInput'])) {
    $username = $_POST['usernameInput'];
    $password = md5($_POST['passwordInput']);

    $sql = "SELECT ADMIN_ID FROM admin_account_table WHERE ADMIN_ID = '$username' AND PASSWORD = '$password';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['ADMIN_ID'] = $row['ADMIN_ID'];
            $_SESSION['ERROR'] = FALSE;
            header("location: admin/index.php");
        }
    } else {
        $sql = "SELECT SR_CODE FROM student_account_table WHERE SR_CODE = '$username' AND PASSWORD = '$password';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['SR_CODE'] = $row['SR_CODE'];
                $_SESSION['ERROR'] = FALSE;
                header("location: student/index.php");
            }
        } else {
            $_SESSION['ERROR'] = TRUE;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" href="images/BSU.png" type="image/x-icon">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Student Profile Management System</title>
</head>

<body>
    <section class="login-section">
        <div class="container h-100">
            <div class="position-relative h-100">
                <div
                    class="position-absolute rounded-3 top-50 start-50 translate-middle py-5 px-4 shadow-lg login-container">
                    <div class="row">
                        <div class="col-7">
                            <div class="d-flex justify-content-center flex-column">
                                <h3 class="text-center title">Student Profile Management</h3>
                                <h4 class="text-center campus">Mabini Campus</h4>
                                <center>
                                    <img src="images/BSU.png" alt="BSU.png" class="logo">
                                </center>
                            </div>
                        </div>
                        <div class="col">
                            <form action="index.php" method="post">
                                <h3 class="mb-3">Login</h3>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" name="usernameInput"
                                        id="usernameInput" placeholder="Username" required autocomplete="off">
                                    <label for="usernameInput">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control rounded-3" name="passwordInput"
                                        id="passwordInput" placeholder="Password" required autocomplete="off">
                                    <label for="passwordInput">Password</label>
                                </div>
                                <button class="btn btn-light rounded-3" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_SESSION['ERROR'])) {
        if ($_SESSION['ERROR'] === TRUE) {
            echo '  <script>
                        Swal.fire({
                            icon: "error",
                            title: "Incorrect Username or Password",
                            text: "Please try again"
                        });
                    </script>';
            unset($_SESSION['ERROR']);
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>