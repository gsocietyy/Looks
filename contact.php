<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
</head>
<body>
    
<?php require_once('navbar.php')?>

    <section id="page-header" class="about-header">
        <h2>#Contact Us</h2>
        <p> Leave a message. We would love to hear from you....</p>
        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit us or Contact us</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa fa-map" aria-hidden="true"></i>
                    <p>Westlands Bmw Offices</p>
                </li>
                <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <p>thriftshop@gmail.com</p>
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>254758863808</p>
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>8:00Am-5:00Pm</p>
                </li>
            </div>
        </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.377087779234!2d36.731988576206255!3d-1.271397989264076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f11!3m3!1m2!1s0x182f178117b19515%3A0x1f40cf40a9276766!2sBMW%20Kenya!5e0!3m2!1sen!2ske!4v1721469381611!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        
    </section>
 
    <section id="form-details">
        <form action="" method="get">
            <span>Leave a Message</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Enter your name">
            <input type="text" placeholder="Enter your Email">
            <input type="text" placeholder="Enter your Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign uP for newsletters</h4>
            <p>Sign Up to receive offer notifications! <span>NOW</span>.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email address">
            <button class="normal">Sign Up</button>
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
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
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

   </footer>

    <script src="script.js"></script>
</body>
</html>