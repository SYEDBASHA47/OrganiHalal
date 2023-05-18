<?php 
include_once 'C:\Users\HP\Desktop\meat-main\meat-shop-main\scss\signup.php';
include_once  'C:\Users\HP\Desktop\meat-main\meat-shop-main\login.php'; 
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
 
          <?php
          $signup=false;
          if((isset ($_POST['username'])) and isset($_POST['mail']) and isset($_POST['password']) ){
            $username=$_POST['username'];
            $mail=$_POST['mail'];
            $password=$_POST['password'];
            $error=user::signup($username,$mail,$password);
            $signup=true;
          }

            else{ ?>
            <div class="container">
            <div class="forms-container">
              <div class="signin-signup">
                <form action="index.html" class="sign-in-form">
                  <h2 class="title">Sign In</h2>
                  <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" />
                  </div>
                  <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                  </div>
                  <input type="submit" value="Login" class="btn solid" />
      
                </form>

          


          <form action="index.html" class="sign-up-form" method= POST>
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="mail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Sign Up" class="btn solid" />
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>register to our site and explore our collection of meat</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="./img/log.png" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Login to take your cart inside</p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="./img/register.png" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="./app.js"></script>
  </body><?php }?>
</html>
