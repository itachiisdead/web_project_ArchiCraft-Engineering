<?php
// Connect to database 
$db = mysqli_connect("localhost", "root", "", "DB");

// Check for form submission
if (isset($_POST['email'], $_POST['password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if ($_POST['email']=='admin@gmail.com' &&$_POST['password']=='admin')
  {
    header("Location: current_projects.php");
  }

else{
  // Validate password 
  $sql = "SELECT email,password FROM register WHERE email='$email' AND password='$password'";
  $result = mysqli_query($db, $sql);
  
  

  if (mysqli_num_rows($result) == 1) {
    // Login successful
    session_start();
    $_SESSION['email'] = $email;
    header("Location: index.php"); // Redirect to home page
    echo "Login successful";
  } else {
    // Login failed
    echo "Invalid email or password.";
    header("Location: login-signup.php"); // Redirect to login page
  }
}
}
?>