<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTiT</title>
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="signupstyle.css">
</head>
<body>
    <header>
        <?php
            require 'header.php';
        ?>
    </header>
<section>
<div class="section-inside">
    <form action="includes/signup.inc.php" method="post">
        <h2>Hostit</h2>
        <?php
                if(isset($_GET["error"])){
                    if($_GET['error'] == "emptyfields"){
                        echo'<p class="signuperror">Fill in all fields!</p>';
                    }else if($_GET["error"] == "usertaken"){
                        echo'<p class="signuperror">Username aldready registered.</p>';

                    }else if($_GET["error"] == "invalidmail"){
                        echo'<p class="signuperror">Username aldready registered</p>';

                    }
                    else if($_GET["error"] == "invaliduid"){
                        echo'<p class="signuperror">Invalid username.</p>';

                    }
                    else if($_GET["error"] == "invalidmail"){
                        echo'<p class="signuperror">Invalid mail.</p>';

                    }
                    else if($_GET["error"] == "invalidmailuid"){
                        echo'<p class="signuperror">Invalid username or mail.</p>';

                    }
                    else if($_GET["error"] == "passworddonotmatch"){
                        echo'<p class="signuperror">Password do not match.</p>';

                    }
                    else if($_GET["error"] == "sqlerror"){
                        echo'<p class="signuperror">Database error.</p>';

                    }
                    else if($_GET["signup"] == "success"){
                    echo'<p class="signupsuccess">Signed in successfully.</p>';
                    }else{
                        echo'<p class="signuperror">Database error.</p>';

                    }
                }
                ?>
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="number" name="phone" placeholder="Phone Number">
        <input type="password" name="pwd" placeholder="Password..">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password..">
        <input type="submit" name="signup-submit" value="Sign up">  
    </form>
        <div class="inbetween">
            <hr> <p>or</p>  <hr>
        </div>
        <div class="loginwithfb">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>login with facebook</a>
        <a href="#">forgot password?</a>
        </div>
    </div>
    <div class="section-bottom">
        <p>Have an account? <a href="login.php">Login.</a></p>
    </div>
    <div class="section-footer">
        <p>Get the app</p>
        <img src="img/applink.png">
    </div>

    
</section>
    <footer>
        <?php

            require 'footer.php';
        ?>
    </footer>

</body>
</html>