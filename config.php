<?php
$servername = "localhost";
$username = "root";
$password = "";
//for later
$db= "soen341_2022";


// Create connection
$link = new mysqli($servername, $username, $password,$db);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}


?>