<?php 
	require_once('config.php');
	$user_id=$_POST['brandeg_id'];
	 $brand=$_POST['brandeg'];
	  $update="UPDATE `mobile_brand` set `brand`='".$brand."' where id=$user_id ";
	 mysqli_query($conn, $update);
	 header("Location:view_brand.php?success_msg=3");
?>