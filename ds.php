
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Project Details</title>
</head>



<body>

    <div class="gallery">
    <h1>Project Details</h1>

    <div>
        <div class="mySlides">
            <div class="numbertext"></div>
            <img src='<?php echo $project['image']; ?>' style='width:100%' >
        </div>
        <div class="mySlides">
            <div class="numbertext"></div>
            <img src='<?php echo $project['img2']; ?>' style='width:100%' >
        </div>
        <div class="mySlides" >
        <div class='numbertext'></div>
            <img src='<?php echo $project['img3']; ?>' style='width:100%' >
        </div>
        <div class="mySlides" >
        <div class='numbertext'></div>
            <img src='<?php echo $project['img4']; ?>' style='width:100%' >
        </div>
     </div>



        <div class="arrows">
             <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
             <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>



  <div class="row">
      <div class="column">
        <img src='<?php echo $project['image']; ?>' style='width:100%' onclick="currentSlide(1)" alt="">
      </div>
      <div class="column">
        <img src='<?php echo $project['img2']; ?>' style='width:100%' onclick="currentSlide(2)" alt="">
      </div>
      <div class="column">
        <img src='<?php echo $project['img3']; ?>' style='width:100%' onclick="currentSlide(3)" alt="">
      </div>
      <div class="column">
        <img src='<?php echo $project['img4']; ?>' style='width:100%' onclick="currentSlide(4)" alt="">
      </div>

  </div>
  <div class="project-details">
        <span><?php echo $project['title']; ?></span>
        <h4>Category: <?php echo $project['category']; ?></h4>
        <p><?php echo $project['description']; ?></p>
         <p>Price Range: <?php echo $project['price_range']; ?></p>
        <h3>Architect: <?php echo $project['architect']; ?></h3>
       

        </div>


        <script src="main.js"></script>
</body>

</html>
