<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="headerstyle.css">
    <link rel="" href="">
    <script type="text/javascript" href="headerjs.js"></script>
    <title></title>
</head>
<body>

<header>
    <nav>   
        <div class="nav-1">
            <div class="nav-11">  
            <a href="index.php"><img src="img/aj-logo-sample.jpg" width="50px" height="47px"></a>
            <a href="index.php"><p>HOSTiT</p></a>
            </div>
            <button id="viewmore" href=""><i id="min-bar" class="fa fa-bars"></i></button>

        </div>
        <div class="nav-2">
            <!-- <a href="#" class="nobg">DOWNLOAD APP</a> -->
            <!-- <form class="form-1" action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form> -->
            <a href="index.php">PLAY</a> 
            <a href="watch.php">WAtch</a> 
            <a href="contactus.php">Contact us</a> 
             
            <?php
            if(isset( $_SESSION['username'])){
                echo'<form class="form-logout" action="includes/logout.inc.php" method="post">
                <input type="submit" name="logout-submit" value="Logout"></form>';

            }else{
                echo' <a href="login.php" class="bggreen">login</a> 
                <a href="signup.php" class="bgred">SIGNUP</a>';

            }
            ?>
        </div>

    </nav>

</header>
<script>
function myFunction(x) {
        if (!x.matches) { // If media query matches
            document.querySelector(".nav-2").setAttribute('style', 'display:flex');
        }
    }

    var x = window.matchMedia("(max-width: 730px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
    //event
    document.getElementById("viewmore").addEventListener("click", displayrows);
    var count = 2;
    function displayrows()
    {
        
        if(count % 2 == 0) {
            document.querySelector(".nav-2").setAttribute('style', 'display:flex');
            count++;
        } else {
            document.querySelector(".nav-2").setAttribute('style', 'display:none');
            count++;
        }
        // if(count%2 != 0)
        // {
        //     document.querySelector(".nav-2").setAttribute('style', 'display:flex');
        //     count+=1;
        // }else if(count % 2 == 0)
        // {
        //     document.querySelector(".nav-2").setAttribute('style', 'display:none');
        //     count+=1;
        // }else{
        //     document.querySelector(".nav-2").setAttribute('style', 'display:none');

        // }
    }
</script>
</body>
</html>