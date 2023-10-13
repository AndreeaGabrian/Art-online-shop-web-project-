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
    echo "Please sign in first to see this page.";
    header("Location: signin.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header class="header">
    <nav>
        <a href="../index.php">
            <img src="../assets/images/logo.png" alt="logo image">
        </a>
        <div class="nav-links">
            <ul>
                <li><a href="about.php">ABOUT</a></li>
<!--                <li><a href="blog.html">BLOG</a></li>-->
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="contact.php">CONTACT</a></li>
               <li <?php echo $style;?>><a href="signin.html">SIGN IN</a></li>
               <li <?php echo $style2;?>><a href="logout.php">LOG OUT</a></li>
               <li <?php echo $style3;?>><a href="admin.php">ADMIN DASHBOARD</a></li>
            </ul>
        </div>
    </nav>
</header>


<!-------------------------------form-------------------->
<section class="form-section">
<!--    <div class="main-container">-->
        <div class="left-container">
            <ul class="left-side-ul">
                <li>We have online client support service for our clients or you can contact us by phone. Ready to know how we can help you?</li>
                <li><b>Monday-Thursday:</b> 8:00 - 20:00</li>
                <li><b>Friday:</b> 8:00 - 15:00</li>
                <li><b>Saturday:</b> 10:00 - 14:00</li>
            </ul>

        </div>
        <div class="left-info">
            <ul class="left-side-ul">
                <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@demo.com</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+91 11 1111 2900</li>

            </ul>
        </div>
        <div class="container">
            <form id="contact" action="" method="post">
                <h3><b>CONTACT US</b></h3>
                <h4>Drop us a line, and we'll be in touch.</h4>
                <fieldset>
                    <input placeholder="First Name*" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Last Name*" type="text" tabindex="2" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Company" type="text" tabindex="3">
                </fieldset>
                <fieldset>
                    <input placeholder="Phone Number" type="tel" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address*" type="email" tabindex="5" required>
                </fieldset>
                <fieldset >
                    <input id="subject-field" placeholder="Message" type="tel" tabindex="6" required >
                </fieldset>
                <h4><i>*Indicates a required field</i></h4>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>


</section>


</body>


<!---------------------------footer------------------->
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