<?php
session_start();
include 'admin/database.php';

// ===================== FORCE LOGIN =====================
if (!isset($_SESSION['user_id'])) {
    // Save current page to redirect back after login
    $_SESSION['redirect_after_login'] = 'description.php?id=' . ($_POST['product_id'] ?? '');

    // Save cart form data temporarily
    $_SESSION['temp_cart_data'] = $_POST;

    echo "<script>
        alert('Please Login to Add items to Cart!');
        window.location.href = 'userlogin.php';
    </script>";
    exit;
}
// ======================================================

if (isset($_POST['carted'])) {

    $product_id    = mysqli_real_escape_string($con, $_POST['product_id']);
    $product_name  = mysqli_real_escape_string($con, $_POST['product_name']);
    $price         = (float)$_POST['price'];
    $quantity      = (int)$_POST['quantity'];
    $size          = mysqli_real_escape_string($con, $_POST['selected_size']);
    $color         = mysqli_real_escape_string($con, $_POST['selected_color']);
    $image         = mysqli_real_escape_string($con, $_POST['product_image']);

    // Validation
    if (empty($size) || empty($color)) {
        echo "<script>alert('Please select Size and Color!'); history.back();</script>";
        exit;
    }

    if ($quantity < 1) $quantity = 1;

    $item = [
        'id'            => $product_id,
        'product_name'  => $product_name,
        'price'         => $price,
        'quantity'      => $quantity,
        'size'          => $size,
        'color'         => $color,
        'image'         => $image
    ];

    // Initialize cart session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if same product with same size & color already exists
    $found = false;
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $product_id && 
            $cart_item['size'] == $size && 
            $cart_item['color'] == $color) {
            
            $cart_item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }

    // Add as new item if not found
    if (!$found) {
        $_SESSION['cart'][] = $item;
    }

    // Success Message
    echo "<script>
        alert('✅ Product added to cart successfully!');
        window.location.href = 'viewcart.php';
    </script>";

} else {
    header("Location: shop.php");
    exit;
}
?>