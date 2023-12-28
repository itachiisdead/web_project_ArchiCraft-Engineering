<?php

session_start();
// Connect to database
$db = mysqli_connect("localhost", "root", "", "DB");

if (isset($_POST['first-name'], $_POST['last-name'])) {
$firstName = mysqli_real_escape_string($db, $_POST['first-name']);
$lastName = mysqli_real_escape_string($db, $_POST['last-name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$projectName = mysqli_real_escape_string($db, $_POST['project-name']);
$details = mysqli_real_escape_string($db, $_POST['details']);
$comment = mysqli_real_escape_string($db, $_POST['comment']);



$_SESSION['first-name'] = $firstName;
$_SESSION['last-name'] = $lastName;
$_SESSION['email'] = $email;
$_SESSION['project-name'] = $projectName;
$_SESSION['details'] = $details;
$_SESSION['comment'] = $comment;

// Redirect to login page if not logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login-signup.php?redirect=contact.php");
    exit();
}


// Insert data into database
$sql = "INSERT INTO contacts (firstName, lastName, email ,projectName, details, comment) VALUES ('$firstName', '$lastName','$email',
'$projectName', '$details', '$comment')";
mysqli_query($db, $sql);

header("Location: contact.php");
}
?>