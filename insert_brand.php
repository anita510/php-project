<?php
require_once('config.php');
$brand=$_POST['brand'];
$insert="INSERT INTO `mobile_brand` (`brand`) values ('$brand')";
mysqli_query($conn,$insert);
header("location:brand.php?success_msg=1");
?>