<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$dbname = "shoppingcart";
$conn = new  mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ".connect_error);
}


?>