<?php 
	require_once('config.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$select="SELECT * FROM `mobile_login` where `username`='$username' && `password`='$password'";
	$query=mysqli_query($conn, $select);
	$rows= mysqli_num_rows($query);
	if($rows>0){
		session_start();
		while($res=mysqli_fetch_assoc($query)){
			$_SESSION['customer_id']=$res['id'];
			$_SESSION['customer_name']=$res['name'];
			header("Location:view_product.php");
		}
	}else{
		header("Location:customer_login.php?login_error=1");
	}
?>
