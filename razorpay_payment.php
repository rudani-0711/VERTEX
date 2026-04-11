<?php
session_start();
include 'admin/database.php';

$total = 100; // Hardcoded for testing (₹100)
$order_id = "ORD" . time();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Razorpay Test</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<h2 style="text-align:center; margin-top:50px;">Razorpay Test Payment</h2>
<p style="text-align:center;">Total: ₹<?php echo $total; ?></p>

<button id="pay-button" style="display:block; margin:30px auto; padding:15px 30px; font-size:18px;">
    Pay ₹<?php echo $total; ?> with Razorpay
</button>

<script>
    var options = {
        "key": "rzp_test_6P9v0v4v4v4v4v4",   // Standard Test Key
        "amount": <?php echo $total * 100; ?>,
        "currency": "INR",
        "name": "Test Store",
        "description": "Test Payment",
        "handler": function(response) {
            alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
            window.location.href = "razorpay_callback.php?payment_id=" + response.razorpay_payment_id + "&order_id=TEST123&amount=<?php echo $total; ?>";
        },
        "theme": { "color": "#3399cc" }
    };

    var rzp = new Razorpay(options);
    document.getElementById('pay-button').onclick = function() {
        rzp.open();
    };
</script>

</body>
</html>