<?php 
	require_once('config.php');
	$email=$_POST['email'];
	$password=$_POST['password'];
	$select="SELECT * FROM `mobile_adminlogin` where `email`='$email' && `password`='$password'";
	$query=mysqli_query($conn, $select);
	$rows= mysqli_num_rows($query);
	if($rows>0){
		session_start();
		while($res=mysqli_fetch_assoc($query)){
			$_SESSION['admin_id']=$res['id'];
			$_SESSION['admin_name']=$res['name'];
			header("Location:dashboard.php");
		}
	}else{
		header("Location:login.php?login_error=1");
	}
?>