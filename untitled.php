<?php 
	require_once('config.php');
	$user_id=$_POST['categ_id'];
	 $category=$_POST['categ'];
	  $update="UPDATE `mobile_brand` set `brand`='".$brand."' where id=$user_id ";
	 mysqli_query($conn, $update);
	 header("Location:view_brand.php?success_msg=3");
?>