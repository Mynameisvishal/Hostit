<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTiT</title>
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <header>
    <?php

        require 'header.php';
    ?>
    </header>
    <section class="main-1">
        <div class="titleimage">
            <img id="imagechange" src="img/pubgfreefire.jpg" alt="pubg">
        </div> 
        <div class="overlap">
            
        </div>
    </section>
    <section class="main-2" id="play">
        <div class="header-tabs">
            <button onclick="upcomming()">upcomming</button>
            <button onclick="current()">current </button>
            <button onclick="previous()">Previous</button>
        </div>
        <div class="upcomming-sub">
            <div class="box">
                <div class="row1">
                    <div class="col1">
                        <div class="img">
                            <img src="img/pubgicon2.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">1</span>
                            <p>Pubg mobile</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 4:45pm</span> </span>
                            <form action="includes/join.inc.php" method="post">
                                <button type="submit" name="pubg" class="join">join</button>
                            </form>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="img">
                            <img src="img/ffbg.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">2</span>
                            <p>Free Fire</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 5:00pm</span> </span>
                            <form action="includes/join.inc.php" method="post">
                                <button type="submit" name="freefire" class="join">join</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="row2">
                    <div class="col1">
                        <div class="img">
                            <img src="img/pubgicon2.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">3</span>
                            <p>Pubg mobile</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 5:15pm</span> </span>
                            <form action="includes/join.inc.php" method="post">
                                <button type="submit" name="pubg2" class="join">join</button>
                            </form>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="img">
                            <img src="img/ffbg.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">4</span>
                            <p>Free Fire</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 5:30pm</span> </span>
                            <form action="includes/join.inc.php" method="post">
                                <button type="submit" name="freefire2" class="join">join</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row3">
                    <div class="col1">
                        <div class="img">
                            <img src="img/codicon.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">5</span>
                            <p>COD MOBILE</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 5:45pm</span> </span>
                            <form action="includes/join.inc.php" method="post">
                                <button type="submit" name="cod" class="join">join</button>
                            </form>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="img">
                            <img src="img/ludobg.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">6</span>
                            <p>Ludo King</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 6:00pm</span> </span>
                            <form action="includes/join.inc.php" method="post">
                                <button type="submit" name="ludo" class="join">join</button>
                            </form>    
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="current-sub">
            <div class="box">
                <div class="row1">
                    <div class="col1">
                        <div class="img">
                            <img src="img/pubgicon2.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">1</span>
                            <p>Pubg mobile</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 1:45pm</span> </span>
                            <form action="includes/viewlive.inc.php" method="post">
                                <button type="submit" name="pubg" class="view">view live stream</button>
                            </form>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="img">
                            <img src="img/ffbg.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">2</span>
                            <p>Free Fire</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 2:00pm</span> </span>
                            <form action="includes/viewlive.inc.php" method="post">
                                <button type="submit" name="freefire" class="view">view live stream</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="previous-sub">
            <div class="box">
                <div class="row1">
                    <div class="col1">
                        <div class="img">
                            <img src="img/pubgicon2.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">1</span>
                            <p>Pubg mobile</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 11:45am</span> </span>
                            <form action="includes/viewlive.inc.php" method="post">
                                <button type="submit" name="pubg" class="view">view match</button>
                            </form>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="img">
                            <img src="img/ffbg.png" alt="pubgicon">
                            <span></span>
                        </div>
                        <div class="content">
                            <span class="topfloat">2</span>
                            <p>Free Fire</p>
                            <span class="bold1">Entry: <span class="normal1">300</span> </span>
                            <span class="bold1">Time: <span class="normal1"> 12:01pm</span> </span>
                            <form action="includes/viewlive.inc.php" method="post">
                                <button type="submit" name="freefire" class="view">view match</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="feedback" class="main-3">
        <div class="feedback">
            <form action="includes/feedback.inc.php" method="post">
                <p>leave your feedback here.</p>
                <?php
                if(isset($_GET["error"])){
                    if($_GET['error'] == "emptyfields"){
                        echo'<p class="signuperror">Fill in all fields!</p>';
                    }else if($_GET["error"] == "invalidmail"){
                        echo'<p class="signuperror">Enter a vaild mail</p>';

                    }
                    else if($_GET["error"] == "sqlerror"){
                        echo'<p class="signuperror">Database error.</p>';

                    }else if($_GET["feedback"] == "success"){
                    echo'<p class="signupsuccess">Feedback recieved</p>';
                    }else{
                        echo'<p class="signuperror">Database error.</p>';

                    }
                }
                if(isset($_GET["feedback"])){
                    if($_GET["feedback"] == "success"){
                    echo'<p class="delivered">Feedback delivered!.</p>';
                    }else{
                        echo'<p class="signuperror">Database error.</p>';

                    }
                }
                ?>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="comment" id="" maxlength="255" cols="30" rows="10" required="required"></textarea>
                    <span>Type your feedback.</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="feedback" value="post" required="required">
                </div>     
            </form>
        </div>
    </section>
    <div class="cookie-container">
        <p>We use cookie to improve your experience on our site. By using our site you consent cookies.</p>
        <button class="cookie-btn">Got it</button>
    </div>
    <footer>
    <?php
        require 'footer.php'; 
    ?>
    </footer>
    <script>
    function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById('imagechange').setAttribute('src','img/ffhd1.jpg');
        }else{
            document.getElementById('imagechange').setAttribute('src','img/pubgfreefire.jpg');        


        }
    }


    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
            //cookies    
    const cookie = document.querySelector(".cookie-container");
    const cookiebtn = document.querySelector(".cookie-btn");
    cookiebtn.addEventListener("click",()=>{
        cookie.classList.remove("active");
        localStorage.setItem("cookieShown","true");
    });
    setTimeout(()=>{
        if(!localStorage.getItem("cookieShown")){
        cookie.classList.add("active");
    }
    },2000);
    function upcomming()
    {
        document.querySelector('.upcomming-sub').style.display='block';
        document.querySelector('.current-sub').style.display='none';
        document.querySelector('.previous-sub').style.display='none';
    }
    function current()
    {
        document.querySelector('.upcomming-sub').style.display='none';
        document.querySelector('.current-sub').style.display='block';
        document.querySelector('.previous-sub').style.display='none';
    }
    function previous()
    {
        document.querySelector('.upcomming-sub').style.display='none';
        document.querySelector('.current-sub').style.display='none';
        document.querySelector('.previous-sub').style.display='block';
    }
    </script>
</body>
</html>