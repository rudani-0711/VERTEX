<?php include 'database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog Upload</title>
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


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12 h500">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Blog Upload</h6>
                            <form method="post" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Blog_Image</label>
                                    <input class="form-control bg-dark" name="blima" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Blog_Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="nam">
                                </div>

                                <div class="mt-4">
                                    <label for="category" class="form-label">Date</label>

                                    <input type="date" id="myDate" class="bg-info" name="dat">

                                    <script>
                                        document.getElementById('myDate').valueAsDate = new Date();
                                    </script>

                                </div>



                                <div class="mb-3 mt-3">
                                    <label for="exampleInputPassword1" class="form-label">Content</label>
                                    <textarea class="form-control h200" id="exampleInputPassword1" name="cont"></textarea>
                                </div>

                                <div class="mt-5">
                                    <button type="submit" class="btn btn-primary col-11 ms-4" name="upl">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['upl'])) {
                        $blog_image = $_FILES['blima']['name'];
                        $blog_name = $_POST['nam'];
                        $dates = $_POST['dat'];
                        $content = $_POST['cont'];


                        $sql = "INSERT INTO `blog`( `blog_image`, `blog_name`, `dates`, `content`) VALUES ('$blog_image','$blog_name','$dates','$content')";


                        $res  = mysqli_query($con, $sql);

                        $ig = "blog_image/";

                        $fil = $ig.basename($_FILES['blima']['name']);


                        $move = move_uploaded_file($_FILES['blima']['tmp_name'], $fil);

                        if ($res) {
                            echo "<script>alert('Blog is Upload Successful')</script>";
                            echo "<script>location.href='blogview.php'</script>";
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