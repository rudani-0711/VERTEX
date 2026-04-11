<?php 
include 'admin/database.php'; 
session_start();
include 'auth_check.php';   // Force Login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="img/favi.png" rel="icon">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div id="header"></div>
    <script>
        $(document).ready(function() {
            $("#header").load("header.php");
        });
    </script>

    <div class="container mt-5">
        <div class="col-md-12" style="height:50px"></div>
        <h2 class="p76">My Orders</h2>

        <?php
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM `orders` WHERE `user_id` = '$user_id' ORDER BY `order_date` DESC";
        $result = mysqli_query($con, $sql);
        ?>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <table class="table table-bordered table-hover mt-4">
                <thead class="table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><strong><?php echo $row['order_id']; ?></strong></td>
                        <td><?php echo date('d M, Y h:i A', strtotime($row['order_date'])); ?></td>
                        <td><strong>₹<?php echo $row['total_amount']; ?></strong></td>
                        <td>
                            <span class="badge bg-<?php echo $row['order_status'] == 'Pending' ? 'warning' : 'success'; ?>">
                                <?php echo $row['order_status']; ?>
                            </span>
                        </td>
                        <td>
                            <a href="order_details.php?order_id=<?php echo $row['order_id']; ?>" 
                               class="btn btn-primary btn-sm">View Details</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="text-center mt-5">
                <h4>You have no orders yet.</h4>
                <a href="shop.php" class="btn btn-dark mt-3">Start Shopping</a>
            </div>
        <?php endif; ?>
    </div>

    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php");
        });
    </script>
</body>
</html>