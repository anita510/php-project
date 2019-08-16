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
	$pincode=$_POST['pincode'];
    $insert="INSERT INTO `mobile_customerdetails` (`firstname`,`middlename`,`lastname`,`contact`,`city`,`address`,`pincode`) values ('$firstname','$middlename','$lastname','$contact','$city','$address','$pincode')";
mysqli_query($conn,$insert);
header("location:checkout.php?success_msg=10");
?>