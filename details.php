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
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ArchiCraft Engineering</title>
</head>

<body>

    <header>

        <div class="logo">
            <img src="imgs/icon-1.png" alt="icon">
            <h1> ArchiCraft </h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
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

<!-- Container for the image gallery -->
<div class="gallery">
    <div>
    <?php
      foreach ($rows as $row){
          echo " <div class='mySlides' >
          <div class='numbertext'></div>
        <img src='".$row['image']."' style='width:100%'>
    </div>
        ";
      }
      
      ?>
 </div>
    <!-- Next and previous buttons -->
    <div class="arrows">
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
    
  
    <!-- Thumbnail images -->
    <div class="row">
    <?php
      foreach ($rows as $row){
          echo " <div class='column' >
          <img class='demo cursor' src='".$row['image']."' style='width:100%' onclick='currentSlide(1)' alt=''>
    </div>
        ";
      }
      
      ?>
    
   
  </div>
   <!-- Project Details -->
   <div class="project-details">
    <h3> OUR GALLERY </h3>
    <p> 
      <span>OUR EXPERIENCE</span> 
      <br />
      As an architectural practice that is well renowned internationally, 
      Nico van der Meulen Architects supplies creative solutions that are customised to suit each client’s 
      personal requirements. Through working closely with all its clients to ensure optimal satisfaction,
       the Architect Firm has accomplished astounding success in the design of upmarket residential homes.
        The company’s innovative architectural vision is evident in its ability to continuously produce outstanding
         architecture that is personalized in accordance with the homeowners’ lifestyle requirements.<br>
         The company’s work has been featured in hundreds of magazines, hardcover books and thousands of websites all over the world. Nico has been interviewed on radio and television on numerous occasions and his designs have been featured in television programmes both locally and abroad.
         </p>
    <h2>Architect: James Garrett Jr.</h2>
    <!-- Add more project details as needed -->
</div>




    <!-- Footer Start -->

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

