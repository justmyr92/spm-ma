$(document).ready(function() {
    console.log($('.academicPerformanceContent'));
    $('.view-acad-perf').click(function() {
        var sr_code = $(this).attr('id');
        $.ajax({
            url: "../include/view-academic-performance.php",
            method: "POST",
            data: {
                sr_code: sr_code
            },
            success: function(data) {
                console.log(sr_code);
                $('.academicPerformanceContent').html(data);
            }
        });
    });

    function loadAttenance(date) {

        $.ajax({
            url: "../include/fetch-attendance.php",
            method: "POST",
            data: {
                date: date
            },
            success: function(data) {
                console.log(date);
                $('.attendandeBody').html(data);
            }
        });
    }

    function setdefault() {
        var date = $('#dateInput').val();
        $.ajax({
            url: "../include/create-attendance-sheet.php",
            method: "POST",
            data: {
                date: date
            },
            success: function(_data) {
                console.log(date);
                loadAttenance(date);
            }
        });
    }
    setdefault();
    $('#dateInput').change(function() {
        setdefault();
    });

    $('.update-student-profile-btn').click(function() {
        var sr_code = $(this).attr('id');
        $.ajax({
            url: "../include/edit-profile-form.php",
            method: "POST",
            data: {
                sr_code: sr_code
            },
            success: function(data) {
                $('.edit-profile-form').html(data);
            }
        });
    });
    $('.delete-student-profile-btn').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var sr_code = $(this).attr('id');
                $.ajax({
                    url: "../include/delete-student.php",
                    method: "POST",
                    data: {
                        sr_code: sr_code
                    },
                    success: function(_data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Student has been deleted.',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            location.reload();
                        })
                    }
                });
            }
        });
    });

});