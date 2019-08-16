<?php 
	require_once('config.php');
	$nm=$_POST['nm'];
	$cv=$_POST['cv'];
	$cardnumber=$_POST['cardnumber'];
	$month=$_POST['month'];
	$year=$_POST['year'];


	$insert="INSERT INTO `mobile_credit` (`nm`,`cv`,`cardnumber`,`month`,`year`) values ('$nm','$cv','$cardnumber','$month','$year')";
	
mysqli_query($conn,$insert);
header("location:checkout.php?success_msg=21");
?>