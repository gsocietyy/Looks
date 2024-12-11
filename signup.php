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
	margin-top:2px;
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
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 400px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: absolute;
  top: 105px;
  left: 210px;
}

.title {
  font-size: 30px;
  color: #00bfff;
  font-weight: 900;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: #00bfff;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: #00bfff;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
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

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
  padding: 15px;
  padding-bottom: 13px;
  border-radius: 10px;
  color: #fff;
  font-weight: bold;
  transform: .3s ease;
}

.submit:hover {
	font-size: 15px;
	font-weight: bold;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.3);
	background-color: #2874A6;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
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
    <form class="form" action="signup_process.php" method="POST" enctype="multipart/form-data">
    <p class="title">SignUp</p>
    <p class="message">Create an account to receive updates on new arrivals, special offers, and exclusive discounts! </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="first_name">
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="last_name">
            <span>Lastname</span>
        </label>
    </div>  
       
    <label>
        <input required="" placeholder="" type="email" class="input" name="user_email">
        <span>Email</span>
    </label>

    <label>
    <h4 style="font-size:12px;color:grey; margin-left:8px;font-weight:500;margin-top:3px;">Phonenumber</h4>
    <input required placeholder="+254xxxxxxxxx" type="tel" class="input" name="phone_number" pattern="^\+254\d{9}$" title="Please enter a valid phone number in the format +254xxxxxxxxx"/>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Password</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="confirm_password">
        <span>Confirm password</span>
    </label>
    <button class="submit">SIGN UP</button>
    <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
</form>
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