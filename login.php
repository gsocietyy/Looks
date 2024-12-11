<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
    
    <style>
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");
*{
	font-family: "Spartan", sans-serif; ;
}

body{
	background-repeat: no-repeat;
	background-size: cover;
}
#hero {
  background-image: url("img/hero4.png");
  height: 90vh;
  width: 100%;
  background-size: cover;
  background-position: top 25% right 0;
}
p{
	font-size: 13px;
	margin: 0;
}
h2{
	color: #2874A6;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Spartan", sans-serif;
  }
  
  php {
	scroll-behavior: smooth;
  }
  
  h1 {
	font-size: 50px;
	line-height: 64px;
	color: #222;
  }
  
  h2 {
	font-size: 46px;
	line-height: 54px;
	color: #222;
  }
  
  h4 {
	font-size: 20px;
	color: #222;
  }
  
  h6 {
	font-weight: 700;
	font-size: 12px;
  }
  
  p {
	font-size: 16px;
	color: #465b52;
	margin: 15px 0 20px 0;
  }
  
  .section-p1 {
	padding: 40px 80px;
  }
  
  .section-m1 {
	margin: 40px 0;
  }
  
  button.normal {
	font-size: 14px;
	font-weight: 600;
	padding: 15px 30px;
	color: #000;
	background-color: #fff;
	border-radius: 4px;
	cursor: pointer;
	border: none;
	outline: none;
	transition: 0.2s;
  }
  
  button.white {
	font-size: 13px;
	font-weight: 600;
	padding: 11px 18px;
	color: #ffff;
	background-color: transparent;
	cursor: pointer;
	border: 1px solid #fff;
	outline: none;
	transition: 0.2s;
  }
  
  body {
	width: 100%;
  }
  
  /* Header Start*/
  
  #header {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 20px 80px;
	background: white;
	box-shadow: 0 15px 15px rgba(0, 0, 0, 0.06);
	z-index: 999;
	position: sticky;
	top: 0;
	left: 0;
	height: 90px;
  }
  
  .logo{
	width: 240px;
	margin-top: 2px;
  }
  
  #navbar {
	display: flex;
	align-items: center;
	justify-content: center;
  }
  
  #navbar li {
	list-style: none;
	padding: 0 20px;
	position: relative;
	left: 10px;
  }
  #navbar li a {
	text-decoration: none;
	font-size: 16px;
	font-weight: 600;
	color: #1a1a1a;
	transition: 0.3s ease;
  }
  
  #navbar li a:hover,
  #navbar li a.active {
	color: #2ea3c6;
  }
  
  #navbar li a.active::after,
  #navbar li a:hover::after {
	content: "";
	width: 40%;
	height: 2px;
	background-color: #2ea3c6;
	position: absolute;
	bottom: -4px;
	left: 20px;
  }
  
  #mobile {
	display: none;
	align-items: center;
  }
  .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
  }
  #login {
  font-size: 30px;
  position: absolute;
  bottom: -5px;
  right: 20px;
  text-align: center;
  cursor: pointer;
}

#login h2{
  font-size: 13px;
  margin-top: -20px;
  margin-left: 7px;
}
#login a{
  text-decoration: none;
  color: #000;
}

