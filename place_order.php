<?php
session_start();
include 'admin/database.php';

if (isset($_POST['place_order']) && !empty($_SESSION['cart'])) {

    $first_name   = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name    = mysqli_real_escape_string($con, $_POST['last_name']);
    $email        = mysqli_real_escape_string($con, $_POST['email']);
    $phone        = mysqli_real_escape_string($con, $_POST['phone']);
    $address      = mysqli_real_escape_string($con, $_POST['address']);
    $city         = mysqli_real_escape_string($con, $_POST['city']);
    $state        = mysqli_real_escape_string($con, $_POST['state']);
    $country      = mysqli_real_escape_string($con, $_POST['country']);
    $pincode      = mysqli_real_escape_string($con, $_POST['pincode']);
    $payment_method = mysqli_real_escape_string($con, $_POST['payment_method']);

    $user_id = $_SESSION['user_id'] ?? NULL;
    $full_name = $first_name . " " . $last_name;

    // Calculate Total
    $grand_total = 50; // Shipping
    foreach ($_SESSION['cart'] as $item) {
        $grand_total += $item['price'] * $item['quantity'];
    }

    // Generate Unique Order ID
    $order_id = "ORD" . date("YmdHis") . rand(100, 999);

    // Insert into orders table
    $sql = "INSERT INTO `orders` (`order_id`, `user_id`, `customer_name`, `email`, `phone`, `address`, `city`, `state`, `country`, `pincode`, `payment_method`, `total_amount`, `order_status`) 
            VALUES ('$order_id', '$user_id', '$full_name', '$email', '$phone', '$address', '$city', '$state', '$country', '$pincode', '$payment_method', '$grand_total', 'Pending')";

    if (mysqli_query($con, $sql)) {

        // Insert Order Items
        foreach ($_SESSION['cart'] as $item) {
            $product_id   = $item['id'];
            $product_name = mysqli_real_escape_string($con, $item['product_name']);
            $size         = $item['size'];
            $color        = $item['color'];
            $quantity     = $item['quantity'];
            $price        = $item['price'];
            $image        = $item['image'];

            $item_sql = "INSERT INTO `order_items` (`order_id`, `product_id`, `product_name`, `size`, `color`, `quantity`, `price`, `image`) 
                         VALUES ('$order_id', '$product_id', '$product_name', '$size', '$color', '$quantity', '$price', '$image')";

            mysqli_query($con, $item_sql);
        }

        // Clear Cart After Successful Order
        unset($_SESSION['cart']);

        // Redirect to Success Page
        header("Location: success.php?order_id=$order_id");
        exit;

    } else {
        echo "Error: " . mysqli_error($con);
    }

} else {
    header("Location: viewcart.php");
    exit;
}
?>