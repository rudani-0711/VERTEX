<?php include 'database.php'?>

<?php
$id=$_GET['id'];
$sql="DELETE FROM `blog` WHERE `id`='$id'";
$del=mysqli_query($con,$sql);
if($del){
    echo"<script>alert('Blog Delete is successfully')</script>";
    echo"<script>location.href='blogview.php'</script>";
}

else{
        echo "<script>alert('Error')</script>";

    }
?>