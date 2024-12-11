<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://use.fontawesome.com/dfba0bb4d8.js"></script>
  </head>
  <body>
    
  <?php require_once('navbar.php')?>
    

    <!-- <section id="contact-details" class="section-p1">
        <div class="details">
            <h2>Your Cart is Empty</h2>
    </section> -->

    <!-- cart items details-->
    <div class="small-container">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="img/products/f1.jpg" alt="Tshirt" />
              <div>
                <p>New Era Cap</p>
                <small>Price: Ksh.1500.00</small>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>Ksh.1500.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="img/products/f3.jpg" alt="Tshirt" />
              <div>
                <p>Customized Hoodie</p>
                <small>Price: Ksh.3500.00</small>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>Ksh.3500.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="img/products/f5.jpg" alt="Tshirt" />
              <div>
                <p>Cotton Shirts Pure Cotton</p>
                <small>Price: Ksh.3500.00</small>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>Ksh.3500.00</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>8485.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>15.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>Ksh.8500.00</td>
          </tr>
        </table>
      </div>
      <button class="purchase--btn">Checkout</button>
    </div>
    

    

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for newsletter</h4>
        <p>Sign Up to receive offer notifications! <span>NOW</span>.</p>
      </div>
      <div class="form">
        <input type="text" placeholder="your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="img/logo.png" alt="" />
        <h4>Contact</h4>
        <p>
          <strong><i class="fa fa-home"></i></strong>Westlands
        </p>
        <p>
          <strong><i class="fa fa-phone"></i></strong> 254758863808
        </p>
        <p>
          <strong><i class="fa fa-hourglass" aria-hidden="true"></i></strong>
          8:00 AM - 5:00 PM
        </p>
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
  </body>
</html>
