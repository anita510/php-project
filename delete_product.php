<?php
require_once('config.php');
$user_id=$_GET['user_id'];
$select="SELECT * FROM `mobile_product` WHERE id=$user_id";
$query1=mysqli_query($conn,$select);
$row1=mysqli_fetch_assoc($query1);
$imagename=$row1["image"];
$path="images/".$imagename;
unlink($path);
$delete=" DELETE FROM `mobile_product` where id=$user_id";
mysqli_query($conn,$delete);
header("location:viewproduct_admin.php?success_msg=4");
?>