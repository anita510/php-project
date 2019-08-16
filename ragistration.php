<?php 
	require_once('config.php');
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$username=$_POST['username'];	
	$password=$_POST['password'];
	$pincode=$_POST['pincode'];
    $insert="INSERT INTO `mobile_login` (`firstname`,`middlename`,`lastname`,`gender`,`email`,`contact`,`city`,`address`,`username`,`password`,`pincode`) values ('$firstname','$middlename','$lastname','$gender','$email','$contact','$city','$address','$username','$password','$pincode')";
mysqli_query($conn,$insert);
header("location:customer_login.php?success_msg=10");
?>