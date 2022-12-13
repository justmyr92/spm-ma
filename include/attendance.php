<?php

$date = date('Y-m-d');
?>
<section class="attendance-section">
    <div class="container">
        <div class="d-flex justify-content-start flex-column">
            <h3><i class="bi bi-calendar2-check"></i> Attendance</h3>
        </div>
        <div class="table-responsive overflow-auto" style= "height: 70vh" >
            <div class="mb-3" style="width: min-content;">
                <label for="dateInput" class="form-label">Choose Date</label>
                <input type="date" class="form-control" name="dateInput" id="dateInput" value="<?php echo $date; ?>">
            </div>
            <table class="table" id="attendanceTable">
                <thead>
                    <tr>
                        <th scope="col">SR Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Section</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="attendandeBody">

                </tbody>
            </table>
        </div>
    </div>
</section>