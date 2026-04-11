<?php
session_start();

if (isset($_GET['key'])) {
    $key = (int)$_GET['key'];
    
    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index array
    }
}

header("Location: viewcart.php");
exit;
?>