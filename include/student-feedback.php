<section class="student-feedback">
    <div class="container">
        <h3><i class="bi bi-chat-left-text"></i> FEEDBACK</h3>
        <hr>
        <div class="container-fluid g-0">
            <form action="../include/submit-feedback.php" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Fullname"
                            value="<?php echo $student_name; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required autocomplete = "off">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="feedback" class="form-label">Feedback</label>
                        <textarea class="form-control" name="feedback" id="feedback" rows="3" required autocomplete = "off"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary rounded-0">
                            <i class="bi bi-send-fill"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>