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

<?php require('navbar.php')?>

<section id="page-header">
    <h2>#Renew Your Wardrobe</h2>
    <p>Discover the perfect blend of style and substance...</p>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
</section>

<section id="product1" class="section-p1">
    <div class="pro-container">

        <?php
        include('connection.php');

        if (isset($_GET['q'])) {
            $searchTerm = htmlspecialchars($_GET['q']);
            $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
            $likeTerm = '%' . $searchTerm . '%';
            $stmt->bind_param('s', $likeTerm);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
        
                while ($product = $result->fetch_assoc()) {
                    echo "<div class='pro'>";
                    echo "<img src='img/products/" . htmlspecialchars($product['image']) . "' alt=''>";
                    echo "<div class='des'>";
                    echo "<span>" . htmlspecialchars($product['category']) . "</span>";
                    echo "<h5>" . htmlspecialchars($product['name']) . "</h5>";
                    echo "<div class='star'>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<i class='fas fa-star'></i>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "<button class='add'>";
                    echo "<div class='default-btn'>";
                    echo "<svg viewBox='0 0 24 24' width='20' height='20' stroke='#ffffff' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round' class='cart-icon'>";
                    echo "<circle cx='9' cy='21' r='1'></circle>";
                    echo "<circle cx='20' cy='21' r='1'></circle>";
                    echo "<path d='M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6'></path>";
                    echo "</svg>";
                    echo "<span>Add to Cart</span>";
                    echo "</div>";
                    echo "<div class='hover-btn'>";
                    echo "<svg width='100' height='70' xmlns='http://www.w3.org/2000/svg'>";
                    echo "<text x='0' y='40' font-family='Arial' font-size='15' fill='white'>ksh.</text>";
                    echo "</svg>";
                    echo "<span>" . htmlspecialchars($product['price']) . "</span>";
                    echo "</div>";
                    echo "</button>";
                    echo "</div>";
                }
            } else {
                echo "<p>No products found for '$searchTerm'.</p>";
            }

            $stmt->close();
        }
        ?>

        <!-- Existing Products (for non-search) -->
        

    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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