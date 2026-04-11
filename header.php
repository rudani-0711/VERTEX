<?php 
include 'admin/database.php'; 
session_start(); 

$cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
$is_logged_in = isset($_SESSION['user_id']);
$user_name = $is_logged_in ? $_SESSION['user_name'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<nav class="navbar navbar-expand-md navb fixed-top">
    <div class="nav-container">

        <a href="index.php"><img src="img/logo.png" alt="" class="logo"></a>

        <ul class="navbar-nav mx-auto nav-links" id="navLinks">
            <li><a href="index.php" class="n1 ms-3">Home</a></li>
            <li><a href="shop.php" class="n1 ms-md-2 ms-3">Shop</a></li>
            <li><a href="blog.php" class="n1 ms-md-2 ms-3">Blog</a></li>
            <li><a href="about.php" class="n1 ms-md-2 ms-3">About</a></li>
            <li><a href="contact.php" class="n1 ms-md-2 ms-3">Contact</a></li>
        </ul>

        <div class="nav-icons">

            <!-- Cart Icon -->
            <a href="viewcart.php" class="ml-auto position-relative" id="open-cart">
                <i class="fa fa-shopping-basket icon2" aria-hidden="true">  <?php echo $cart_count; ?></i>
                
            </a>

            <!-- User Login / Profile -->
            <?php if($is_logged_in): ?>
                
                    <i class="fa fa-user icon1 ms-2" data-bs-toggle="dropdown" aria-hidden="true"></i>
                    
                
                <ul class="dropdown-menu">
                    <li class="ms-3"><?php echo htmlspecialchars($user_name);?></li>
                    <li><a class="dropdown-item" href="my_order.php">My Orders</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            <?php else: ?>
                <a href="userlogin.php">
                    <i class="fa fa-user icon1" aria-hidden="true"></i>
                </a>
            <?php endif; ?>

            <button class="mobile-menu-btn" onclick="toggleMenu()">☰</button>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const nav = document.getElementById('navLinks');
        nav.classList.toggle('active');
    }
</script>

<!-- Optional: Sidebar Cart (You can keep or remove later) -->
<!-- For now I kept it minimal and clean. You can enhance it later. -->

</body>
</html>