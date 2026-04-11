<?php 
include 'admin/database.php'; 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
        <div class="row bg19">
            <div class="col-md-12" style="height: 80px;"></div>
            <div class="col-md-4 col-1"></div>
            <div class="col-md-4 col-11 d11 ms-ms-0 ms-3">
                <p class="p68 t-md-0 mt-3">Login</p>

                <form action="" method="post">
                    <p class="p69 mb-0 ms-3 mt-md-3 mt-4">Email</p>
                    <input type="email" class="mt-2 inp3 ms-3" placeholder="   Enter Your Email id" name="ema" required>

                    <p class="p69 mb-0 ms-3 mt-md-3 mt-4">Password</p>
                    <input type="password" class="mt-2 inp3 ms-3" placeholder="   Enter Your Password" name="pas" required>

                    <center><button class="but17 mt-4" type="submit" name="sub">Login</button></center>

                    <div class="col-md-12" style="height: 10px;"></div>
                    <span class="ms-4 mt-5 p70">Don't Have an Account ? | </span>
                    <span><a href="usersignup.php" class="p70">Create Account</a></span>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="height: 50px;"></div>

    <?php
    if (isset($_POST['sub'])) {
        $email    = mysqli_real_escape_string($con, $_POST['ema']);
        $password = $_POST['pas'];

        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
        $res = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($res);

        if ($user && password_verify($password, $user['password'])) {
            
            // Set Session Data
            $_SESSION['user_id']    = $user['id'];
            $_SESSION['user_name']  = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            // Auto Add to Cart (if came from product page)
            if (isset($_SESSION['temp_cart_data'])) {
                $_POST = $_SESSION['temp_cart_data'];
                unset($_SESSION['temp_cart_data']);
                include 'manage_cart.php';
                exit;
            }

            // Redirect to previous page or home
            if (isset($_SESSION['redirect_after_login'])) {
                $redirect = $_SESSION['redirect_after_login'];
                unset($_SESSION['redirect_after_login']);
                header("Location: $redirect");
                exit;
            }

            header("Location: index.php");
            exit;

        } else {
            echo "<script>alert('Invalid Email or Password!');</script>";
        }
    }
    ?>

    <div id="footer"></div>
    <script>
        $(document).ready(function() {
            $("#footer").load("footer.php");
        });
    </script>
</body>
</html>