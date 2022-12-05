<?php include "header.php";?>
<link rel="stylesheet" href="./css/login.css">
<section class="login_page">

<div class="login_box">
    <form id="login_form">
        <h3><b>LOGIN</b></h3>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password">
        <input type="checkbox" id="remember" name="remember" value="Remember me? ">
        <label for="remember"> Remember me?</label><br><br>
        <!-- choice for user type -->
        <input type="radio" id="user" name="user_type" value="USER">
        <label for="user">User</label>
        <input type="radio" id="admin" name="user_type" value="ADMIN">
        <label for="admin">Admin</label>
        <input type="radio" id="supervisor" name="user_type" value="SUPERVISOR">
        <label for="supervisor">Supervisor</label><br><br>

        <div class="center">
            <input type="submit" name="submit" value="LOGIN" class="login_button">
        </div>
        <p>
           Need an account? <a href = "#signup"> <u>SIGN UP</u></a>
        </p>
    </form><br>

    <!-- <button type="submit" form="login_form" value="Submit" class="login_button">LOGIN</button> -->
</div>

</section>
<?php include "footer.php";?>
