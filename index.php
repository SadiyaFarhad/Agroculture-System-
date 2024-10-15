<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AgroCulture</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="indexfooter.css" />
    <style>
        .names-display {
            position: absolute;
            left: 20px;
            top: 80px;
            font-size: 15px;
            color: white;
            margin: 0px;
        }
        .names-display {
            position: absolute;
            left: 30px;
            top: 180px;
            font-size: 30px;
            color: white;
            margin: 0px;
        }
      
        .names-display p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
<?php
require 'menu.php';
?>

<!-- Banner -->
<section id="banner" class="wrapper">
    <div class="container">
        <h2>AgroCulture</h2>
        <p>Your Product Our Market</p>
  
        <div class="names-display">
     Guide By- Mr Panirama Prasad.<br>
    Sadiya<br>
    S Md Taher<br>
    Srilekha<br>
    Md Ali<br>

</div>

           
</div>
        <br><br>
        <center>
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
                </div>

                <div class="6u 12u$(xsmall)">
                    <button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
                </div>
            </div>
        </center>
    </div>
</section>

<!-- One -->
<section id="one" class="wrapper style1 align-center">
    <div class="container">
        <header>
            <h2>AgroCulture</h2>
            <p>Explore the new way of trading...</p>
        </header>
        <div class="row 200%">
            <section class="4u 12u$(small)">
                <i class="icon big rounded fa-clock-o"></i>
                <p>Digital Market</p>
            </section>
            <section class="4u 12u$(small)">
                <i class="icon big rounded fa-comments"></i>
                <p>Agro-Blog</p>
            </section>
            <section class="4u$ 12u$(small)">
                <i class="icon big rounded fa-user"></i>
                <p>Register with us</p>
            </section>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-distributed" style="background-color:black" id="aboutUs">
    <center>
        <h1 style="font: 35px calibri;">About Us</h1>
    </center>
    <div class="footer-left">
        <h3 style="font-family: 'Times New Roman', cursive;">AgroCulture &copy; </h3>
        <br />
        <p style="font-size:20px;color:white">Your product Our market !!!</p>
        <br />
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p style="font-size:20px">Agro Culture Fam<span>Vormir</span></p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p style="font-size:20px">123456789</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">demo@demo.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-company-about" style="color:white">
            <span style="font-size:20px"><b>About AgroCulture</b></span>
            AgroCulture is e-commerce trading platform for grains & groceries...
        </p>
        <div class="footer-icons">
            <a href="#"><i style="margin-left: 0;margin-top:5px;" class="fa fa-facebook"></i></a>
            <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
            <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>

<!-- Login Modal -->
<div id="id01" class="modal">
    <div class="modal-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <h3>Login</h3>
            <form method="post" action="Login/login.php">
                <div class="row uniform 50%">
                    <div class="7u$">
                        <input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
                    </div>
                    <div class="7u$">
                        <input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
                    </div>
                </div>
                <div class="row uniform">
                    <p>
                        <b>Category : </b>
                    </p>
                    <div class="3u 12u$(small)">
                        <input type="radio" id="farmer-login" name="category" value="1" checked>
                        <label for="farmer-login">Farmer</label>
                    </div>
                    <div class="3u 12u$(small)">
                        <input type="radio" id="buyer-login" name="category" value="0">
                        <label for="buyer-login">Buyer</label>
                    </div>
                </div>
                <center>
                    <div class="row uniform">
                        <div class="7u 12u$(small)">
                            <input type="submit" value="Login" />
                        </div>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div id="id02" class="modal">
    <div class="modal-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <h3>SignUp</h3>
            <form method="post" action="Login/signUp.php">
                <center>
                    <div class="row uniform">
                        <div class="3u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                        </div>
                        <div class="3u 12u$(xsmall)">
                            <input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="3u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                        </div>
                        <div class="3u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="3u 12u$(xsmall)">
                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
                        </div>
                        <div class="3u 12u$(xsmall)">
                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <p>
                            <b>Category : </b>
                        </p>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="farmer-register" name="category" value="1" checked>
                            <label for="farmer-register">Farmer</label>
                        </div>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="buyer-register" name="category" value="0">
                            <label for="buyer-register">Buyer</label>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="3u 12u$(small)">
                            <input type="submit" value="Submit" name="submit" class="special" />
                        </div>
                        <div class="3u 12u$(small)">
                            <input type="reset" value="Reset" name="reset"/>
                        </div>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    } else if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

</body>
</html>
