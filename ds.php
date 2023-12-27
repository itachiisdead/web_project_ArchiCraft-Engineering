
<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "db";
$connect = mysqli_connect($host, $user, $pass, $db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $project_query = "SELECT * FROM projects WHERE id = $id";
    $result = mysqli_query($connect, $project_query);

    if ($result && mysqli_num_rows($result) > 0) {
        $project = mysqli_fetch_assoc($result);
    } else {
        header("Location: port.php");
        exit();
    }
} else {
    header("Location: port.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="details.css">
    <title>Project Details</title>
</head>

<body>
    <h1>Project Details</h1>
    <div>
        <img src='<?php echo $project['image']; ?>' alt=''>
        <h2><?php echo $project['title']; ?></h2>
        <p><?php echo $project['description']; ?></p>
        <p>Architect: <?php echo $project['architect']; ?></p>
        <p>Price Range: <?php echo $project['price_range']; ?></p>
    </div>
</body>

</html>
