<?php include 'admin/database.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="main.css">

    <link href="img/favi.png" rel="icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div id="header"></div>
    <script>
        $(document).ready(function() {
            $("#header").load("header.php")
        })
    </script>

    <div class="col-md-12" style="height:130px"></div>

    <div class="container-fluid">
        <div class="row">
            <a href="shop.php" class="p30">
                <p class="ms-md-4"><b>Shop</b></p>
            </a>
            <hr>

            <div class="col-md-10 col-7">
                <p class="p31 ms-md-4">Showing 1–12 of 16 results</p>
            </div>

            <div class="col-md-2 col-5">
                <div class="dropdown">
                    <div class="btn-group">
                        <div data-bs-toggle="dropdown"><a href="" class="but12">Sort By Latest</a></div>
                        <div class="dropdown-toggle ms-3" data-bs-toggle="dropdown"></div>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Sort by Popularity</a></li>
                            <li><a href="" class="dropdown-item">Sort by Average Rating</a></li>
                            <li><a href="" class="dropdown-item">Sort by Latest</a></li>
                            <li><a href="" class="dropdown-item">Sort by Price : Low to High</a></li>
                            <li><a href="" class="dropdown-item">Sort by Price : High to Low</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container-fluid">
        <div class="row">
            <?php
            $show = "SELECT * FROM `shop` WHERE `category`='MEN'";

                $id = mysqli_query($con, $show);

                while ($pro = mysqli_fetch_array($id)) {
                ?>
            
            <div class="col-md-3 col-6">
                <a href="description.php?id=<?php echo $pro['id'];?>"><img src="admin/product_image/<?php echo $pro['product_image'];?>" alt="" class="ig4 mt-md-5 mt-4"></a>
                <a href="description.php?id=<?php echo $pro['id'];?>" class="p32"><p class="ms-3 mt-3 mb-0"><?php echo $pro['product_name'];?></p></a>
                <p class="p33 ms-3 mt-0 mb-0"><?php echo $pro['category'];?></p>
                <p class="p34 ms-3 mt-2"><b>₹<?php echo $pro['price'];?></b></p>
                <div>
                    <span><button class="but4 ms-3"><?php echo $pro['m_size'];?></button></span>
                    <span><button class="but4 ms-2"><?php echo $pro['l_size'];?></button></span>
                    <span><button class="but4 ms-2"><?php echo $pro['xl_size'];?></button></span>
                </div>

                <div class="mt-3">
                    <span><button class="but5 ms-3"><?php echo $pro['col1'];?></button></span>
                    <span><button class="but6 ms-2"><?php echo $pro['col2'];?></button></span>
                    <span><button class="but7 ms-2"><?php echo $pro['col3'];?></button></span>
                </div>
  
            </div>
            
            <?php } ?>
        </div>
    </div>



    <div class="col-md-12" style="height:80px"></div>

    <div>
        <ul class="pagination ms-md-4">
            <li class="page-item active"><a href="" class="page-link">1</a></li>
            <li class="page-item"><a href="" class="page-link">2</a></li>
            <li class="page-item"><a href="" class="page-link">3</a></li>
            <li class="page-item"><a href="" class="page-link">></a></li>
        </ul>
    </div>

    


    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php")
        })
    </script>
</body>

</html>