<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "db";
$connect = mysqli_connect($host, $user, $pass, $db);

// Check the connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

$projectsQuery = "SELECT * FROM projects";
$projectsResult = mysqli_query($connect, $projectsQuery);
$rows = $projectsResult->fetch_all(MYSQLI_ASSOC);

$results = [];

if (isset($_GET['search'])) {
  $search = mysqli_real_escape_string($connect, $_GET['search']);

  // Check if the input is numeric (search by ID) or a string (search by category)
  if (is_numeric($search)) {
    // Search by ID
    $sqlId = "SELECT * FROM projects WHERE id = '$search'";
    $resultId = mysqli_query($connect, $sqlId);
    $results = mysqli_fetch_all($resultId, MYSQLI_ASSOC);
  } else {
    // Search by category
    $sqlCategory = "SELECT * FROM projects WHERE category LIKE '%$search%'";
    $resultCategory = mysqli_query($connect, $sqlCategory);
    $results = mysqli_fetch_all($resultCategory, MYSQLI_ASSOC);
  }
} else {
  // No search performed, display all projects
  $results = $rows;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="port.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>ArchiCraft Engineering</title>
</head>

<body>


  <div class="background-image">
    <header>
      <div class="logo">
        <img src="imgs/icon-1.png" alt="icon">
        <h1> ArchiCraft </h1>
      </div>

      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>

          <li><a href="contact.php">Contact</a></li>
          <li><a href="port.php">portfolio</a></li>
          <?php
          if (isset($_SESSION['logged_in'])): ?>
            <a href="logout.php">Logout</a>
          <?php else: ?>
            <a href="login-signup.php"><i class="fa-solid fa-user"></i></a>
          <?php endif; ?>
        </ul>
      </nav>
      <i id="ham" class="fa-solid fa-bars hamburger"></i>
    </header>
  </div>


  <div class="inner-back-text">
    <h1>ِAll projects</h1>
    <form action="" method="get" class="search">
      <input type="text" name="search" placeholder="Search by category">
      <button type="submit">Search</button>
    </form>

  </div>
  <section class="services">
    <div class="wrapper">
      <div class="cols">
        <?php foreach ($results as $result): ?>
          <div class="col" ontouchstart="this.classList.toggle('hover');">
            <div class="container">
              <div class="card-container">
                <div class="card front">
                  <section>
                    <a href='ds.php?id=<?php echo $result['id']; ?>'>
                      <img src='<?php echo $result['image']; ?>' alt=''>
                    </a>
                  </section>
                  <section class="front-content">
                    <h3 class='PTitle'>
                      <?php echo $result['title']; ?>
                    </h3><br>
                  </section>
                </div>
                <div class="card back">
                  <section class="back-content">
                    <h3>Category:
                      <?php echo $result['category']; ?>
                    </h3>
                    <a href='ds.php?id=<?php echo $result['id']; ?>' class="read-more-link">Read More</a>
                  </section>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="footer">
        <div class="container_footer">
            <div class="row_footer">
                <div class="col_footer">
                    <h3>Contact Us</h3>
                    <p><i class="fa fa-map-marker-alt"></i> 123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt"></i> +012 345 67890</p>
                    <p><i class="fa fa-envelope"></i> info@example.com</p>
                </div>
                <div class="col_footer">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">3D Animation</a></li>
                        <li><a href="#">House Planning</a></li>
                        <li><a href="#">Interior Design</a></li>
                        <li><a href="#">Sustainability Solutions
                            </a></li>
                    </ul>
                </div>
                <div class="col_footer">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="index.php">main page</a></li>
                        <li><a href="port.php">projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <!-- Footer End -->

  <script src="main.js"></script>
</body>

</html>