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
    <title>DasboardAdmin</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta http-equiv="Cache-control" content="no-cache">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script type="text/javascript">
       $(document).ready(function(){
           $('#myTableHeader tr:eq(1) th:lt(3)').css('cursor', 'pointer');
           $('#myTableHeader tr:eq(1) th:lt(3)').click(function(){
               console.log('Header clicked!');
               var table = $(this).parents('table').eq(0);
               var rows = table.find('tr:gt(1)').toArray().sort(compare($(this).index()));
               this.asc = !this.asc;
               if (!this.asc){rows = rows.reverse()}
               for (var i = 0; i < rows.length; i++){table.append(rows[i])}

//                $(this).siblings().find('.sort-icon').removeClass('asc desc');
                 // Update sorting arrow icon for clicked header
                 var arrow = this.asc ? 'asc' : 'desc';
                 $(this).find('.sort-icon').removeClass('asc desc').addClass(arrow);
           });
       });

       function compare(index) {
           return function(a, b) {
               var valA = getCellValue(a, index), valB = getCellValue(b, index);
               return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB);
           }
       }

       function getCellValue(row, index){ return $(row).children('td').eq(index).text(); }
   </script>

</head>

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
                <!-- <li><a href="blog.html">BLOG</a></li> -->
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li <?php echo $style;?>><a href="signin.html">SIGN IN</a></li>
                <li <?php echo $style2;?>><a href="logout.php">LOG OUT</a></li>
                <li <?php echo $style3;?>><a href="admin.php">ADMIN DASHBOARD</a></li>
            </ul>
        </div>
    </nav>
</header>

<!--------------------------------------body-------------------------------------->

<div class="rectangle"></div>
<br>
<br>
<br>
<p>
Add a new product in the shop
</p>
        <center>
        <div class="main">

        <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <label for="">Product name:</label>
        <input type="text" name="product_name"><br>
        <label for="">Price:</label>
        <input type="text" name="product_price" id=""><br>
        <label for="">Description:</label>
        <input type="text" name="product_description"><br>
        <label for="">Image url:</label>
        <input type="text" name="product_image" id=""><br>
        <button type="submit" name="upload">Add product</button>

        </form>
    </div>
    <br>
<br>
<br>
<br>
        </center>
<div class="rectangle"></div>
<br>
<br>
<p>
All products in shop right now
</p>

<br>
<p>Type something in the input field to search the table</p>
<input id="myInput" type="text" placeholder="Search..">
<br><br>
<p>
You can sort the table by product name, description or price
</p>

 <!-- fetch data -->

        <div class="container">

        <table class="table">
  <thead id="myTableHeader">
    <tr>
        <th colspan="4">Product info</th>
        <th colspan="2">Product action</th>
    </tr>
    <tr>
      <!-- <th scope="col">Id</th> -->
      <th scope="col">Product name <span class="sort-icon"></span></th>
      <th scope="col">Description <span class="sort-icon"></span></th>
      <th scope="col">Price <span class="sort-icon"></span></th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>

    </tr>
  </thead>
  <tbody id="myTable">
  <?php
         require_once ("../php/components.php");
         require_once ("../db/DbConnection.php");

             $database = new DbConnection("webproject");
             $result = $database->getData("products");
             while ($row = mysqli_fetch_assoc($result)){
          echo "
              <tr>
                  <td>$row[product_name]</td>
                  <td>$row[product_description]</td>
                  <td>$row[product_price] RON</td>
                  <td><img src='$row[product_image]'  width = '200px'  height = '160px'></td>
                  <td><a href='delete.php? Id= $row[id]' class = 'btn-custom'>Delete</a></td>
                  <td><a href='update.php? Id= $row[id]' class = 'btn-custom'>Update</a></td>
                  <td></td>

              </tr>
              ";
          }
          ?>

    </tbody>
  </table>
  </div>

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
