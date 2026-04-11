<?php
// Minimal Razorpay Test - No session or cart required
$total = 100;   // ₹100 for testing
$order_id = "TEST" . time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Razorpay Minimal Test</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 100px; }
        button { padding: 15px 40px; font-size: 20px; background: #3399cc; color: white; border: none; border-radius: 8px; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Razorpay Test Payment</h2>
    <p>Total Amount: <strong>₹<?php echo $total; ?></strong></p>
    <br>
    <button onclick="startPayment()">Pay ₹<?php echo $total; ?> Now</button>

    <script>
        function startPayment() {
            var options = {
                "key": "rzp_test_6P9v0v4v4v4v4v4",   // Standard Test Key
                "amount": <?php echo $total * 100; ?>,
                "currency": "INR",
                "name": "Test Store",
                "description": "Test Transaction",
                "handler": function (response){
                    alert("Payment Successful!\nPayment ID: " + response.razorpay_payment_id);
                    console.log(response);
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>

</body>
</html>