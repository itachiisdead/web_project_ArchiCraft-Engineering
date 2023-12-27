<?php
// Connect to database
$db = mysqli_connect("localhost", "root", "", "DB");

$id = mysqli_real_escape_string($db, $_POST['id']);
$image = mysqli_real_escape_string($db, $_POST['img-src']);
$image2 = mysqli_real_escape_string($db, $_POST['img-src2']);
$image3 = mysqli_real_escape_string($db, $_POST['img-src3']);
$image4 = mysqli_real_escape_string($db, $_POST['img-src4']);
$title = mysqli_real_escape_string($db, $_POST['title']);
$architect = mysqli_real_escape_string($db, $_POST['architect']);
$category = mysqli_real_escape_string($db, $_POST['category']);
$description = mysqli_real_escape_string($db, $_POST['description']);
$price = mysqli_real_escape_string($db, $_POST['price']);

// Insert data into database
$sql = "INSERT INTO projects (id,image,img2,img3,img4, title, architect, description,category, price_range) 
VALUES ('$id','$image','$image2','$image3','$image4', '$title', '$architect', '$description','$category', '$price')";

if (mysqli_query($db, $sql)) {
    header("Location:current_projects.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

?>