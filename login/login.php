<?php
// Connect to database 
$db = mysqli_connect("localhost", "root", "", "DB");

// Check for form submission
if (isset($_POST['email'], $_POST['password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $sql = "SELECT email,password FROM register WHERE email='$email' AND password='$password';
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) == 1) {
    // Login successful
    session_start();
    $_SESSION['e-mail'] = $email;
    header('Location : index.php'); // Redirect to home page
  }
   else {
    echo "error";
  }

}
?>