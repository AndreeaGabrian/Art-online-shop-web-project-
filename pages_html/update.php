<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>


<?php

require_once ("../php/components.php");
require_once ("../db/DbConnection.php");
$database = new DbConnection("webproject");

$ID = $_GET['Id'];
$Record = $database->getProductById($ID);
$data = mysqli_fetch_array($Record);

?>

<br>
<br>
<center>
        <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
        <label for="">Product name:</label>
        <input type="text" value="<?php echo $data['product_name'] ?>" name="name_update"><br>
        <label for="">Product price :</label>
        <input type="text" value="<?php echo $data['product_price'] ?>" name="price_update" id=""><br>
        <label for="">Product description:</label>
        <input type="text" value="<?php echo $data['product_description'] ?>" name="description_update"><br>
        <label for="">Image url:</label>
        <td><input type="text" name="image_update" value="<?php echo $data['product_image'] ?>"> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $data['id'] ?>">
        <button type="submit" name="update" class = 'btn-custom'>Update</button>

        </form>
    </div>
        </center>




    </body>
</html>