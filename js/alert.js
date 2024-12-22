jQuery(document).ready(function() {
    jQuery('#request').submit(function(e) {
        e.preventDefault();

        // Display confirmation dialog
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to send the message?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "yes",
            cancelButtonText: "cancel"
        }).then(function(result) {
            if (result.isConfirmed) {
                // If user clicks "Yes", submit the form
                var addForm = jQuery('#request').serialize();

                jQuery.ajax({
                    method: 'POST',
                    url: 'insetTest.php',
                    data: addForm,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            // Display success message and reload the page
                            Swal.fire(
                                "Added Successfully!",
                            ).then(function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                        } else {
                            // Display error message
                            Swal.fire(
                                "Oops...",
                                "Something went wrong!",
                                "error"
                            );
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors here
                        Swal.fire(
                            "Oops...",
                            "Something went wrong!",
                            "error"
                        );
                    }
                });
            }
        });
    });
});