<section class="student-profile-section h-100 overflow-auto">
    <div class="container">
        <h3><i class="bi bi-person-lines-fill"></i> STUDENT PROFILE</h3>
        <hr>
        <div class="d-flex mb-3">
            <button class="btn btn-dark rounded-0" data-bs-toggle="modal"
                data-bs-target="#academicPerformaceUploadModal">Upload Academic
                Performance</button>
        </div>
        <div class="table-responsive" style="height: 75vh;">
            <table class="table" id="studentprofileTable">
                <thead>
                    <tr>
                        <th scope="mb-3">SR Code</th>
                        <th scope="mb-3">Name</th>
                        <th scope="mb-3">Birth Date</th>
                        <th scope="mb-3">Age</th>
                        <th scope="mb-3">Sex</th>
                        <th scope="mb-3">Address</th>
                        <th scope="mb-3">Contact No</th>
                        <th scope="mb-3">Year Level</th>
                        <th scope="mb-3">Sem</th>
                        <th scope="mb-3">Section</th>
                        <th scope="mb-3">Course</th>
                        <th scope="mb-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM student_table";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                            <th scope="row">' . $row['SR_CODE'] . '</th>
                            <td>' . $row['FIRSTNAME'] . ' ' . $row['LASTNAME'] . '</td>
                            <td>' . $row['BIRTHDATE'] . '</td>
                            <td>' . $row['AGE'] . '</td>
                            <td>' . $row['SEX'] . '</td>
                            <td>' . $row['ADDRESS'] . '</td>
                            <td>' . $row['CONTACT_NO'] . '</td>
                            <td>' . $row['YEAR_LEVEL'] . '</td>
                            <td>' . $row['SEM'] . '</td>
                            <td>' . $row['SECTION'] . '</td>
                            <td>' . $row['COURSE'] . '</td>
                            <td>
                            <button type="button" class="btn btn-primary btn-sm view-acad-perf" id="' . $row['SR_CODE'] . '"  data-bs-toggle="modal" data-bs-target="#academicPerformanceModal">
                                View Academic Performance
                            </button>
                            <button type="button" class="btn btn-success btn-sm update-student-profile-btn" id="' . $row['SR_CODE'] . '" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm delete-student-profile-btn" id="' . $row['SR_CODE'] . '"><i class="bi bi-trash-fill"></i></button></td>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
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


<form action="../include/upload-academic-performance.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="academicPerformaceUploadModal" tabindex="-1"
        aria-labelledby="academicPerformaceUploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="academicPerformaceUploadModalLabel">Upload Academic Performance
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="srcodeInput" class="form-label">SR Code</label>
                        <input type="text" class="form-control rounded-0" name="srcodeInput" id="srcodeInput"
                            aria-describedby="srcodeHelpId" placeholder="SR Code" required autocomplete = "off">
                        <small id="srcodeHelpId" class="form-text text-muted">Example: 20-02617</small>
                    </div>
                    <div class="mb-3">
                        <label for="yearLevelInput" class="form-label">Year Level</label>
                        <select class="form-select rounded-0" name="yearLevelInput" id="yearLevelInput">
                            <option selected value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="semesterInput" class="form-label">Semester</label>
                        <select class="form-select rounded-0" name="semesterInput" id="semesterInput">
                            <option selected value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                            <option value="Summer">Summer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="certificateInput" class="form-label">CERTIFICATE</label>
                        <input type="file" class="form-control rounded-0" name="certificateInput" id="certificateInput" required autocomplete = "off">
                    </div>
                    <div class="mb-3">
                        <label for="gwaInput" class="form-label">GWA</label>
                        <input type="text" class="form-control rounded-0" name="gwaInput" id="gwaInput"
                            aria-describedby="gwaHelpId" placeholder="GWA" required autocomplete = "off">
                        <small id="gwaHelpId" class="form-text text-muted">Example: 1.90</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal fade" id="academicPerformanceModal" tabindex="-1" aria-labelledby="academicPerformanceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="academicPerformanceModalLabel">Academic Performance</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body academicPerformanceContent">



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>