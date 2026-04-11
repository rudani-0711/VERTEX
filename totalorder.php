<?php 
include 'database.php'; 
session_start();

// Admin Login Protection
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     echo "<script>alert('Please Login as Admin!'); location.href='admin_login.php';</script>";
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Total Orders - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favi.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        
        <!-- Sidebar -->
        <div id="sidebar"></div>
        <script>
            $(document).ready(function() {
                $("#sidebar").load("sidebar.php");
            });
        </script>

        <!-- Content Start -->
        <div class="content">
            
            <!-- Navbar -->
            <div id="header"></div>
            <script>
                $(document).ready(function() {
                    $("#header").load("header.php");
                });
            </script>

            <!-- Orders Table -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">All Orders</h6>
                        <a href="index.php" class="btn btn-sm btn-primary">Back to Dashboard</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Phone</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM `orders` ORDER BY `order_date` DESC";
                                $result = mysqli_query($con, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><strong><?php echo $row['order_id']; ?></strong></td>
                                    <td><?php echo date('d M, Y h:i A', strtotime($row['order_date'])); ?></td>
                                    <td><?php echo $row['customer_name']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><strong>₹<?php echo number_format($row['total_amount'], 2); ?></strong></td>
                                    <td>
                                        <span class="badge bg-<?php echo $row['order_status'] == 'Pending' ? 'warning' : 'success'; ?>">
                                            <?php echo $row['order_status']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="order_details.php?order_id=<?php echo $row['order_id']; ?>" 
                                           class="btn btn-sm btn-primary">View</a>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                } else {
                                    echo "<tr><td colspan='7' class='text-center'>No orders found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div id="footer"></div>
            <script>
                $(document).ready(function() {
                    $("#footer").load("footer.php");
                });
            </script>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>