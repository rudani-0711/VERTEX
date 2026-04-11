<?php
session_start();
unset($_SESSION['cart']);   // Clear all cart items
header("Location: viewcart.php");
exit;
?>