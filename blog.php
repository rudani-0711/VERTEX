<?php include 'admin/database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

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
        <div class="row bg11">
            <div class="col-md-7 col-5"></div>
            <div class="col-md-5 col-7">
                <div class="col-md-12" style="height:130px"></div>
                <p class="p35 mb-0 ms-5 mt-md-0 mt-5 "><b>Style,</b></p>
                <p class="p36 mb-0 ms-5"><b>Tips &</b></p>
                <p class="p37 mb-0 ms-5"><b>More</b></p>
                <p class="p38 ms-5 ms-md-5 col-md-8"><b>Welcome to The VERTEX, your go-to destination for all things fashion.</b></p>
            </div>
        </div>
    </div>


    <div class="col-md-12" style="height:50px"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <?php
                $show = "SELECT * FROM `blog` WHERE 1";

                $id = mysqli_query($con, $show);

                while ($pro = mysqli_fetch_array($id)) {
                ?>
                    <div class="d5 ms-md-3 ms-3 mt-4">
                        <img src="admin/blog_image/<?php echo $pro['blog_image']; ?>" alt="" class="ig5">

                        <a href="" class="p39">
                            <p class="mt-4 mb-0 ms-2"><b><?php echo $pro['blog_name']; ?></b></p>
                        </a>

                        <p class="p40 mt-3 mb-0 ms-2"><b><?php echo $pro['dates']; ?></b></p>

                        <p class="p41 mt-3 ms-2"><?php echo $pro['content']; ?></p>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>


    <div class="col-md-12" style="height:50px"></div>

    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php")
        })
    </script>
</body>

</html>