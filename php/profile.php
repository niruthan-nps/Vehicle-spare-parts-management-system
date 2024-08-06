<?php

    session_start();
    if(!isset($_SESSION['user_name']))
    {
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home_styles.css">
    <title>Profile page</title>
</head>
<style>
    body{
    background-image: url(../src/images/Background/bg.jpg);
    background-color: rgb(239, 220, 195);
    background-size: cover;
    background-repeat: no-repeat;
    }

    .container{
        text-align:center;
    }
    .logout{
        text-align:right;
    }
    .button-2{
    background-color: rgb(41, 40, 40);
    border: none;
    color: white;
    padding: 14px 25px;
    text-align: right;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
    font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
<!-- header section (start)-->
    <div id="header">
        <div class="logo-part">
            <div class="logo-box">
                <div class="logo-img">
                    <img src="images/LOGO.png" alt="LOGO" width="120" height="120">
                </div>
            </div>
        </div>
        <div class="top-banner">
            <div class="top-banner-fream">
                <div class="banner-image">
                </div>
            </div>
        </div>
        <div class="profile-section">
            <div class="profile icon">
                <a href="profile.php"><img src="images/download.png" alt="download" width="50px" height="50px"></a>
            </div>
        </div>
        <div class="log-in--sign-up-btns">
            <div class="log-in-btn-space">
                <div class="log-in-btn">
                    <a href="login.php" class="button-1">Login</a>
                </div>
            </div>
            <div class="sign-up-btn-space">
                <div class="sign-up-btn">
                    <a href="Registration.php" class="button-1">SignUp</a>
                </div>
            </div>
        </div>
    </div>
<!--navigation bar (start)-->
<nav>
        
            <div class="nav-links">
                <ul>
                    <li><a href="homenew.php">Home</a></li>
                    <li><a href="#">Vote</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="singingSlider.php">Singing</a></li>
                                <li><a href="dancingSlider.php">Dancing</li>
                            </ul>
                        </div>
                    </li>
                    
                    <li><a href="payment.php">Buy Ticket</a></li>
                    <li><a href="Gallery page.php">Gallery</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                </ul>

            </div>
           
        </nav>
<!--navigation bar (end)-->
<div class="container">
    <div class="logout">
        <a href="logout.php" class="button-2"> LOGOUT </a>
    </div>
    <h1> Welcome <?php echo $_SESSION['user_name'];?> </h1>
</div>
</body>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>SGT  <span>SLIIT GOT TALENT</span></h3>

        <p class="footer-links">
            <a href="homenew.php" class="link-1">Home</a>
            
            <a href="payment.php">Buy Ticekts</a>
        
            <a href="about_us.php">About Us</a>
        
            <a href="help.php">Help</a>
            
            <a href="contact.php">Contact Us</a>
            
        </p>

        <p class="footer-company-name">Copyright 2022 © SLIIT GOT TALENT. All Rights Reserved.</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>New Kandy Road</span>Malabe, Sri Lanka</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+94 11 754 4801</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="INFO@SLIIT.LK">INFO@SLIIT.LK</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About SLIIT</span>
            We are a leading non-state higher education institute approved by the University Grants Commission (UGC) under the Universities Act. We are members of the Association of Commonwealth Universities (ACU), as well as the International Association of Universities (IAU). We are also the first Sri Lankan institute to be accredited by the Institute of Engineering & Technology( IET), UK and Engineering Council, UK.
        </p>

        <div class="footer-icons">

            <a href="https://www.facebook.com/sliitsgottalent/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/sliitsgt/?hl=en"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCpREiqnNoMLvy1Ifqclb55Q/videos"><i class="fa fa-youtube"></i></a>
            <a href="https://twitter.com/SLIITinfo"><i class="fa fa-twitter"></i></a>

        </div>

    </div>

</footer>
</html>