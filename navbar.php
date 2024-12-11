<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connection.php';

session_start();

// Set session timeout
$session_timeout = 1800;

// Check if session timer exists
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
    // Last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("Location: index.php"); // Redirect to login page
    exit;
}

// Update last activity time stamp
$_SESSION['last_activity'] = time();

$user_id = $_SESSION['user_id'] ?? null; // Check if user is logged in
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$searchTerm = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

    <div>
        <ul id="navbar">
            <a href="#" id="close"><i class='fa fa-close'></i></a>
            
            <!-- Navigation for logged-in users -->
            <?php if ($user_id): ?>
                <?php
                // Fetch user profile
                $select_profile = $conn->prepare("SELECT first_name FROM users WHERE user_id = ?");
                $select_profile->bind_param("i", $user_id);
                $select_profile->execute();
                $result = $select_profile->get_result();
                $fetch_profile = $result->fetch_assoc();
                ?>
                <li><a class="<?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li><a class="<?= $current_page == 'shop.php' || $searchTerm ? 'active' : '' ?>" href="shop.php<?= $searchTerm ? '?q=' . urlencode($searchTerm) : '' ?>">Shop</a></li>
                <li><a class="<?= $current_page == 'blog.php' ? 'active' : '' ?>" href="blog.php">Blog</a></li>
                <li><a class="<?= $current_page == 'about.php' ? 'active' : '' ?>" href="about.php">About</a></li>
                <li><a class="<?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
                <div class="search-barr">
                    <form action="shop.php" method="get">
                        <input type="text" placeholder="Search Product" name="q">
                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i>
        <span class="btn-badge" value="3">8</span></a></li>
                
                <div class="profile-dropdown">
                    <div onclick="toggle()" class="profile-dropdown-btn">
                        <div class="profile-img">
                            <img class="profile-img" src="img/user.png" alt="">
                            <i class="fa-solid fa-circle"></i>
                        </div>
                        <span>
                            <?= htmlspecialchars($fetch_profile['first_name']) ?>
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </div>
                    <ul class="profile-dropdown-list">
                        <li class="profile-dropdown-list-item"><a href="#"><i class="fa-regular fa-user"></i> My Account</a></li>
                        <li class="profile-dropdown-list-item"><a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Orders</a></li>
                        <li class="profile-dropdown-list-item"><a href="#"><i class="fa-regular fa-envelope"></i> Inbox</a></li>
                        <hr />
                        <li class="profile-dropdown-list-item"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <!-- Navigation for guests -->
                <li><a class="<?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li><a class="<?= $current_page == 'shop.php' || $searchTerm ? 'active' : '' ?>" href="shop.php<?= $searchTerm ? '?q=' . urlencode($searchTerm) : '' ?>">Shop</a></li>
                <li><a class="<?= $current_page == 'blog.php' ? 'active' : '' ?>" href="blog.php">Blog</a></li>
                <li><a class="<?= $current_page == 'about.php' ? 'active' : '' ?>" href="about.php">About</a></li>
                <li><a class="<?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
                <div class="search-bar">
                    <form action="shop.php" method="get">
                        <input type="text" placeholder="Search Product" name="q">
                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i></a></li>
                <div id="login">
                    <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                    <a href="login.php"><h2>Login</h2></a>
                </div>
            <?php endif; ?>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
        <i id="bar" class="fa fa-bars" aria-hidden="true"></i>
    </div>
</section>

</body>
</html>