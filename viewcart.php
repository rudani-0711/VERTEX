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
    <title>Your Cart</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="img/favi.png" rel="icon">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Funnel+Display:wght@300..800&family=Foldit:wght@100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                <p class="p76">Your Cart (<?php echo count($_SESSION['cart'] ?? []); ?> Items)</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                <?php if (empty($_SESSION['cart'])): ?>
                    <div class="text-center mt-5">
                        <h4>Your Cart is Empty!</h4>
                        <a href="shop.php" class="btn btn-dark mt-3">Continue Shopping</a>
                    </div>
                <?php else: ?>

                <table class="bg-white table table-bordered table-hover tab ms-md-3 mb-0 mt-4">
                    <thead>
                        <tr>
                            <th class="text-center">Product Image</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Color</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $grand_total = 0;
                        foreach ($_SESSION['cart'] as $key => $item): 
                            $subtotal = $item['price'] * $item['quantity'];
                            $grand_total += $subtotal;
                        ?>
                        <tr>
                            <td class="text-center">
                                <img src="admin/product_image/<?php echo $item['image']; ?>" 
                                     alt="" style="height: 100px; width:100px; object-fit:cover;">
                            </td>
                            <td class="text-center">
                                <p class="mb-0"><strong><?php echo $item['product_name']; ?></strong></p>
                            </td>
                            <td class="text-center"><?php echo $item['size']; ?></td>
                            <td class="text-center"><?php echo $item['color']; ?></td>
                            <td class="text-center">₹<?php echo $item['price']; ?></td>
                            <td class="text-center"><?php echo $item['quantity']; ?></td>
                            <td class="text-center">₹<?php echo $subtotal; ?></td>
                            <td class="text-center">
                                <a href="remove_item.php?key=<?php echo $key; ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Remove this item?')">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php endif; ?>
            </div>

            <!-- Cart Summary -->
            <div class="col-md-4">
                <?php if (!empty($_SESSION['cart'])): ?>
                <div class="d16 mt-4 ms-md-0 ms-2">
                    <div class="row">
                        <div class="col-md-8 col-8">
                            <p class="p77 mt-4 ms-3"><b>SUBTOTAL</b></p>
                        </div>
                        <div class="col-md-4 col-4">
                            <p class="p77 mt-4 ms-3"><b>₹<?php echo $grand_total; ?></b></p>
                        </div>
                    </div>

                    <div class="ms-3">
                        <p class="p77 mb-0">Shipping & taxes calculated at checkout</p>

                        <p class="p77 mt-3 mb-0">
                            <input type="checkbox" required> I agree with the terms and conditions
                        </p>

                        <a href="checkout.php">
                            <button class="but20 ms-2 mt-4">PROCEED TO CHECKOUT</button>
                        </a>

                        

                        
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="height:30px"></div>

    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php");
        });
    </script>
</body>
</html>