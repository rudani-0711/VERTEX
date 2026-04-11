<?php 
include 'admin/database.php'; 
session_start();
include 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="img/favi.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div id="header"></div>

    <script>
        $(document).ready(function() {
            $("#header").load("header.php");
});
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="d12">
                <div class="col-md-12" style="height: 80px;"></div>
                <p class="p71"><b>Checkout</b></p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            
            <!-- Billing Form -->
            <div class="col-md-6">
                <form action="process_checkout.php" method="POST" id="checkoutForm">
                    <div class="d14 ms-2 mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">First Name</p>
                                <input type="text" name="first_name" class="inp4 mt-2" required>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">Last Name</p>
                                <input type="text" name="last_name" class="inp4 mt-2" required>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">Email</p>
                                <input type="email" name="email" value="<?php echo $_SESSION['user_email'] ?? ''; ?>" class="inp4 mt-2" required>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">Mobile Number</p>
                                <input type="number" name="phone" class="inp4 mt-2" required>
                            </div>

                            <div class="col-md-12">
                                <p class="mb-0 mt-3 p74">Full Address</p>
                                <textarea name="address" class="inp5 mt-2" rows="3" required></textarea>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">City</p>
                                <input type="text" name="city" class="inp4 mt-2" required>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">State</p>
                                <input type="text" name="state" class="inp4 mt-2" required>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">Pincode</p>
                                <input type="number" name="pincode" class="inp4 mt-2" required>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0 mt-3 p74">Country</p>
                                <input type="text" name="country" value="India" class="inp4 mt-2" readonly>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Order Summary & Payment -->
            <div class="col-md-6 mt-md-0 mt-3">
                <div class="d15 ms-2 mt-3">
                    <p class="p75 ms-4 mt-3">YOUR ORDER</p>

                    <table class="bg-white table table-bordered table-hover tab ms-4 mb-0">
                        <?php 
                        $grand_total = 50; // Shipping
                        foreach ($_SESSION['cart'] as $item) {
                            $subtotal = $item['price'] * $item['quantity'];
                            $grand_total += $subtotal;
                        ?>
                        <tr>
                            <td><?php echo $item['product_name']; ?> (<?php echo $item['size']; ?>, <?php echo $item['color']; ?>)</td>
                            <td class="text-end">₹<?php echo $subtotal; ?></td>
                        </tr>
                        <?php } ?>
                        <tr class="fw-bold">
                            <td>Total Amount</td>
                            <td class="text-end">₹<?php echo $grand_total; ?></td>
                        </tr>
                    </table>

                    <p class="p75 ms-4 mt-4 mb-0">Payment Method</p>
                    
                    <div class="ms-4 mt-3">
                        <input type="radio" name="payment_method" value="COD" id="cod" checked>
                        <label class="p74 ms-2">Cash on Delivery (COD)</label><br><br>

                        <input type="radio" name="payment_method" value="Razorpay" id="razorpay">
                        <label class="p74 ms-2">
                            <img src="https://razorpay.com/assets/razorpay-logo.svg" height="25"> Pay Online Securely
                        </label>
                    </div>

                    <button type="submit" name="place_order" class="but18 ms-4 mt-4 w-100" id="payBtn">
                        Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="footer"></div>

    <script>
        $(document).ready(function() {
            $("#header").load("header.php");
            $("#footer").load("footer.php");
        });
    </script>
</body>
</html>