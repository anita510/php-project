<?php 
	session_start();
	//session_destroy();
		session_unset();
	//session_unset('customer_id');
	//session_unset('customer_name');
	header("Location:customer_login.php");
?>