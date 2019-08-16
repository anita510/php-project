<?php 
	session_start();
	//session_destroy();
	session_unset();

	//session_unset('admin_id');
	//session_unset('admin_name');
	header("Location:login.php");
?>