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
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<script src="about.js"></script>

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

<!------------------------------------------------------body--------------------------------------------->
</body>
<section class="section-1">
    <div class="rectangle1-1"></div>
    <div class="rectangle1-2"></div>
    <p class="p1">About us</p>
    <p class="p2">We are a handful of people who wants to put the life into colors and shapes</p>
    <p class="p3">Our goal is to capture the unique moments and feelings into beautiful artworks</p>
    <p class="p4">How it works? Tell us your story you want to preserve and we'll put it into a life-lasting art piece</p>
    <p class="p5">Or browse our store and choose whatever fits your needs best</p>
    <p class="p6">Each emotion</p>
    <p class="p7">Each connection</p>
    <div class="square1-1"></div>
    <img class="img1-1" src="../assets/images/flower.jpg" alt="flower image">
</section>

<section class="section-2">
    <div class="square2-1"></div>
    <img class="img2-1" src="../assets/images/hands_heart.jfif" alt="hands image">
</section>

<section class="section-3">
    <div class="square3-1"></div>
    <img class="img3-1" src="../assets/images/puzzle.jpeg" alt="puzzle image">
    </section>

<section class="section-4">
    <div class="square4-1"></div>
    <img class="img4-1" src="../assets/images/people_bike1.jfif" alt="bike image">
    <p class="p8">Each adventure</p>
    <p class="p9">Our selection of art pieces includes both original works and high-quality reproductions, so you can choose the option that best suits your needs and preferences.</p>
    <p class="p10">We use only the finest materials and techniques to ensure that each piece of art you receive is of the highest quality and will stand the test of time.
        <br>We believe that art is not just something to be admired, but also something to be experienced and felt.</br></p>

    <img class="img4-2" src="../assets/images/running.jfif" alt="running image">
    <p class="p11">Each wonderful moment</p>
    <img class="img4-3" src="../assets/images/dad_child.jfif" alt="dad-child image">
    <p class="p12">Each success</p>
    <div class="rectangle4-1"></div>
    <div class="rectangle4-2"></div>
    <p class="p16">At our shop, we are passionate about art and believe that it has the power to inspire, uplift, and transform. We hope that our collection of art pieces will bring joy and beauty into your life, and that you will find something that speaks to your heart and soul</p>
    <img class="img4-4" src="../assets/images/people2.jfif" alt="people image">
    <p class="p17">Art has a unique ability to evoke memories and emotions that are deeply personal and meaningful to each individual.
        A painting or illustration can transport us back to a particular moment in time, reminding us of people, places, and experiences that have shaped us into who we are today.
        It can also serve as a visual representation of our own inner worlds, expressing our thoughts, feelings, and perspectives in a way that words alone cannot.</p>
    <p class="p13">Each picture</p>
    <p class="p14">that leads to ...</p>
    <div class="rectangle4-3"></div>
    <div class="rectangle4-4"></div>
    <img class="img4-5" src="../assets/images/old.jfif" alt="old image">
    <p class="p15">A life full of memories</p>
</section>


<section class="section-5">
    <p class="p-list"><b>Classification by techniques</b></p>
    <div class="list-container">
    <ul class="prod-nested-list">
        <ul>
        <li>Painted pieces
            <ul>
                <li>Mini canvas</li>
                <li>Greetings</li>
                <li>Bags</li>
                <li>Wood shapes</li>
            </ul>
        </li>
        <li>Stickers</li>
        </ul>

        <ul id="hide" style="display: none">
        <li>Ink illustrations
            <ul>
                <li>Posters</li>
                <li>Greetings</li>
                <li>Bookmarks</li>
                <li>Wood shapes</li>
            </ul>
        </li>

        <li >Jewelry made with
            <ul>
                <li>Wood</li>
                <li>Dried flowers</li>
                <li>Raisin</li>
                <li>Air dry clay</li>
            </ul>
        </li>
        <li>Pottery</li>
        </ul>
    </ul>
    <button class="view-more-btn" id="btn-list" onclick="showItems()">View more</button>
    </div>

    <p class="p-offer-1"><b>Products you can get</b></p>
    <p class="p-offer-2">Our art pieces differ by many aspects, so you could see a brief classification by occasion and techniques</p>

    <table class="occasion-table-ext" border="1" bordercolor="black">
        <tr>
            <th>Product types</th>
            <th colspan="2">Occasion</th>
        </tr>
        <tr>
            <td>Custom orders</td>
            <td>
                <table class="occasion-table-int" border="2" bordercolor="blue">
                    <tr>
                        <td>Birthdays</td>
                        <td>Anniversaries</td>
                    </tr>
                    <tr>
                        <td> Graduations</td>
                        <td> Special events</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td> Available in shop </td>
            <td> Diverse </td>
        </tr>
    </table>

</section>


<!------------------------------------------------------footer--------------------------------------------->
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