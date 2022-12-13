<section class="my-profile-section">
    <div class="container">
        <h3><i class="bi bi-person-circle"></i> MY PROFILE</h3>
        <hr>
        <div class="d-flex mb-3">
            <button type="button" class="btn btn-success update-student-profile-btn"
                id="<?php echo $_SESSION['SR_CODE'] ?>" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i
                    class="bi bi-pencil-square"></i>Edit Profile</button>
        </div>
        <ul class="list-group m-0" style="height: fit-content;">
            <li class="list-group-item">
                <h6>SR Code: <span class="fw-normal"><?php echo $_SESSION['SR_CODE']; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Name: <span class="fw-normal"><?php echo $student_name; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Course: <span class="fw-normal"><?php echo $student_course; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Year: <span class="fw-normal"><?php echo $student_year_level; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Section: <span class="fw-normal"><?php echo $student_section; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Address: <span class="fw-normal"><?php echo $student_address; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Contact Number: <span class="fw-normal"><?php echo $student_contact; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Gender: <span class="fw-normal"><?php echo $student_gender; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Birthdate: <span class="fw-normal"><?php echo $student_bday; ?></span></h6>
            </li>
            <li class="list-group-item">
                <h6>Age: <span class="fw-normal"><?php echo $student_age; ?></span></h6>
            </li>
        </ul>
    </div>
</section>


<form action="../include/edit-profile.php" method="post">
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editProfileModalLabel">Edit Students</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body edit-profile-form">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>