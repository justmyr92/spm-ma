<section class="feedback-section">
    <div class="container h-100">
        <h3><i class="bi bi-chat-left-text-fill"></i> FEEDBACK</h3>
        <hr>
        <div class="d-flex overflow-auto" style="height: 84vh;">
            <?php
            //fetch for student_feedback_table innerjoin student_table
            $sql = "SELECT * FROM student_feedback_table INNER JOIN student_table ON student_feedback_table.SR_CODE = student_table.SR_CODE";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            ?>
            <ol class="list-group list-group-numbered w-100">
                <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><?php echo $row['SUBJECT']; ?></div>
                        <p><?php echo $row['FEEDBACK']; ?></p>
                        <small class="text-muted m-0">Submitted by
                            <?php echo $row['FIRSTNAME'] . ' ' . $row['LASTNAME']; ?>
                        </small>
                        <small class="text-muted m-0"><?php echo date('F m, Y', strtotime($row['DATE'])); ?></small>
                    </div>
                </li>
                <?php
                    }
                    ?>
            </ol>
            <?php
            } else {
            ?>
            <div class="d-flex justify-content-center align-items-center w-100">
                <h4 class="text-muted">No feedbacks yet.</h4>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>