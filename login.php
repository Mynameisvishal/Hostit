<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTiT</title>
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <header>
        <?php
            require 'header.php';
        ?>
    </header>
<section>
    <div class="section-inside">
        <form class="form-1" action="includes/login.inc.php" method="POST">
            
            <h2>Hostit</h2>
            <?php
                if(isset($_GET["error"])){
                    if($_GET['error'] == "emptyfields"){
                        echo'<p class="signuperror">Fill in all fields!</p>';
                    }else if($_GET["error"] == "usertaken"){
                        echo'<p class="signuperror">Username aldready registered.</p>';

                    }else if($_GET["error"] == "wrongpassword"){
                        echo'<p class="signuperror">Wrong password</p>';

                    }else if($_GET["error"] == "sqlerror"){
                        echo'<p class="signuperror">Database error.</p>';

                    }else{
                        echo'';

                    }
                }
                ?>
            <input type="text" name="mailuid" placeholder="Username/E-mail..">
            <input type="password" name="pwd" placeholder="Password..">
            <input type="submit" name="logout-button" value="log in">
        
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
        <p>Don't have an account? <a href="signup.php">signup.</a></p>
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