<?php

require_once ("../php/components.php");
require_once ("../db/DbConnection.php");
$database = new DbConnection("webproject");

if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME = $_POST['name_update'];
    $PRICE = $_POST['price_update'];
    $IMAGE = $_POST['image_update'];
    $DESCRIPTION = $_POST['description_update'];

    $database->updateProduct($ID, $NAME, $PRICE, $IMAGE, $DESCRIPTION);
    echo '<script>alert("Product have been updated"); window.location.href = "admin.php";</script>';

}
?>