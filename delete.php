<?php
$db = mysqli_connect("localhost", "root", "", "DB");

if (isset($_POST['id'])) {
    echo 'Success';
    $id = $_POST['id'];

$sql = "DELETE FROM projects WHERE id = '$id'";

  } else {
    echo 'Error: No data received';
  }


if (mysqli_query($db, $sql)) {
    echo "Project information deleted successfully!";
} else {
    echo "Error: " . mysqli_error($db);
}

?>