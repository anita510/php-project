<?php 
	require_once('config.php');
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$insert="INSERT INTO `mobile_adminlogin` (`name`,`gender`,`email`,`password`) values ('$name','$gender','$email','$password')";
mysqli_query($conn,$insert);
header("location:login.php?success_msg=100");
?>