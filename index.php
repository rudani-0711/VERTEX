<?php include 'admin/database.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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




    <div class="container-fluid">
        <div class="row bg1">
            <div class="bg2">
                <div class="col-md-12" style="height: 150px;"></div>

                <center>
                    <p class="p4 col-md-6 col-12 mb-0"><b>Timeless Fashion for the Modern Wardrobe</b></p>

                    <div class="col-md-12" style="height: 40px;"></div>

                    <p class="p5 col-md-6 col-12 mb-0">Discover timeless fashion for Men, Women, and Kids – crafted for comfort, designed for confidence.</p>

                    <div class="col-md-12" style="height: 60px;"></div>

                    <a href="shop.php"><button class="but2">EXPLORE THE COLLECTION</button></a>
                </center>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d1">
            <div class="col-md-12" style="height: 20px;"></div>

            <div class="col-md-9">
                <p class="p6 ms-md-5 mb-0"><b>New Arrivals</b></p>

                <p class="p7 ms-md-5 mt-3">Be the first to wear this season’s latest looks. Handpicked and freshly styled.</p>
            </div>

            <div class="col-md-3">
                <a href=""><button class="but3 mt-3">SEE WHAT'S NEW</button></a>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="height: 30px;"></div>

    <div class="container-fluid">
        <div class="row">
             <?php
            $show = "SELECT * FROM `shop` WHERE `category`='MEN'";

                $id = mysqli_query($con, $show);

                while ($pro = mysqli_fetch_array($id)) {
                ?>
            <div class="col-md-3 col-6">
                <a href="description.php?id=<?php echo $pro['id'];?>"><img src="admin/product_image/<?php echo $pro['product_image'];?>" alt="" class="ig ms-md-4 ms-3"></a>
                <a href="description.php?id=<?php echo $pro['id'];?>" class="p8"><p class="p8 ms-3 ms-md-4 mt-3 mb-0"><?php echo $pro['product_name'];?></p></a>
                <p class="p9 ms-3 ms-md-4 mt-1 mb-0"><?php echo $pro['category'];?></p>
                <p class="p10 ms-3 ms-md-4 mt-1"><b><del>₹600</del> ₹<?php echo $pro['price'];?></b></p>
                <div>
                    <span><button class="but4 ms-3 ms-md-4"><?php echo $pro['m_size'];?></button></span>
                    <span><button class="but4 ms-2"><?php echo $pro['l_size'];?></button></span>
                    <span><button class="but4 ms-2"><?php echo $pro['xl_size'];?></button></span>
                </div>

                <div class="mt-3">
                    <span><button class="but5 ms-3 ms-md-4"><?php echo $pro['col1'];?></button></span>
                    <span><button class="but6 ms-2"><?php echo $pro['col2'];?></button></span>
                    <span><button class="but7 ms-2"><?php echo $pro['col3'];?></button></span>
                </div>
            </div>

            <?php } ?>
            
        </div>
    </div>

    <div class="col-md-12" style="height: 50px;"></div>



    <div class="container-fluid bg3">

        <div class="col-md-12" style="height: 80px;"></div>

        <p class="p11 mb-0"><b>Our Categories</b></p>

        <p class="p12 mt-2 mb-0">Explore a wide range of styles, handpicked to suit every taste and need.</p>

        <div class="row mt-2">
            <div class="col-md-6">
                <img src="img/3.jpg" alt="" class="ig1 mt-4 col-12">
                <center>
                    <div class="d2 ms-5">
                        <p class="p8 mb-0 mt-3"><b>MEN'S WEAR</b></p>
                        <a href="shop.php" class="p13">
                            <p class="mt-2">Shop Now</p>
                        </a>
                    </div>
                </center>
            </div>

            <div class="col-md-6 mt-5 mt-md-0 mb-0">
                <img src="img/4.jpg" alt="" class="ig1 mt-4 col-12">
                <center>
                    <div class="d2 ms-5">
                        <p class="p8 mb-0 mt-3"><b>WOMEN'S WEAR</b></p>
                        <a href="shop.php" class="p13">
                            <p class="mt-2">Shop Now</p>
                        </a>
                    </div>
                </center>
            </div>

            <div class="col-md-12" style="height: 60px;"></div>


            <div class="col-md-6">
                <img src="img/5.jpg" alt="" class="ig1 mt-4 col-12">
                <center>
                    <div class="d2 ms-5">
                        <p class="p8 mb-0 mt-3"><b>KID'S WEAR</b></p>
                        <a href="shop.php" class="p13">
                            <p class="mt-2">Shop Now</p>
                        </a>
                    </div>
                </center>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
                <img src="img/6.jpg" alt="" class="ig1 mt-4 col-12">
                <center>
                    <div class="d2 ms-5">
                        <p class="p8 mb-0 mt-3"><b>ACCESSORIES</b></p>
                        <a href="shop.php" class="p13">
                            <p class="mt-2">Shop Now</p>
                        </a>
                    </div>
                </center>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <p class="p14 mt-5 mb-0"><b>Bestsellers</b></p>

        <center>
            <p class="p15 col-md-6 mt-3">From cult-favorite jackets to must-have dresses – These are our customer faves.</p>
        </center>


        <div class="row mt-5">
             <?php
            $show = "SELECT * FROM `shop` WHERE `category`='MEN'";

                $id = mysqli_query($con, $show);

                while ($pro = mysqli_fetch_array($id)) {
                ?>
            <div class="col-md-3 col-6">
                <a href="description.php?id=<?php echo $pro['id'];?>"><img src="admin/product_image/<?php echo $pro['product_image'];?>" alt="" class="ig ms-md-4 ms-3"></a>
                <a href="description.php?id=<?php echo $pro['id'];?>" class="p8"><p class="ms-3 ms-md-4 mt-3 mb-0"><?php echo $pro['product_name'];?></p></a>
                <p class="p9 ms-3 ms-md-4 mt-1 mb-0"><?php echo $pro['category'];?></p>
                <p class="p10 ms-3 ms-md-4 mt-1"><b><del>₹600</del> ₹<?php echo $pro['price'];?></b></p>
                <div>
                    <span><button class="but4 ms-3 ms-md-4"><?php echo $pro['m_size'];?></button></span>
                    <span><button class="but4 ms-2"><?php echo $pro['l_size'];?></button></span>
                    <span><button class="but4 ms-2"><?php echo $pro['xl_size'];?></button></span>
                </div>

                <div class="mt-3">
                    <span><button class="but5 ms-3 ms-md-4"><?php echo $pro['col1'];?></button></span>
                    <span><button class="but6 ms-2"><?php echo $pro['col2'];?></button></span>
                    <span><button class="but7 ms-2"><?php echo $pro['col3'];?></button></span>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

    <div class="col-md-12" style="height: 60px;"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <img src="img/1.jpg" alt="" class="ig2 mt-md-4 pd-0">

            </div>
            <div class="col-md-6 bg4">
                <div class="col-md-12" style="height: 80px;"></div>

                <div class="d3">
                    <p class="ms-5 p16 mt-5"><b>The Exclusive Premium Shirts - Starting at just ₹399</b></p>

                    <p class="p17 mb-0 col-10 ms-5">Crafted for comfort, designed for impact — this is the outerwear piece that’s redefining everyday style. Our best-selling jacket brings warmth, versatility, and edge to any outfit.</p>

                    <a href=""><button class="but8 ms-5 mt-4">SHOP THE EXCLUSIVE SHIRT'S</button></a>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row bg5">
            <div class="bg6">
                <div class="col-md-12" style="height: 200px;"></div>
                <p class="p18 mb-0"><b>Hurry Up! Get Up to 20% Off</b></p>
                <p class="p19 mt-3">Step into summer with sun-ready styles at can't-miss prices.</p>

                <div class="col-md-12" style="height: 70px;"></div>

                <div class="countdown mar">
                    <div class="box">
                        <span id="dy" class="num">00</span>
                        <span class="lab">DAYS</span>
                    </div>
                    <div class="box">
                        <span id="hr" class="num">20</span>
                        <span class="lab">HOURS</span>
                    </div>
                    <div class="box">
                        <span id="min" class="num">47</span>
                        <span class="lab">MINS</span>
                    </div>
                    <div class="box">
                        <span id="sec" class="num">29</span>
                        <span class="lab">SEC</span>
                    </div>
                </div>

                <script>
                    const target = new Date("April 15, 2026 23:59:59").getTime();

                    function runCountdown() {
                        const now = new Date().getTime();
                        const diff = target - now;

                        if (diff > 0) {
                            const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                            const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                            const s = Math.floor((diff % (1000 * 60)) / 1000);


                            document.getElementById("dy").innerText = d.toString().padStart(2, '0');
                            document.getElementById("hr").innerText = h.toString().padStart(2, '0');
                            document.getElementById("min").innerText = m.toString().padStart(2, '0');
                            document.getElementById("sec").innerText = s.toString().padStart(2, '0');
                        }
                    }

                    setInterval(runCountdown, 1000);
                    runCountdown();
                </script>

                <center><a href="shop.php"><button class="but11 mt-5">SHOP THE SUMMER SALE</button></a></center>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row bg7">
            <div class="col-md-12" style="height: 80px;"></div>

            <p class="p20 mb-0"><b>How It Works</b></p>
            <p class="p21 mt-4">Just Pick, Pack and Ship</p>

            <div class="container-fluid">
                <div class="row bg8 mt-md-5 mt-3">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4 col-4">
                                <div class="col-md-12" style="height: 80px;"></div>
                                <button class="but9 ms-4"><i class="fa fa-shopping-bag icon3" aria-hidden="true"></i></button>
                            </div>

                            <div class="col-md-8 col-8">
                                <p class="p22 ms-2 mb-0 mt-5"><b>Shop Styles</b></p>
                                <p class="p23 ms-2 mt-2">Browse our curated collections for Men, Women, Kids & Accessories.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4 col-4">
                                <div class="col-md-12" style="height: 80px;"></div>
                                <button class="but9 ms-4"><i class="fa fa-clock-o icon3" aria-hidden="true"></i></button>
                            </div>

                            <div class="col-md-8 col-8">
                                <p class="p22 ms-2 mb-0 mt-5"><b>Pick Your Fit</b></p>
                                <p class="p23 ms-2 mt-2">Find your perfect size with our detailed fit guides and style notes for every piece.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4 col-4">
                                <div class="col-md-12" style="height: 80px;"></div>
                                <button class="but9 ms-4"><i class="fa fa-check icon3" aria-hidden="true"></i></button>
                            </div>

                            <div class="col-md-8 col-8">
                                <p class="p22 ms-2 mb-0 mt-5"><b>Checkout Fast</b></p>
                                <p class="p23 ms-2 mt-2">Enjoy a quick and secure checkout experience with flexible payment options.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row bg9">
            <div class="col-md-12" style="height: 80px;"></div>
            <p class="p24 mb-0"><b>Get 10% Off on Your First Order</b></p>
            <p class="p25 mt-md-2 mt-4">Plus exclusive access to product drops, style tips, and insider deals.</p>

            <div class="col-md-12" style="height: 50px;"></div>
            <form action="" method="post">
                <span><input type="email" placeholder="Enter Your Email ID *" name="ema" class="inp mt-md-3 mt-5"></span>
                <span><button class="but10 mt-md-0 mt-3 ms-md-2" name="subscribe">SUBSCRIBE</button></span>
            </form>


            <div class="col-md-3 col-6">
                <img src="img/8.jpg" alt="" class="ig3 ms-md-4 mt-md-5 mt-5 ms-3">
            </div>

            <div class="col-md-3 col-6">
                <img src="img/9.jpg" alt="" class="ig3 ms-md-3 mt-md-5 mt-5 ms-3">
            </div>

            <div class="col-md-3 col-6">
                <img src="img/10.jpg" alt="" class="ig3 ms-md-3 mt-md-5 mt-5 ms-3">
            </div>

            <div class="col-md-3 col-6">
                <img src="img/11.jpg" alt="" class="ig3 ms-md-3 mt-md-5 mt-5 ms-3">
            </div>



            <div class="col-md-12" style="height: 50px;"></div>


            <div class="row">
                <div class="col-md-4 col-1"></div>

                <div class="col-md-8 col-11">
                    <div class="social-container ms-md-5 ms-2">
                        <span>
                            <i class="fa fa-instagram icon4" aria-hidden="true"></i>
                            <p class="p26"><b>Follow us</b></p>
                        </span>
                        <span>
                            <p><a href="https://www.instagram.com/wearvertex.in?igsh=ZjRoNjN1OHpjZmpx" class="p27">@wearvertex.in</a></p>
                        </span>
                    </div>
                </div>
            </div>


        </div>
    </div>

    


    <div class="container-fluid">
        <div class="row bg10">
            <div class="col-md-3">
                <div class="col-md-12" style="height: 70px;"></div>
                <center><i class="fa fa-truck icon5" aria-hidden="true"></i></center>

                <p class="p28 mb-0 mt-3"><b>Free Standard Delivery</b></p>

                <p  class="p29 mt-2">On all Orders Over ₹1000</p>
            </div>


            <div class="col-md-3">
                <div class="col-md-12" style="height: 70px;"></div>
                <center><i class="fa fa-cube icon5" aria-hidden="true"></i></center>

                <p class="p28 mb-0 mt-3"><b>Quick Delivery</b></p>

                <p  class="p29 mt-2">Delivery within 7 Days across Gujarat</p>
            </div>


            <div class="col-md-3">
                <div class="col-md-12" style="height: 70px;"></div>
                <center><i class="fa fa-credit-card-alt icon5" aria-hidden="true"></i></center>

                <p class="p28 mb-0 mt-3"><b>Secure Payments</b></p>

                <p  class="p29 mt-2">Secure Payment Methods</p>
            </div>


            <div class="col-md-3">
                <div class="col-md-12" style="height: 70px;"></div>
                <center><i class="fa fa-headphones icon5" aria-hidden="true"></i></center>

                <p class="p28 mb-0 mt-3"><b>Top Rated Customer Service</b></p>

                <p  class="p29 mt-2">Quick Responses & Solutions</p>
            </div>
        </div>
    </div>




    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php")
        })
    </script>
</body>

</html>