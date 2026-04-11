<?php 
session_start(); 
include 'admin/database.php';

$order_id = isset($_GET['order_id']) ? mysqli_real_escape_string($con, $_GET['order_id']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="img/favi.png" rel="icon">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Funnel+Display:wght@300..800&family=Foldit:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div id="header"></div>
    <script>
        $(document).ready(function() {
            $("#header").load("header.php");
        });
    </script>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                
                <div class="mt-5 mb-4">
                    <i class="fa fa-check-circle" style="font-size: 90px; color: #28a745;"></i>
                </div>

                <h1 class="text-success">Thank You!</h1>
                <h3>Your Order Has Been Placed Successfully</h3>
                <p class="lead">Order ID: <strong>#<?php echo $order_id; ?></strong></p>

                <div class="card mt-4">
                    <div class="card-body">
                        <p>We have received your order. Our team will contact you shortly for confirmation.</p>
                        <p><strong>Payment Method:</strong> Cash on Delivery</p>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="index.php" class="btn btn-dark btn-lg">Return to Home</a>
                    <a href="my_orders.php" class="btn btn-outline-dark btn-lg ms-3">View My Orders</a>
                </div>

            </div>
        </div>
    </div>

    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php");
        });
    </script>
</body>
</html>