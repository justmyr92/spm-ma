<?php

$date = $_POST['date'];
$sr_code = $_POST['sr_code'];


?>
<input type="hidden" class="form-control" name="srCodeInput" id="srCodeInput" readonly value="<?php echo $sr_code; ?>">
<input type="hidden" class="form-control" name="dateInput" id="dateInput" readonly value="<?php echo $date; ?>">
<div class="mb-3">
    <label for="statusInput" class="form-label">Status</label>
    <select class="form-select" name="statusInput" id="statusInput">
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
    </select>
</div>