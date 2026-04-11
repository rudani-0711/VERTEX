<?php
session_start();
include 'admin/database.php';

if (isset($_POST['place_order'])) {

    $payment_method = $_POST['payment_method'];

    // Save billing details in session for later use
    $_SESSION['billing'] = [
        'first_name' => $_POST['first_name'],
        'last_name'  => $_POST['last_name'],
        'email'      => $_POST['email'],
        'phone'      => $_POST['phone'],
        'address'    => $_POST['address'],
        'city'       => $_POST['city'],
        'state'      => $_POST['state'],
        'pincode'    => $_POST['pincode'],
        'country'    => $_POST['country']
    ];

    if ($payment_method == "COD") {
        // Handle Cash on Delivery
        include 'place_order_cod.php';
    } 
    else if ($payment_method == "Razorpay") {
        // Redirect to Razorpay Payment Page
        header("Location: razorpay_payment.php");
        exit;
    }
} else {
    header("Location: viewcart.php");
    exit;
}
?>