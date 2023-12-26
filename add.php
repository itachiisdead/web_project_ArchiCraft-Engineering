<?php
// Connect to database
$db = mysqli_connect("localhost", "root", "", "DB");

$id = mysqli_real_escape_string($db, $_POST['id']);
$image = mysqli_real_escape_string($db, $_POST['img-src']);
$title = mysqli_real_escape_string($db, $_POST['title']);
$architect = mysqli_real_escape_string($db, $_POST['architect']);
$description = mysqli_real_escape_string($db, $_POST['description']);
$price = mysqli_real_escape_string($db, $_POST['price']);

// Insert data into database
$sql = "INSERT INTO projects (id,image, title, architect, description, price_range) 
VALUES ('$id','$image', '$title', '$architect', '$description', '$price')";

if (mysqli_query($db, $sql)) {
    header("Location:current_projects.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

?>