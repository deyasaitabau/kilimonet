<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kilimonet";
// Create connection
$conn = mysqli_connect($servername, $username, $password , $dbname);

// Check connection
if (!$conn){

    die();

}
?> 