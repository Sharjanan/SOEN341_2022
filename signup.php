<?php include "header.php";?>
<link rel ="stylesheet" href = "css/login.css">
<section class="login_page">

<div class="login_box">
    <form id="login_form">
        <h3><b>Signup</b></h3>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password">
        <label for="password">Confirm Password:</label><br>
        <input type="text" id="password" name="password">
        
        <div class="center">
            <input type="submit" name="submit" value="SIGNUP" class="login_button">
        </div>
        
    </form><br>

    <!-- <button type="submit" form="login_form" value="Submit" class="login_button">LOGIN</button> -->
</div>

<?php include "footer.php";?>
 