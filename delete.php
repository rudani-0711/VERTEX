<?php include 'database.php'?>

<?php
$id=$_GET['id'];
$sql="DELETE FROM `shop` WHERE `id`='$id'";
$del=mysqli_query($con,$sql);
if($del){
    echo"<script>alert('Data Delete is successfully')</script>";
    echo"<script>location.href='product.php'</script>";
}

else{
        echo "<script>alert('Error')</script>";

    }
?>