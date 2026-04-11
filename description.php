<?php 
include 'admin/database.php'; 
session_start(); 

$id = isset($_GET['id']) ? mysqli_real_escape_string($con, $_GET['id']) : 0;

$query = "SELECT * FROM `shop` WHERE `id` = '$id'";
$result = mysqli_query($con, $query);
$pro = mysqli_fetch_assoc($result);

if (!$pro) {
    echo "<h2 class='text-center mt-5'>Product not found!</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pro['product_name']; ?> - Description</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="img/favi.png" rel="icon">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Funnel+Display:wght@300..800&family=Foldit:wght@100..900&display=swap" rel="stylesheet">

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

    <div class="col-md-12" style="height:130px"></div>

    <div class="container-fluid">
        <div class="row bg18">
            
            <!-- Left Side - Images -->
            <div class="col-md-6">
                <!-- Main Big Image -->
                <img id="mainImage" src="admin/product_image/<?php echo $pro['product_image']; ?>" 
                     alt="" class="ig7">

                <!-- Thumbnail Images -->
                <div class="row mt-3">
                    <div class="col-md-3 col-3">
                        <img src="admin/product_image/<?php echo $pro['one_another_colour']; ?>" 
                             onclick="changeImage(this)" 
                             alt="" class="ig8 thumbnail" style="cursor:pointer; border: 1px solid #000;">
                    </div>
                    <div class="col-md-3 col-3">
                        <img src="admin/product_image/<?php echo $pro['two_another_colour']; ?>" 
                             onclick="changeImage(this)" 
                             alt="" class="ig8 thumbnail" style="cursor:pointer;">
                    </div>
                    <div class="col-md-3 col-3">
                        <img src="admin/product_image/<?php echo $pro['three_another_colour']; ?>" 
                             onclick="changeImage(this)" 
                             alt="" class="ig8 thumbnail" style="cursor:pointer;">
                    </div>
                </div>
            </div>

            <!-- Right Side - Product Info -->
            <div class="col-md-6">
                <p class="p58 mb-0 mt-md-3"><?php echo $pro['category']; ?></p>
                <p class="p55 mb-0 mt-2"><b><?php echo $pro['product_name']; ?></b></p>
                <p class="p57 mb-0 mt-2"><b>₹<?php echo $pro['price']; ?></b></p>
                
                <p class="p58 mt-3"><?php echo $pro['description']; ?></p>

                <!-- Size Selection -->
                <div class="mt-4">
                    <span><button class="but4 ms-md-0 ms-3 mt-md-4 mt-3" onclick="selectSize('<?php echo $pro['m_size']; ?>', this)"><?php echo $pro['m_size']; ?></button></span>
                    <span><button class="but4 ms-2" onclick="selectSize('<?php echo $pro['l_size']; ?>', this)"><?php echo $pro['l_size']; ?></button></span>
                    <span><button class="but4 ms-2" onclick="selectSize('<?php echo $pro['xl_size']; ?>', this)"><?php echo $pro['xl_size']; ?></button></span>
                </div>

                <!-- Color Buttons - Now also change main image -->
                <div class="mt-3 mt-md-4">
                    <span><button class="but5 ms-md-0 ms-3" onclick="selectColorAndImage('<?php echo $pro['col1'];?>', this, '<?php echo $pro['one_another_colour']; ?>')"><?php echo $pro['col1'];?></button></span>
                    <span><button class="but6 ms-2" onclick="selectColorAndImage('<?php echo $pro['col2'];?>', this, '<?php echo $pro['two_another_colour']; ?>')"><?php echo $pro['col2'];?></button></span>
                    <span><button class="but7 ms-2" onclick="selectColorAndImage('<?php echo $pro['col3'];?>', this, '<?php echo $pro['three_another_colour']; ?>')"><?php echo $pro['col3'];?></button></span>
                </div>

                <!-- Add to Cart -->
                <div class="mt-4">
                    <form action="manage_cart.php" method="post">
                        <input type="number" name="quantity" value="1" min="1" style="width: 60px;" class="ms-3 ms-md-0">

                        <input type="hidden" name="product_id" value="<?php echo $pro['id']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $pro['product_name']; ?>">
                        <input type="hidden" name="price" value="<?php echo $pro['price']; ?>">
                        <input type="hidden" name="product_image" id="selected_image" value="<?php echo $pro['product_image']; ?>">

                        <input type="hidden" name="selected_size" id="selected_size" value="">
                        <input type="hidden" name="selected_color" id="selected_color" value="">

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <button type="submit" name="carted" class="but16 ms-3">ADD TO CART</button>
                        <?php else: ?>
                            <button type="button" onclick="requireLogin()" class="but16 ms-3">ADD TO CART</button>
                        <?php endif; ?>
                    </form>
                </div>

                <hr>

                <div class="row mt-md-0 mt-4">
                    <div class="col-md-1 col-6"><button class="icon8"><i class="fa fa-check"></i></button></div>
                    <div class="col-md-11 col-6"><p class="p62"><b>No-Risk</b></p></div>

                    <div class="col-md-1 col-6"><button class="icon8"><i class="fa fa-check"></i></button></div>
                    <div class="col-md-11 col-6"><p class="p62"><b>Easy Replacement</b></p></div>

                    <div class="col-md-1 col-6"><button class="icon8"><i class="fa fa-check"></i></button></div>
                    <div class="col-md-11 col-6"><p class="p62"><b>Secure Payment</b></p></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="height: 30px;"></div>
    <hr>

    <div class="container-fluid">
        <p class="ms-3 p57"><b>Description</b></p>
        <p class="ms-3 p58"><?php echo $pro['description']; ?></p>
    </div>

    <div class="col-md-12" style="height: 50px;"></div>

    <div id="footer"></div>

    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php");
        });

        // Change Main Image Function
        function changeImage(thumbnail) {
            document.getElementById('mainImage').src = thumbnail.src;
            $(".thumbnail").css("border", "1px solid #ccc");
            $(thumbnail).css("border", "1px solid black");
        }

        // Color Button Click - Change Image + Color Value
        function selectColorAndImage(color, btn, imageName) {
            // Change main image
            document.getElementById('mainImage').src = "admin/product_image/" + imageName;
            
            // Update hidden field for cart
            document.getElementById('selected_color').value = color;
            document.getElementById('selected_image').value = imageName;

            // Highlight selected color button
            $(".but5, .but6, .but7").css("outline", "none");
            $(btn).css("outline", "1px solid black");
        }

        function selectSize(val, btn) {
            document.getElementById('selected_size').value = val;
            $(".but4").css("border", "1px solid #ccc");
            $(btn).css("border", "1px solid black");
        }

        function requireLogin() {
            alert("Please Login to Add this product to Cart!");
            window.location.href = "userlogin.php";
        }
    </script>

</body>
</html>