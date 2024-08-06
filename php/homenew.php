<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home_styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
    body{
    background-image: url(../src/images/home.jpg);
    background-color: rgb(239, 220, 195);
    background-size: cover;
    background-repeat: no-repeat;
    background-position:center;
    background-attachment: fixed;
}
</style>

</head>
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
                                <li><a href="profile.php">Singing</a></li>
                                <li><a href="profile.php">Dancing</li>
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
<!--Banner(start)-->
<div class="middle-banner">
    <div class="middle-banner-fream">
        <div class="banner-image">
            <div class="slid">
                <div id="slider">
                    <figure>
                        <img src="images/Dancing/DC1.jpg" alt="DC1" width="1200" height="450">
                        <img src="images/Dancing/DC2.jpg" alt="DC2" width="1200" height="450">
                        <img src="images/Dancing/DC3.jpg" alt="DC3" width="1200" height="450">
                        <img src="images/Dancing/DC4.jpg" alt="DC4" width="1200" height="450">
                        <img src="images/Dancing/DC5.jpg" alt="DC5" width="1200" height="450">
                    </figure>
                </div>
            </div>        
        </div>
    </div>
</div>
<div class="sidebar-form">	
    <div class="call-action">
        <span><a href="index.php" class="button-2">Feedback</a></span>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>$(document).ready(function(){
    $(".sidebar-form .call-action").click(function(){
            $(this).parents(".sidebar-form").toggleClass("show");
    });
    });
</script>
<br>
<br>
<center><b><h1>Our Sponsor Partners</h1></b></center><br>
<!--sponsor banner(start)-->
<div class="bottom-banner">
    <div class="bottom-banner-fream">
        <div class="banner-image">
            <img src="images/Sponsor/Banner 1.JPG" alt="Banner 1" width="400" height="200">
        </div>
    </div>
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