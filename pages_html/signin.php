<?php

session_start();
require_once("../db/DbConnection.php");

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {


}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "aa";
    $email = $_POST["email"];
    $password = $_POST["psw"];

    $database = new DbConnection("webproject");
    $result = $database->getUser($email);


    if (!is_null($result)){
        $result2 = mysqli_fetch_assoc($result);

        if($password == $result2["psw"]) {

            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            echo '<script>alert("Successfully signed in"); window.location.href = "signin.html";</script>';
            header("location: ../index.php");
        }
        else{
        echo '<script>alert("Wrong password"); window.location.href = "signin.html";</script>';
        }

    } else {
        $login_err = "Invalid email or password";
        echo '<script>alert("Invalid email. If you do not have an account go to register"); window.location.href = "signin.html";</script>';


    }
}
