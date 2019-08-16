<?php 
	require_once('config.php');
	$brand_id=$_POST['brand_id'];
    $select="SELECT * FROM `mobile_brand` where `id`=$brand_id";
	$query=mysqli_query($conn, $select);
	$res=mysqli_fetch_assoc($query);
	echo json_encode($res);
?>