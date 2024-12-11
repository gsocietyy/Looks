

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Jersey+25+Charted&family=Playball&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
</head>
<body>
    
<?php require_once('navbar.php')?>

    <section id="hero">
        <h4>Welcome!!</h4>
        <h2>Elevate Your Look</h2>
        <h1>Thrift, Save, Repeat!</h1>
        <p>Where style meets savings – discover timeless treasures at our thrift fashion paradise!</p>
        <a href="shop.php"><button>Shop Now</button></a>
        <a href="#" class="to-top">
            <p class="to-top--title">BACK <br> TO TOP</p>
        </a>
    </section>
<h2 class="featureh2">Discover Our Edge</h2>
    <section id="feature" class="section-p1">
        
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Easy Payments!</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Save Time!</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money!</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Offers & Gifts!</h6>
        </div>
        
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>Best Customer Service!</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Trending Products</h2>
        <p>Clothing Corner</p>
        <div class="pro-container">
            <div class="pro"  onclick="window.location.href='sproduct.php'">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Full Outfit</span>
                    <h5>Full fit check</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>

            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>Custom</span>
                    <h5>Custom Guilty Nation T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>
            </div>
            <div class="pro"  onclick="window.location.href='sproduct.php'">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Custom</span>
                    <h5>Customized Hoodie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>
            </div>
            <div class="pro"  onclick="window.location.href='sproduct.php'">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>Jersey</span>
                    <h5>Original Jerseys</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
    <button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>              
            </div>
             
           <a href="shop.php"><button class="cta">
  <span class="hover-underline-animation"> Shop now </span>
  <svg
    id="arrow-horizontal"
    xmlns="http://www.w3.org/2000/svg"
    width="30"
    height="10"
    viewBox="0 0 46 16">
    <path
      id="Path_10"
      data-name="Path 10"
      d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
      transform="translate(30)"
    ></path>
  </svg>
</button></a>


        </div>

    </section>

    <section id="banner" class="section-m1">
        <h2>Upto <span>70% Off</span>- All Shirts & Shoes</h2>
       <a href="shop.php"><button class="normal">Explore More</button></a>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Shoe Collection</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php'" >
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Air Force 1 - White</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
        
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>               
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Jordan 24</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>                
            </div>
            <div class="pro" onclick="window.location.href='sproduct.php'" >
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Air Force 1 - Customized Red</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>                
            </div>
            <div class="pro"  onclick="window.location.href='sproduct.php'">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>Nike</span>
                    <h5>Air Force 1 - Customized</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                </div>
<button class="add">
  <div class="default-btn">
    <svg
      viewBox="0 0 24 24"
      width="20"
      height="20"
      stroke="#ffffff"
      stroke-width="2"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path
        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
      ></path>
    </svg>
    <span>Add to Cart</span>
  </div>
  <div class="hover-btn">
  <svg width="100" height="70" xmlns="http://www.w3.org/2000/svg">
    <text x="0" y="40" font-family="Arial" font-size="15" fill="white">ksh.</text>
</svg>
    <span>1,899.25</span>
  </div>
</button>                
            </div>
           
            <a href="shop.php"><button class="cta">
  <span class="hover-underline-animation"> Shop now </span>
  <svg
    id="arrow-horizontal"
    xmlns="http://www.w3.org/2000/svg"
    width="30"
    height="10"
    viewBox="0 0 46 16"
  >
    <path
      id="Path_10"
      data-name="Path 10"
      d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
      transform="translate(30)"
    ></path>
  </svg>
</button></a>


        </div>

    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box ">
            <h4>Crazy Nike Deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>Buy yourself any nike sneaker and get 1 free!</span>
            <button class="white">Learn more</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Dress To Impress</h4>
            <h2>buy 1 get 1 free</h2>
            <span>Buy yourself 1 T-shirt and get 1 free!</span>
            <button class="white">Learn more</button>
        </div>
        
       
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>HIGH QUALITY</h2>
            <h3>Nike Snickers</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL</h2>
            <h3>Winter Jackets</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2> SALE</h2>
            <h3>Ladies Collection</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Get Notified For Our Latest Products</h4>
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