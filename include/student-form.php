<section class="student-form-section h-100">
    <div class="container h-100">
        <h3><i class="bi bi-person-plus-fill"> </i> Upload Student</h3>
        <hr>
        <form action="../include/upload-student-profile.php" method="post" class="w-75 mx-auto p-4 shadow border">
            <div class="row mb-3">
                <div class="col-3">
                    <label for="srcodeInput" class="form-label">SR Code</label>
                    <input type="text" class="form-control rounded-0" name="srcodeInput" id="srcodeInput"
                        aria-describedby="srcodeHelpId" placeholder="SR Code" required autocomplete = "off">
                    <small id="srcodeHelpId" class="form-text text-muted">Example: 20-02617</small>
                </div>
                <div class="col">
                    <label for="firstNameInput" class="form-label">First Name</label>
                    <input type="text" class="form-control rounded-0" name="firstNameInput" id="firstNameInput"
                        placeholder="First Name" required autocomplete = "off">
                </div>
                <div class="col">
                    <label for="lastNameInput" class="form-label">Last Name</label>
                    <input type="text" class="form-control rounded-0" name="lastNameInput" id="lastNameInput"
                        placeholder="Last Name" required autocomplete = "off">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="birthDateInput" class="form-label">Birth Date</label>
                    <input type="date" class="form-control rounded-0" name="birthDateInput" id="birthDateInput" required autocomplete = "off">
                </div>
                <div class="col-2">
                    <label for="ageInput" class="form-label">Age</label>
                    <input type="number" class="form-control rounded-0" name="ageInput" id="ageInput" placeholder="Age" required autocomplete = "off">
                </div>
                <div class="col">
                    <label for="addressInput" class="form-label">Address</label>
                    <input type="text" class="form-control rounded-0" name="addressInput" id="addressInput"
                        aria-describedby="addressHelpId" placeholder="Address" required autocomplete = "off">
                    <small id="addressHelpId" class="form-text text-muted">Brgy, Municipality, Province</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="sexInput" class="form-label">Sex</label>
                    <select class="form-select rounded-0" name="sexInput" id="sexInput">
                        <option selected value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col">
                    <label for="contactNoInput" class="form-label">Contact No</label>
                    <input type="text" class="form-control rounded-0" name="contactNoInput" id="contactNoInput"
                        aria-describedby="contactHelpId" placeholder="Contact No" required autocomplete = "off">
                    <small id="contactHelpId" class="form-text text-muted">Example: 09918271626</small>
                </div>
                <div class="col">
                    <label for="sectionInput" class="form-label">Section</label>
                    <input type="text" class="form-control rounded-0" name="sectionInput" id="sectionInput"
                        aria-describedby="sectionHelpId" placeholder="Section" required autocomplete = "off">
                    <small id="sectionHelpId" class="form-text text-muted">Example: IT-3101</small>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="yearLevelInput" class="form-label">Year Level</label>
                    <select class="form-select rounded-0" name="yearLevelInput" id="yearLevelInput">
                        <option selected value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </div>
                <div class="col">
                    <label for="semesterInput" class="form-label">Semester</label>
                    <select class="form-select rounded-0" name="semesterInput" id="semesterInput">
                        <option selected value="1st Semester">1st Semester</option>
                        <option value="2nd Semester">2nd Semester</option>
                        <option value="Summer">Summer</option>
                    </select>
                </div>
                <div class="col-5">
                    <label for="courseInput" class="form-label">Course</label>
                    <select class="form-select rounded-0" name="courseInput" id="courseInput">
                        <option selected value="BS Information Technology">BS Information Technology</option>
                        <option value="BS Marketing Management">BS Marketing Management</option>
                        <option value="BS Development Communication">BS Development Communication</option>
                    </select>
                </div>
            </div>
            <div class="d-flex">
                <input type="submit" class="btn btn-dark rounded-0" value="Submit" name="studentSubmitBTN"
                    id="studentSubmitBTN">
            </div>
        </form>
    </div>
</section>