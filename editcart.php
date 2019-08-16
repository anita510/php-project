<?php
session_start();
$name = $_POST['name0'];
$price = $_POST['name1'];
$quantity = $_POST['name2'];
$event = $_POST['event'];
$product = array($name,$price,$quantity);
if($event == "Update"){
	$_SESSION['cart'][$name] = $product;
}
elseif ($event == "Delete") {
	unset($_SESSION['cart'][$name]);//destroy only selected session
//session_destroy();
}
header("location:viewcart.php");
?>