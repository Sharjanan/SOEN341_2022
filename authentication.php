<?php
require_once "config.php";

$username = $_POST['username'];  
$password = $_POST['password'];  
$user_type= $_POST['user_type'];  



       //to prevent from mysqli injection  
       $username = stripcslashes($username);  
       $password = stripcslashes($password);  
       $username = mysqli_real_escape_string($link, $username);  
       $password = mysqli_real_escape_string($link, $password);  
     
       $sql = "SELECT * FROM users where username = '$username' and password = '$password' and user_type='$user_type'";  
       $result = mysqli_query($link, $sql);  
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result); 
       if($count == 1){  
        header('location:'.$user_type.'.php');  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }      
       
?>
