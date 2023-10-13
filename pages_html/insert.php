<?php

require_once ("../php/components.php");
require_once ("../db/DbConnection.php");
$database = new DbConnection("webproject");

$name=$_POST["product_name"];
$price=$_POST["product_price"];
$description=$_POST["product_description"];
$image=$_POST["product_image"];

$result = $database->insertItem("products", $name, $price, $image, $description);

echo '<script>alert("Product have been added"); window.location.href = "admin.php";</script>';

