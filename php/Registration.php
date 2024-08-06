<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/home_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <script src="js/register.js"></script>
<!--00-->
</head>
<style>
  .container {
    padding: 16px;
    margin-top: 35px;
    background-color: white;
    background-image: url(../src/images/Background/enroll-now-registration-membership-concept.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 200;
    font-size: medium;
    border-radius: 25px;
    border-color: grey;
  }
  
    body{
    background-image: url(../src/images/Background/pexels-tbee-82256.jpg);
    background-color: rgb(239, 220, 195);
    background-size: cover;
    background-repeat: no-repeat;
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

    <!--Registration container (start)-->
    <form action="Registrationconfig.php" method="post">
        <div class="container">
            <h1><center>Register</center></h1>
            <p><center>Please fill in this form to create an account.</center></p>
            <hr>
                <label for="user_name"><b>User name</b></label>
                <input type="text-2" placeholder="Enter User name" name="user_name" id="user_name" required>

                <label for="gender"><b>Gender</b></label>
	            <input type="radio" name="gender" value="M" required>Male
	            <input type="radio" name="gender" value="F" required>Female<br/><br/>

                <label for="email"><b>Email</b></label>
                <input type="text-2" placeholder="abc@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" required>

                <label for="mobile_number"><b>Mobile number</b></label>
                <input type="text-2" placeholder="ex:- 077 123 3456" name="mobile_number" pattern="[0-9]{10}" id="mobile_number" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                <label for="psw_confirm"><b>Confirm  Password</b></label>
                <input type="password" placeholder="Confirm Password" name="psw_confirm" id="psw_confirm" required>
            <hr>
            <input type="checkbox" name ="chkTerms" onchange='AcceptTerms()'  id ="chkTerms">Accept privacy policy and terms<br><br>

            <center><button type="submit" class="registerbtn">Register</button></center>
            
        </div>
  
        <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>
    <!--Registration container (end)-->
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