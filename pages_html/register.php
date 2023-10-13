<?php
require_once ("../db/DbConnection.php");

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$county = $_POST["county"];
$city = $_POST["city"];
$psw = $_POST["psw"];

$database = new DbConnection("webproject");

// check if user exists (there are not allowed duplicate emails)
$result = $database->getUser($email);
if (!is_null($result)){
    echo "Userul exista";
    echo '<script>alert("Email already exists. Please sign in or use a different email."); window.location.href = "register.html";</script>';

}else{

    $result = $database->insertUser("users", $email, $psw, $fname, $lname, $county, $city);
    echo '<script>alert("You have been registered. Now, please sign in"); window.location.href = "register.html";</script>';
    header('location: signin.html')

}

