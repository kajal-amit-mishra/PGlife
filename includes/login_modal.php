<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div><br/>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                        </div><br/>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" >Login</button>
                        </div><br/>
                    </form>
                </div>


                <!-- <script>
$(document).ready(function() {
    // Function to show a toast message
    function showToast(message, type) {
        // Choose the appropriate color class based on the type (success, danger, info, etc.)
        var colorClass = type === 'success' ? 'bg-success' : 'bg-danger';

        // Create the toast element
        var toast = $('<div class="toast ' + colorClass + '" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">');
        var toastBody = $('<div class="toast-body">').text(message);

        // Append the toast body to the toast element
        toast.append(toastBody);

        // Append the toast element to the body
        $('body').append(toast);

        // Initialize the Bootstrap toast
        var toastInstance = new bootstrap.Toast(toast[0]);

        // Show the toast
        toastInstance.show();
    }

    // Handle the form submission
    $('#login-form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Add your form submission logic here (e.g., AJAX call)

        // Show a success toast message
        showToast('Loged In successfully!', 'success');
    });
});
</script> -->
                <div class="modal-footer">
                    <span>
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                        to register a new account
                    </span>
                </div>
            </div>
        </div>
    </div>
