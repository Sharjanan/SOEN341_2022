<?php include "header.php";?>
<link rel="stylesheet" href="./css/login.css">
<section class="login_page">

<div class="login_box">
    <form id="login_form" name="f1" onsubmit = "return validation()" method = "POST" action = "authentication.php">
        <h3><b>LOGIN</b></h3>
         <!-- username -->
        <label for="username">username:</label><br>
        <input type="text" id="username" name="username"><br>
        <!-- password -->
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password">

        <input type="checkbox" id="remember" name="remember" value="Remember me? ">
        <label for="remember"> Remember me?</label><br><br>

        <!-- choice for user type -->
        <input type="radio" id="user" name="user_type" value="user">
        <label for="user">User</label>
        <input type="radio" id="provider" name="user_type" value="provider">
        <label for="provider">Provider</label>
        <input type="radio" id="supervisor" name="user_type" value="supervisor">
        <label for="supervisor">Supervisor</label><br><br>

        <div class="center">
            <input type="submit" name="submit" value="LOGIN" class="login_button">
        </div>
        <p>
           Need an account? <a href = "signup.php"> <u>SIGN UP</u></a>
        </p>
    </form><br>
    <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                var user_rad=document.f1.user.value;  
                var provider_rad=document.f1.provider.value; 
                var supervisor_rad=document.f1.supervisor.value;
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");    
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }     
                }   
                var getSelectedValue = document.querySelector( 'input[name="user_type"]:checked');   
                    if(getSelectedValue != null) {   
                      alert("Radio button is selected");  
                    else {  
                      alert("Nothing has been selected");  
                       return false;  
                    }
                        }
                             
            }  
    </script>  
    <!-- <button type="submit" form="login_form" value="Submit" class="login_button">LOGIN</button> -->
</div>

</section>
<?php include "footer.php";?>