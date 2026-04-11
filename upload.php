<?php include 'database.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upload</title>
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
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
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


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12 h600">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Upload</h6>
                            <form method="post" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Product_Image</label>
                                    <input class="form-control bg-dark" name="ima" type="file" id="formFileMultiple" multiple  required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product_Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="nam" required>
                                </div>
                                
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="category" name="cat"  required>
                                    <option selected>Select the Category</option>
                                    <option value="MEN">MEN</option>
                                    <option value="WOMEN">WOMEN</option>
                                    <option value="KID">KID</option>
                                    <option value="ACCESSOIRIES">ACCESSOIRIES</option>
                                </select>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Price</label>
                                    <input type="Text" class="form-control" id="exampleInputPassword1" name="pri"  required>
                                </div>

                                <div><label class="form-label mb-0 mt-3">Size</label></div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="M" name="m"  required>
                                    <label class="form-check-label" for="inlineCheckbox1">M</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="L" name="l"  required>
                                    <label class="form-check-label" for="inlineCheckbox2">L</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="XL" name="xl"  required>
                                    <label class="form-check-label" for="inlineCheckbox3">XL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="XXL" name="xxl">
                                    <label class="form-check-label" for="inlineCheckbox4">XXL</label>
                                </div>

                                <div><label class="form-label mb-0 mt-3">colour</label></div>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-control w-50" type="text" id="inlineCheckbox1" name="col1" placeholder="Colour 1" required>
                                    <input class="form-control w-50 mt-2" type="text" id="inlineCheckbox2" name="col2" placeholder="Colour 2" required>
                                    <input class="form-control w-50 mt-2" type="text" id="inlineCheckbox2" name="col3" placeholder="Colour 3" required>
                                </div>

                                <div class="mt-4">
                                    <label for="formFileMultiple" class="form-label mt-2">Image (Another Colour:1)</label>
                                    <input class="form-control bg-dark mt-3" name="anima" type="file" id="formFileMultiple" multiple  required>
                                </div>

                                <div class="mt-4">
                                    <label for="formFileMultiple" class="form-label mt-2">Image (Another Colour:2)</label>
                                    <input class="form-control bg-dark mt-3" name="animaa" type="file" id="formFileMultiple" multiple  required>
                                </div>

                                <div class="mt-4">
                                    <label for="formFileMultiple" class="form-label mt-2">Image (Another Colour:3)</label>
                                    <input class="form-control bg-dark mt-3" name="animaaa" type="file" id="formFileMultiple" multiple  required>
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <textarea class="form-control h200" id="exampleInputPassword1" name="des" required></textarea>
                                </div>

                                <div class="mt-5">
                                    <button type="submit" class="btn btn-primary col-11 ms-4" name="upl">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    if(isset($_POST['upl'])){
                        $product_image =$_FILES['ima']['name'];
                        $product_name = $_POST['nam'];
                        $category = $_POST['cat'];
                        $price = $_POST['pri'];
                        $m_size = $_POST['m'];
                        $l_size = $_POST['l'];
                        $xl_size = $_POST['xl'];
                        $col1 = $_POST['col1'];
                        $col2 = $_POST['col2'];
                        $col3 = $_POST['col3'];
                        $one_another_colour = $_FILES['anima']['name'];
                        $two_another_colour = $_FILES['animaa']['name'];
                        $three_another_colour = $_FILES['animaaa']['name'];
                        $description =$_POST['des'];


                        $sql ="INSERT INTO `shop`(`product_image`, `product_name`, `category`, `price`, `m_size`, `l_size`, `xl_size`, `description`, `one_another_colour`, `two_another_colour`, `three_another_colour`, `col1`, `col2`, `col3`) VALUES ('$product_image','$product_name','$category','$price','$m_size','$l_size','$xl_size','$description','$one_another_colour','$two_another_colour','$three_another_colour','$col1','$col2','$col3')";


                        $res  = mysqli_query($con,$sql);

                        $ig = "product_image/";

                        $fil = $ig.basename($_FILES['ima']['name']);
                        $filo = $ig.basename($_FILES['anima']['name']);
                        $filt = $ig.basename($_FILES['animaa']['name']);
                        $filtt = $ig.basename($_FILES['animaaa']['name']);

                        $move = move_uploaded_file($_FILES['ima']['tmp_name'],$fil);
                        $movo = move_uploaded_file($_FILES['anima']['tmp_name'],$filo);
                        $movt = move_uploaded_file($_FILES['animaa']['tmp_name'],$filt);
                        $movtt = move_uploaded_file($_FILES['animaaa']['tmp_name'],$filtt);


                        if ($res) {
                            echo"<script>alert('Product is Upload Successful')</script>";
                            echo"<script>location.href='product.php'</script>";
                        } else {
                            echo "<script>alert('error')</script>";
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- Form End -->


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