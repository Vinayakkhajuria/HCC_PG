<?php
// Connect to MySQL
$conn = mysqli_connect('localhost', 'root', '', 'logindb');

// Check if the form has been submitted
if (isset($_POST['login'])) {
  // Get the username and password from the form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if the username and password are valid
  $sql = "SELECT * FROM users WHERE Email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // The user is authenticated, so set a session variable and redirect to the homepage
    session_start();
    $_SESSION['email'] = $email;
    header('Location: index.php');
  } else {
    // The username or password is invalid, so show an error message
    echo "Invalid username or password";
  }
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Owner Login</title>
    <link href="css/owner.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <h2>Owner Login</h2>
        <form>
          <div class="user-box">
            <label for="email" >Email</label>
            <input type="email" id="emailInput" name="email" required placeholder="Enter your email address">
          </div>
          <div class="user-box">
            <label for="password">Password</label>
            <input type="password" id="passwordInput" name="password" required placeholder="Enter your password">
          </div>
          <a href="index.html" class="forgot-password-link">Forgot Password?</a>
          <div class="signup-link-container">
            Don't have an account? <a href="ownersignup.html" class="signup-link">Signup</a>
          </div>
          <form action="C:\Users\DELL\Desktop\PG_search\pg-finder2-main\dashboard.html">
         
          <button type="submit" class="btn btn-block btn-primary">Login</button>
          </form>
        </form>
      </div>
    </div>
    
    <!-- Signup dialog box 
    <div class="overlay">
      <div class="dialog">
        <span class="close">&times;</span>
        <h2>Signup</h2>
        <form>
          <div class="user-box">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="user-box">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
          </div>
          <div class="user-box">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
              <option value="">--Select--</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="user-box">
            <label for="contact-number">Contact Number</label>
            <input type="tel" id="contact-number" name="contact-number" required>
          </div>
          <div class="user-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="user-box">
            <label for="address">Address</label>
            <textarea id="address" name="address" required></textarea>
          </div>
          <div class="user-box">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
          </div>
          <button type="submit">Signup</button>
        </form>
      </div>
    </div>
    
    <script src="script.js"></script>-->
  </body>
</html>

