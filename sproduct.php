
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

    <section id="prodetails" class="sectio-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Lorem</h6>
            <h4>Lorem, ipsum dolor.</h4>
            <h2>$139</h2>
            <select>
                <option >select Size</option>
                <option >S</option>
                <option >M</option>
                <option >L</option>
                <option >XL</option>
                <option >XXL</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quis molestiae
                 ullam distinctio minus quisquam cupiditate vero in laboriosam optio. ipsum dolor sit amet consectetur adipisicing elit. 
                Magni quo a dignissimos quasi, incidunt quae. Omnis 
                sapiente beatae totam asperiores nemo laudantium 
                 doloribus autem culpa enim.
                 ipsum dolor sit, amet consectetur
                 adipisicing elit. Maiores non tempore tempora laborum
                 accusantium fuga, est et laboriosam. Et, tempore.</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
       <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Adiddas</span>
                    <h5>Cotton shirts pure cotton</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Adiddas</span>
                    <h5>Cotton shirts pure cotton</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Adiddas</span>
                    <h5>Cotton shirts pure cotton</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>Adiddas</span>
                    <h5>Cotton shirts pure cotton</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </div>
            
        </div>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign uP for newsletters</h4>
            <p>Lorem ipsum dolor sit amet <span>consectetur</span>.</p>
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
        <p><strong>Address :</strong> Lorem ipsum dolor sit</p>
        <p><strong>Phone :</strong> 13569876540</p>
        <p><strong>Hours :</strong> 5hoai</p>
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

   <script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");


    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src
    }
    smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src
    }
   </script>

    <script src="script.js"></script>
</body>
</html>






