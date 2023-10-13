<?php

require_once ("../php/components.php");
require_once ("../db/DbConnection.php");
$database = new DbConnection("webproject");

$ID = $_GET['Id'];
$result = $database->deleteProduct($ID);
echo '<script>alert("Product have been deleted"); window.location.href = "admin.php";</script>';
