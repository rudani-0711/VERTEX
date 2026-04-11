<?php 
include 'admin/database.php'; 
session_start();
include 'auth_check.php';

$order_id = mysqli_real_escape_string($con, $_GET['order_id'] ?? '');

if(empty($order_id)) {
    header("Location: my_orders.php");
    exit;
}

// Get Order Info
$order = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `orders` WHERE `order_id` = '$order_id'"));

// Get Order Items
$items = mysqli_query($con, "SELECT * FROM `order_items` WHERE `order_id` = '$order_id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - <?php echo $order_id; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div id="header"></div>

    <div class="container mt-5">
        <div class="col-md-12" style="height:50px"></div>
        <h2>Order Details</h2>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <h5>Order Information</h5>
                <table class="table">
                    <tr><th>Order ID</th><td><strong><?php echo $order['order_id']; ?></strong></td></tr>
                    <tr><th>Date</th><td><?php echo date('d M, Y h:i A', strtotime($order['order_date'])); ?></td></tr>
                    <tr><th>Status</th><td><span class="badge bg-success"><?php echo $order['order_status']; ?></span></td></tr>
                    <tr><th>Total Amount</th><td><strong>₹<?php echo $order['total_amount']; ?></strong></td></tr>
                </table>
            </div>

            <div class="col-md-6">
                <h5>Shipping Address</h5>
                <p>
                    <strong><?php echo $order['customer_name']; ?></strong><br>
                    <?php echo $order['address']; ?><br>
                    <?php echo $order['city']; ?>, <?php echo $order['state']; ?> - <?php echo $order['pincode']; ?><br>
                    <?php echo $order['country']; ?><br>
                    Phone: <?php echo $order['phone']; ?>
                </p>
            </div>
        </div>

        <h5 class="mt-4">Ordered Products</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php while($item = mysqli_fetch_assoc($items)): ?>
                <tr>
                    <td><img src="admin/product_image/<?php echo $item['image']; ?>" width="70" height="70" style="object-fit:cover;"></td>
                    <td><?php echo $item['product_name']; ?></td>
                    <td><?php echo $item['size']; ?></td>
                    <td><?php echo $item['color']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>₹<?php echo $item['price']; ?></td>
                    <td>₹<?php echo $item['price'] * $item['quantity']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a href="my_orders.php" class="btn btn-dark">Back to My Orders</a>
    </div>
<div class="col-md-12" style="height:30px"></div>
    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#header").load("header.php");
            $("#footer").load("footer.php");
        });
    </script>
</body>
</html>