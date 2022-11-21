<?php
$servername = "localhost";
$username = "root";
$password = "";
//for later
$db= "";


// Create connection
$link = new mysqli($servername, $username, $password);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
echo "Connected successfully";


?>