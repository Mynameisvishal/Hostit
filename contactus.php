<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTiT</title>
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="contactusstyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <header>
        <?php
            require 'header.php';
        ?>
    </header>
<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab repudiandae sed minus magnam voluptate, nemo repellendus fugiat excepturi eligendi. Doloribus?</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Dubai,Dubai mainroad, Dubai subroad,Dubai.</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+91-----08960</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h3>Email</h3>
                    <p>--------aka---@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form action="includes/contactus.inc.php" method="post">
                <h2>Send Message</h2>
                <?php
                if(isset($_GET["error"])){
                    if($_GET['error'] == "emptyfields"){
                        echo'<p class="signuperror">Fill in all fields!</p>';
                    }else if($_GET["error"] == "invalidmail"){
                        echo'<p class="signuperror">Enter a vaild mail</p>';

                    }
                    else if($_GET["error"] == "invaliduid"){
                        echo'<p class="signuperror">Invalid username.</p>';

                    }
                    else if($_GET["error"] == "invalidmailuid"){
                        echo'<p class="signuperror">Invalid username and mail.</p>';

                    }
                    else if($_GET["error"] == "sqlerror"){
                        echo'<p class="signuperror">Database error.</p>';

                    }else if($_GET["signup"] == "success"){
                    echo'<p class="signupsuccess">Signed in successfully.</p>';
                    }else{
                        echo'<p class="signuperror">Database error.</p>';

                    }
                }
                if(isset($_GET["signup"])){
                    if($_GET["signup"] == "success"){
                    echo'<p class="signupsuccess">Comment delivered!.</p>';
                    }else{
                        echo'<p class="signuperror">Database error.</p>';

                    }
                }
                ?>
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="comment" id="" maxlength="255" cols="30" rows="10" required="required"></textarea>
                    <span>Type your message.(max 255 characters)</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="contactus" value="send" required="required">
                </div>
            </form>
        </div>
    </div>

</section>
    <footer>
        <?php

            require 'footer.php';
        ?>
    </footer>

</body>
</html>