<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> ArchiCraft Engineering </title>
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="about.css"> -->
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
        <i class="fa-solid fa-bars hamburger"></i>
    </header>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="imgs/back.jpg" style="width:100%">
            <div class="inner-back-text">
                <h1>Construction Services <br>
                    <span>Creative & Professional</span>
                </h1>
                <br>
                <div class="inner-back-btn">
                    <a href="#welcome" class="first-btn">Read more</a>
                    <a href="port.php" class="second-btn">view projects</a>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="imgs/3.jpg" style="width:100%">
            <div class="inner-back-text">
                <h1>Construction Services <br>
                    <span>Creative & Professional</span>
                </h1>
                <br>
                <div class="inner-back-btn">
                    <a href="#welcome" class="first-btn">Read more</a>
                    <a href="port.php" class="second-btn">view projects</a>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="imgs/01-P80A4821-HDR.jpg" style="width:100%">
            <div class="inner-back-text">
                <h1>Construction Services <br>
                    <span>Creative & Professional</span>
                </h1>
                <br>
                <div class="inner-back-btn">
                    <a href="#welcome" class="first-btn">Read more</a>
                    <a href="port.php" class="second-btn">view projects</a>
                </div>
            </div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <!-- <div class="background-image">
        
    </div>
    <div class="inner-back-text">
        <h1>Construction Services <br>
            <span>Creative & Professional</span>
        </h1>
        <br>
        <div class="inner-back-btn">
            <a href="#welcome" class="first-btn">Read more</a>
            <a href="/port.html" class="second-btn">view projects</a>
        </div>
    </div> -->

    <!-- welcome  -->


    <div class="welcome" id="welcome">
        <div class="main-welcome">
            <div class="inner-welcome">
                <div class="welcome-text">
                    <h1>welcome to our company</h1>
                    <p>Step into the world where imagination meets precision, and design seamlessly blends with
                        functionality. At ArchiCraft Engineering, we are more than just architects and engineers – we
                        are visionaries crafting the future. Our commitment to excellence and innovation is the
                        cornerstone of every project we undertake. Whether you are embarking on a new construction
                        venture or seeking to transform existing spaces, join us on a journey where architectural
                        marvels come to life. Explore the endless possibilities, where every detail is a stroke of
                        artistry, and every structure tells a unique story. Welcome to a realm where archi-craft meets
                        engineering prowess.</p>
                    <div class="movbtns">
                        <a href="#why" class="first-btn">read more</a>
                        <a href="details.php" class="second-btn">explore our gallery</a>
                    </div>
                </div>
            </div>
            <div class="inner-welcome">
                <img src="imgs/side images.png" alt="">
            </div>


        </div>
    </div>


    <!-- Why us -->

    <section class="why" id="why">
        <div class="left">
            <h4>WHY CHOOSE US! </h4>
            <h1>Why You Should Trust Us? </h1>
            <h1> Learn More About Us!
            </h1>
            <p> Discover the Archicraft engineering difference.
                Our commitment to excellence and customer satisfaction sets us apart </p>
            <div class="feature">
                <img src="imgs/icon-2.png" alt="icon">
                <div class="description">
                    <h3>Design Approach </h3>
                    <p>Our design approach is centered around creating solutions that stand the test of time. </p>
                </div>
            </div>
            <div class="feature">
                <img src="imgs/icon-3.png" alt="icon">
                <div class="description">
                    <h3>Innovative Solutions </h3>
                    <p>
                        We thrive on innovation,
                        providing cutting-edge solutions tailored
                        to your unique needs.
                    </p>
                </div>
            </div>
            <div class="feature">
                <img src="imgs/icon-4.png" alt="icon">
                <div class="description">
                    <h3>Project Management
                    </h3>
                    <p>Efficiency and precision define our project management style</p>
                </div>
            </div>
        </div>
        <div class="right">
            <!-- <img src="imgs/about-1.jpg" alt="img" class="img1" >
            <img src="imgs/about-2.jpg" alt="img"  class="img2"> -->
        </div>
    </section>


    <!-- Why us end -->


    <!-- reviews  -->
    <?php include 'reviews.php'; ?>

    <section class="reviews" id="reviews">
        <h1 class="title">TESTIMONIALS</h1>
        <div class="box-container">
            <?php
            // Use the function to get reviews
            $reviews = getReviews();

            // Display reviews
            foreach ($reviews as $review) {
                echo '
        <div class="box">
            <img src="' . $review["image_path"] . '" alt="">
            <p>' . $review["content"] . '</p>
            <div class="stars">
                ' . generateStars($review["rating"]) . '
            </div>
            <h3>' . $review["name"] . '</h3>
        </div>';
            }
            ?>
        </div>
    </section>

    <!-- our team -->
    <?php include 'team.php'; ?>

    <section id="team" class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>TEAM MEMBERS</h2>
                        <h4>We Are Creative Archicraft Team For Your Dream Design</h4>
                    </div>
                </div>
            </div>
            <div class="row team-items">
                <?php
                // Use the function to get team members
                $teamMembers = getTeamMembers();

                // Display team members
                foreach ($teamMembers as $row) {
                    echo '
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="' . $row["image_path"] . '" alt="' . $row["name"] . '">
                                <div class="overlay">
                                    <h4>' . $row["name"] . '</h4>
                                    <p>' . $row["description"] . '</p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li class="vimeo"><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message"><a href="#"><i class="fas fa-envelope-open"></i></a></span>
                                <h4>' . $row["name"] . '</h4>
                                <span>' . $row["role"] . '</span>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- about  -->

    <div class="back-image">

        <div class="inner-back-text">
            <!-- <h1>ABOUT US </h1> -->
            <br>
        </div>
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


    <script src="index.js"></script>
</body>

</html>