<?php 
	session_start();
	//session_destroy();
//session_unset('cart');
unset($_SESSION['cart']);
	header("Location:viewcart.php");
?>