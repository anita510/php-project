<?php
require_once('config.php');
$user_id=$_GET['user_id'];
$delete=" DELETE FROM `mobile_brand` where id=$user_id";
mysqli_query($conn,$delete);
header("location:view_brand.php?success_msg=2");
?>