<?php
include 'database.php';
$sr_code = $_POST['sr_code'];

$sql = "SELECT * FROM student_table WHERE SR_CODE = '$sr_code'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        //age, contact, section, year_level, semester
        $age = $rows['AGE'];
        $contact = $rows['CONTACT_NO'];
        $section = $rows['SECTION'];
        $year_level = $rows['YEAR_LEVEL'];
        $semester = $rows['SEM'];
    }
}
?>
<div class="mb-3">
    <input type="hidden" class="form-control" name="srcodeInput" id="srcodeInput" value="<?php echo $sr_code; ?>">
</div>
<div class="mb-3">
    <label for="ageInput" class="form-label">Age</label>
    <input type="number" class="form-control rounded-0" name="ageInput" id="ageInput" placeholder="Age"
        value="<?php echo $age; ?>">
</div>
<div class="mb-3">
    <label for="contactNoInput" class="form-label">Contact No</label>
    <input type="text" class="form-control rounded-0" name="contactNoInput" id="contactNoInput"
        aria-describedby="contactHelpId" placeholder="Contact No" value="<?php echo $contact; ?>">
    <small id="contactHelpId" class="form-text text-muted">Example: 09918271626</small>
</div>
<div class="mb-3">
    <label for="sectionInput" class="form-label">Section</label>
    <input type="text" class="form-control rounded-0" name="sectionInput" id="sectionInput"
        aria-describedby="sectionHelpId" placeholder="Section" value="<?php echo $section; ?>">
    <small id="sectionHelpId" class="form-text text-muted">Example: IT-3101</small>
</div>
<div class="mb-3">
    <label for="yearLevelInput" class="form-label">Year Level</label>
    <select class="form-select rounded-0" name="yearLevelInput" id="yearLevelInput">
        <?php
        $year_level_array = array("1st Year", "2nd Year", "3rd Year", "4th Year");
        foreach ($year_level_array as $year) {
            if ($year == $year_level) {
                echo "<option value='$year' selected>$year</option>";
            } else {
                echo "<option value='$year'>$year</option>";
            }
        }
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="semesterInput" class="form-label">Semester</label>

    <select class="form-select rounded-0" name="semesterInput" id="semesterInput">
        <?php
        $semester_array = array("1st Semester", "2nd Semester", "Summer");
        foreach ($semester_array as $sem) {
            if ($sem == $semester) {
                echo "<option value='$sem' selected>$sem</option>";
            } else {
                echo "<option value='$sem'>$sem</option>";
            }
        }
        ?>

    </select>
</div>