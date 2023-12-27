<?PHP
    session_start();
    $host="localhost";
        $user="root";
        $pass="";
        $db="db";
       $connect= mysqli_connect($host,$user,$pass,$db); 

    $projects= "select * from projects ";
    $q=mysqli_query($connect,$projects);
    $rows = $q -> fetch_all(MYSQLI_ASSOC);


    
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>

                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="port.php">portfolio</a></li>
                    <li><a href="login-signup.html" class="user">
                            <i class="fa-solid fa-user "></i>
                        </a></li>
                </ul>
            </nav>
            <i id="ham" class="fa-solid fa-bars hamburger"></i>
        </header>
    </div>


    <div class="inner-back-text">
        <h1>All projects </h1>
        
    </div>


    <section class="services">
        <div class="box-container">
        <?php
    foreach ($rows as $row) {
        echo "<div>
                <section>
                    <a href='ds.php?id=" . $row['id'] . "'>
                        <img src='" . $row['image'] . "' alt=''>
                    </a>
                </section>
                <section>
                    <h3 class='PTitle'>" . $row['title'] . "</h3>
                </section>
              </div>";
    }
    ?>

        </div>


    </section>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col1">
                    <h3>Contact Us</h3>
                    <p><i class="fa fa-map-marker-alt"></i> 123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt"></i> +012 345 67890</p>
                    <p><i class="fa fa-envelope"></i> info@example.com</p>
                </div>
                <div class="col">
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
                <div class="col">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for updates.</p>
                    <div class="newsletter-form">
                        <input type="text" placeholder="Your email">
                        <button type="button">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script src="main.js"></script>
</body>

</html>