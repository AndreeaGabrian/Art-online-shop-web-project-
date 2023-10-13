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
    <meta charset="UTF-8" name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta http-equiv="Cache-control" content="no-cache">

     <!--JQuery-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>



<script>
$(document).ready(function() {
  // Show the popup when the user clicks on the image
  $('.card-image').click(function() {
    // Get the image source
    var imgSrc = $(this).attr('src');

    // Update the popup image source and show the popup
    $('.popup-content img').attr('src', imgSrc);
    $('.popup-overlay').show();
  });

  // Hide the popup when the user clicks on the close button
  $('.close-popup').click(function() {
    $('.popup-overlay').hide();
  });
});

</script>

<body>
<!--------------------------------------header-------------------------------------->
<header class="header">
    <nav>
        <a href="../index.php">
            <img src="../assets/images/logo.png" alt="logo image">
        </a>
        <div class="nav-links">
            <ul>
                <li><a href="about.php">ABOUT</a></li>
                <!--<li><a href="blog.html">BLOG</a></li>-->
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li <?php echo $style;?>><a href="signin.html">SIGN IN</a></li>
                <li <?php echo $style2;?>><a href="logout.php">LOG OUT</a></li>
                <li <?php echo $style3;?>><a href="admin.php">ADMIN DASHBOARD</a></li>
            </ul>
        </div>
    </nav>
</header>

<!--------------------------------------end header-------------------------------------->
    <section class="search-area-products">
        <div class="rectangle"></div>
        <p class="shop-title"><b>Available right now</b></p>
    </section>

<?php
require_once ("../php/components.php");
require_once ("../db/DbConnection.php");

$database = new DbConnection("webproject")

?>
<div class="row">
        <?php
                $result = $database->getData("products");
        while ($row = mysqli_fetch_assoc($result)){
        shop_item_component($row['product_name'], $row['product_price'], $row['product_image'],$row['product_description'], $row['id']);
        }
        ?>
</div>

</body>

<!--------------------------------------footer-------------------------------------->
<footer>
    <div class="footer">
        <div class="rowf">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="rowf">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Career</a></li>
            </ul>
        </div>

        <div class="rowf">
            INFERNO Copyright © 2021 Inferno - All rights reserved || Designed By: Mahesh
        </div>
    </div>
</footer>
</html>

