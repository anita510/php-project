<?php
session_start();
$name=$_POST['hidden_name'];
$price=$_POST['hidden_price'];
$quantity=$_POST['quantity'];
$product=array($name,$price,$quantity);
//print_r($product);
$_SESSION['cart'][$name] = $product;
header("location:viewcart.php");
?>
     
        
        
      