footer {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

footer .col {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px;
}

footer .logo {
  margin-bottom: 30px;
}

footer h4 {
  font-size: 14px;
  padding-bottom: 20px;
}

footer p {
  font-size: 13px;
  margin: 0 0 8px 0;
  /* border: 4px solid blue; */
}

footer a {
  font-size: 13px;
  text-decoration: none;
  color: #222;
  margin-bottom: 10px;
}

footer p .fa {
  /* margin-top: 12px; */
  /* border: 2px solid red; */
  font-size: 1.1rem;
  align-self: flex-start;
  color: #088178;
  margin-right: 10px;
  margin: 5px;
}

footer .follow {
  margin-top: 20px;
}

footer .follow i {
  color: #465b52;
  padding-right: 4px;
  cursor: pointer;
}

footer .install .row img {
  border: 1px solid #088178;
  border-radius: 6px;
  cursor: pointer;
}

footer .install img {
  margin: 10px 0 15px 0;
  cursor: pointer;
}

footer .follow i:hover,
footer a:hover {
  color: #088178;
}

footer .copyright {
  width: 100%;
  text-align: center;
  margin-top: 20px;
}
.container {
  max-width: 400px;
  background: #F8F9FD;
  background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
  border-radius: 40px;
  padding: 25px 60px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
  position: absolute;
  top: 195px;
  left: 250px;
}

.heading {
  text-align: center;
  font-weight: 900;
  font-size: 30px;
  color:  #00bfff;
}

.form {
  margin-top: 20px;
}

.form .input {
  width: 100%;
  background: white;
  border: none;
  padding: 15px 20px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}

.form .input::-moz-placeholder {
  color: rgb(170, 170, 170);
}

.form .input::placeholder {
  color: rgb(170, 170, 170);
}

.form .input:focus {
  outline: none;
  border-inline: 2px solid #12B1D1;
}

.form .forgot-password {
  display: block;
  margin-top: 10px;
  margin-left: 10px;
}

.form .forgot-password a {
  font-size: 11px;
  color: #0099ff;
  text-decoration: none;
}

.form .login-button {
  display: block;
  width: 100%;
  font-weight: bold;
  background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
  color: white;
  padding-block: 15px;
  margin: 20px auto;
  border-radius: 20px;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
  border: none;
  transition: all 0.2s ease-in-out;
}

.form .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
  font-size: 15px;
	font-weight: bold;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.3);
	background-color: #2874A6;
}

.form .login-button:active {
  transform: scale(0.95);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}

.agreement {
  text-align: center;
  margin-top: 15px;
  margin-left: 40px;
}

.agreement a {
  text-decoration: none;
  color: #0099ff;
  font-size: 10px;
}
.signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: #00bfff;
}

.signin a:hover {
  text-decoration: underline #00bfff;
}
    </style>
<body>

	<section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i></a></li>
            </ul>
            <div id="login">
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a> 
                <a href="login.php"><h2>Login</h2></a>
            </div>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-bars" aria-hidden="true"></i>         
        </div>
    </section>

    <section id="hero">
    <div class="container">
    <div class="heading">Sign In</div>
    <form action="login_process.php" method="POST" class="form">
      <h4 style="font-size:12px;color:grey; margin-left:20px;font-weight:500;margin-bottom:-8px;">Phonenumber</h4>
      <input required="" class="input" type="tel" name="phone_number"  pattern="+254[0-9]{8}" required placeholder="+254xxxxxxxxx">
      <h4 style="font-size:12px;color:grey; margin-left:20px;font-weight:500;margin-bottom:-8px;margin-top:10px;">Password</h4>
      <input required="" class="input" type="password" name="password" id="password" placeholder="Enter Your Password">
      <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
      <input class="login-button" type="submit" value="Sign In">

      <p class="signin">Don't have an acount ? <a href="signup.php">SignUp</a> </p>
      <span class="agreement"><a href="#">Learn user licence agreement</a></span>
    </form>
      </div>
  </div>
    </section>

    <footer class="section-p1">
    <div class="col">
        <img class="logo" src="img/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address :</strong> Westlands</p>
        <p><strong>Phone :</strong> 254758863808</p>
        <p><strong>Hours :</strong> 8:00Am-5:00Pm</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About US</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
        <a href="#">About US</a>
    </div>

    <div class="col">
        <h4>MY Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>


    <div class="col install">
        <h4>Services</h4>
        <a href="#">Price Drop</a>
        <a href="#">New Products</a>
        <a href="#">Best Sales</a>
        <a href="#">Contact Us</a>
        <a href="#">Site Map</a>
        <p>Secured payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>

    <div class="copyright">
        <p>&copy; 2024 Ryan ThriftShop. All Rights Reserved</p>
    </div>
            
            <script src="script.js"></script>

</body>
</html>