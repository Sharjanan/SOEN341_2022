<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
        <head>
        <title>Soen project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css">
        </head>
    <body>

<!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card" id="myNavbar">
                <a href="index.html" class="w3-bar-item w3-button w3-wide">LOGO</a>
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">

                <a href="product.php" class="w3-bar-item w3-button">PRODUCT</a>
                <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
                <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
                <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
                <a href="login.php" class="w3-bar-item w3-button">Sign in</a>
                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

<!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
        <a href="login.html" onclick="w3_close()" class="w3-bar-item w3-button">Sign in</a>
        </nav>
    </body>

<!-- </html in footer -->

