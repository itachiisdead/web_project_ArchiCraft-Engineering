<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
    <title>ArchiCraft</title>
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
                    <li><a href="login.php" class="user">
                            <i class="fa-solid fa-user "></i>
                        </a></li>
                </ul>
            </nav>
            <i id="ham" class="fa-solid fa-bars hamburger"></i>
        </header>
    </div>


    <div class="inner-back-text">
        <h1>Contact Us </h1>


    </div>
    </div>

    <div class="main-div">
        <section class="contact-img">
            <img src="imgs/contact-us.gif" alt="img" class="img">
        </section>
        
        <section class="contact-form">
            <h2>Contact Us</h2>
            <form method="post" action="contact-form.php">
                <div>
                    <label for=" first-name">First Name</label>
                    <input required type="text" name="first-name" placeholder="John" id="first-name">
                </div>
                <div>
                    <label for="last-name">Last Name</label>
                    <input required type="text" name="last-name" placeholder="Joe" id="last-name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input required type="e-mail" name="email" placeholder="John@gmail.com" id="email">
                </div>
                <div>
                    <label for="project">Project Name</label>
                    <input type="text" name="project-name" id="project">
                </div>
                <div>
                    <label for="details">Project Details</label>
                    <textarea name="details" id="details"></textarea>
                </div>
                <div>
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment"></textarea>
                </div>
                <button class="btn" type="submit">submit</button>
            </form>
        </section>
    </div>


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