<?php include 'database.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favi.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div id="sidebar"></div>

        <script>
            $(document).ready(function() {
                $("#sidebar").load("sidebar.php")
            })
        </script>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <div id="header"></div>

            <script>
                $(document).ready(function() {
                    $("#header").load("header.php")
                })
            </script>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product</h6>
                            <div class="table-responsive">

                            
                                <table class="table">
                                    
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Product_Image</th>
                                            <th scope="col">Product_Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Colour</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Action</th>
                                        </tr>

                                        <?php
                                    $show ="SELECT * FROM `shop` WHERE 1";

                                    $id = mysqli_query($con,$show);

                                    while($pro = mysqli_fetch_array($id)){
                                    ?>
                                    
                                    
                                       <tr>
                                        <td><?php echo $pro['id'];?></td>
                                        <td><img src="product_image/<?php echo $pro['product_image'];?>" style="width:100px;height:100px" alt=""></td>
                                        <td><?php echo $pro['product_name'];?></td>
                                        <td><?php echo $pro['category'];?></td>
                                        <td><?php echo $pro['col1'];?>
                                            <?php echo $pro['col2'];?>
                                            <?php echo $pro['col3'];?>
                                        </td>
                                        <td><?php echo $pro['price'];?></td>
                                        <td><?php echo $pro['m_size'];?>
                                            <?php echo $pro['l_size'];?>
                                            <?php echo $pro['xl_size'];?>
                                        </td>
                                        <td><a href="edit.php?id=<?php echo $pro['id'];?>" class="btn btn-info">Edit</a>
                                        <a href="delete.php?id=<?php echo $pro['id'];?>" class="btn btn-danger">Delete</a></td>
                                    </tr>

                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
            <div id="footer"></div>

            <script>
                $(document).ready(function() {
                    $("#footer").load("footer.php")
                })
            </script>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>