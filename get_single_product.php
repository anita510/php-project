<?php 
	require_once('config.php');
	$prod_id=$_POST['prod_id'];
    $select="SELECT * FROM `mobile_product` where `id`=$prod_id";
	$query=mysqli_query($conn, $select);
	$res=mysqli_fetch_assoc($query);
	echo json_encode($res);
?>