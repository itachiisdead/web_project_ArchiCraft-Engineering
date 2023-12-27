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
    <link rel="stylesheet" href="ds.css">
    <title>Project Details</title>
</head>

<body>
    <main>
        <h1 class="btn">Project Details</h1>
        <div>
            <img src='<?php echo $project['image']; ?>' alt=''>
            <section>
                <h2><?php echo $project['title']; ?></h2>
                <p class="desc"><?php echo $project['description']; ?></p>
                <p>Architect:</p>
                <p class="A-name"> <?php echo $project['architect']; ?></p>
                <p>Price Range:</p>
                <p class="A-name"><?php echo $project['price_range']; ?></p>
            </section>
        </div>
    </main>
</body>

</html>