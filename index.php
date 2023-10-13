<?php
session_start();

$style = "";
$style2 = "";
$style3 = "";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
//       echo '<script>alert("logat");</script>';
    $style = "style='display:none;'";
    $style2 = "style='display:inline-block;'";
    if($_SESSION["email"]=="admin@admin"){
        $style3 = "style='display:inline-block;'";
    }else{
        $style3 = "style='display:none;'";
    }
} else {
    $style = "style='display:inline-block;'";
    $style2 = "style='display:none;'";
     $style3 = "style='display:none;'";

}

require_once ('db/CreateDb.php');
$database = new CreateDb("WebProject", "products");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="index_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <meta http-equiv="Cache-control" content="no-cache">
    <script src="index.js"></script>

</head>

<body>


    <header class="header">
        <nav>
            <a href="index.html">
                <img src="assets/images/logo.png" alt="logo image">
            </a>
            <div class="nav-links">
                <ul>
                    <li><a href="pages_html/about.php">ABOUT</a></li>
                   <!-- <li><a href="pages_html/blog.html">BLOG</a></li> -->
                    <li><a href="pages_html/shop.php">SHOP</a></li>
                    <li><a href="pages_html/contact.php">CONTACT</a></li>
                    <li <?php echo $style;?>><a href="pages_html/signin.html">SIGN IN</a></li>
                    <li <?php echo $style2;?>><a href="logout2.php">LOG OUT</a></li>
                    <li <?php echo $style3;?>><a href="pages_html/admin.php">ADMIN DASHBOARD</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <!-- The video -->
        <video autoplay muted loop class="heroVideo">
            <source src="assets/videos/var1.mp4" type="video/mp4">
        </video>

        <div class="text-box">
            <h1>Moments that matter</h1>
            <p><b>Embark in our world to see the life as a story on colors</b></p>
            <button class="hero-button" onclick="scrollToNextSection()">Paint your story</button>
        </div>
    </section>


    <section id="next-section" class="products-slideshow">
        <div class="prod-container">
            <h2>A team of creative people</h2>
            <p>Our products are uniquely created by a hand of creative, passioned and talented people </p>
        </div>
        <div class="carousel">
          <div class="carousel-images">
            <img src="assets/images/s1.jpg" alt="Image 1">
            <img src="assets/images/s2.jpg" alt="Image 2">
            <img src="assets/images/s3.jpeg" alt="Image 3">
            <img src="assets/images/s4.jpg" alt="Image 4">
            <img src="assets/images/s5.jfif" alt="Image 5">
            <img src="assets/images/s6.jpg" alt="Image 6">
          </div>
          <div class="carousel-prev"><</div>
          <div class="carousel-next">></div>
        </div>


    </section>

    <section class="art-types">
        <h1>Some creation types</h1>
        <p>We offer vast techniques for our products to best fits your story</p>

        <div class="offer_img_container">
            <div class="type">
                <img src="assets/images/mini_canvas.jpg" alt="mini-canvas">
                <div class="top-layer">
                    <h3>MINI CANVAS</h3>
                </div>
            </div>

            <div class="type">
                <img src="assets/images/illustration.jpg" alt="illustration">
                <div class="top-layer">
                    <h3>ILLUSTRATION</h3>
                </div>
            </div>

            <div class="type">
                <img src="assets/images/wooden_paint.jpg" alt="painted wood">
                <div class="top-layer">
                    <h3>PAINTED WOOD</h3>
                </div>
            </div>
        </div>

    </section>




</body>

<footer>
    <div class="footer">
        <div class="row">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="row">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Career</a></li>
            </ul>
        </div>

        <div class="row">
            INFERNO Copyright © 2021 Inferno - All rights reserved || Designed By: Mahesh
        </div>
    </div>
</footer>
</html>