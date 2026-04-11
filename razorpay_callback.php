<?php
session_start();
include 'admin/database.php';

$payment_id = $_GET['payment_id'] ?? '';
$order_id   = $_GET['order_id'] ?? '';
$amount     = $_GET['amount'] ?? 0;
$signature  = $_GET['razorpay_signature'] ?? '';

if ($payment_id && $order_id && $signature) {

    // Verify Signature (Security Check)
    $keySecret = "YOUR_RAZORPAY_KEY_SECRET";   // ← Put your Key Secret here

    $generated_signature = hash_hmac('sha256', $order_id . "|" . $payment_id, $keySecret);

    if ($generated_signature === $signature) {

        $billing = $_SESSION['billing'] ?? [];
        $user_id = $_SESSION['user_id'] ?? NULL;
        $full_name = ($billing['first_name'] ?? '') . " " . ($billing['last_name'] ?? '');

        // Insert Order
        $sql = "INSERT INTO `orders` 
                (`order_id`, `user_id`, `customer_name`, `email`, `phone`, `address`, `city`, `state`, `country`, `pincode`, `payment_method`, `total_amount`, `order_status`, `payment_id`) 
                VALUES 
                ('$order_id', '$user_id', '$full_name', '{$billing['email']}', '{$billing['phone']}', '{$billing['address']}', '{$billing['city']}', '{$billing['state']}', '{$billing['country']}', '{$billing['pincode']}', 'Razorpay', '$amount', 'Paid', '$payment_id')";

        if (mysqli_query($con, $sql)) {

            // Insert Order Items
            foreach ($_SESSION['cart'] as $item) {
                $item_sql = "INSERT INTO `order_items` (`order_id`, `product_id`, `product_name`, `size`, `color`, `quantity`, `price`, `image`) 
                             VALUES ('$order_id', '{$item['id']}', '{$item['product_name']}', '{$item['size']}', '{$item['color']}', '{$item['quantity']}', '{$item['price']}', '{$item['image']}')";
                mysqli_query($con, $item_sql);
            }

            // Clear Session
            unset($_SESSION['cart']);
            unset($_SESSION['billing']);

            echo "<script>
                alert('✅ Payment Successful! Order ID: $order_id');
                window.location.href = 'success.php?order_id=$order_id';
            </script>";
            exit;
        }
    } else {
        echo "<script>alert('Payment Signature Verification Failed!');</script>";
    }
} 

echo "<script>alert('Payment Failed!'); window.location.href='viewcart.php';</script>";
?>