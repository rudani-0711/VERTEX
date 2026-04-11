<?php 
include 'admin/database.php'; 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

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
            <div class="col-md-12" style="height: 100px;"></div>
            <div class="col-md-3 col-1"></div>
            <div class="col-md-6 col-11 d10 ms-ms-0 ms-3">
                <p class="p68 t-md-0 mt-3">Create Account</p>

                <form action="" method="post">
                    <p class="p69 mb-0 ms-3">Name</p>
                    <input type="text" class="mt-2 inp3 ms-3" placeholder="   Enter Your Name" name="nam" required>

                    <p class="p69 mb-0 ms-3 mt-md-3 mt-4">Email</p>
                    <input type="email" class="mt-2 inp3 ms-3" placeholder="   Enter Your Email id" name="ema" required>

                    <p class="p69 mb-0 ms-3 mt-md-3 mt-4">Mobile Number</p>
                    <input type="number" class="mt-2 inp3 ms-3" placeholder="   Enter Your Mobile number" name="numb">

                    <p class="p69 mb-0 ms-3 mt-md-3 mt-4">Password</p>
                    <input type="password" class="mt-2 inp3 ms-3" placeholder="   Enter Your Password" name="pas" required>

                    <center><button class="but17 mt-4" type="submit" name="sub">Create Account</button></center>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="height: 80px;"></div>

    <?php
    if (isset($_POST['sub'])) {
        $name     = mysqli_real_escape_string($con, $_POST['nam']);
        $email    = mysqli_real_escape_string($con, $_POST['ema']);
        $number   = mysqli_real_escape_string($con, $_POST['numb']);
        $password = password_hash($_POST['pas'], PASSWORD_DEFAULT);

        // Check if email already exists
        $check = mysqli_query($con, "SELECT * FROM `user` WHERE `email`='$email'");
        
        if (mysqli_num_rows($check) > 0) {
            echo "<script>alert('Email already registered!');</script>";
        } else {
            $sql = "INSERT INTO `user`(`name`, `email`, `number`, `password`) 
                    VALUES ('$name','$email','$number','$password')";

            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Signup Successful! Please Login.');</script>";
                echo "<script>location.href='userlogin.php';</script>";
            } else {
                echo "<script>alert('Error in registration!');</script>";
            }
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