<?php
// Connect to MySQL
$conn = mysqli_connect('localhost', 'root', '', 'logindb');

// Check if the form has been submitted
if (isset($_POST['login'])) {
  // Get the username and password from the form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if the username and password are valid
  $sql = "SELECT * FROM username WHERE Email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // The user is authenticated, so set a session variable and redirect to the homepage
    session_start();
    $_SESSION['email'] = $email;
    header('Location: index.html');
  } else {
    // The username or password is invalid, so show an error message
    echo "Invalid username or password";
  }
}
?>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Login As a User</h5>
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
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>
                   
                    <div class="form-group">
                        
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                        
                    </div>
                   

            <div class="modal-footer">
                <span>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                    to register a new account
                </span>
            </div>
        </div>
    </div>
</div>
