<?php
require_once('config.php');
$name=$_POST['name'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$os=$_POST['os'];
$ram=$_POST['ram'];
$color=$_POST['color'];
$description=$_POST['description'];
$file_name=$_FILES['image']['name'];
$d=Date('Ymdhis');
$img_array=explode('.',$file_name);  //The explode() function breaks a string into an array.
$ext=$img_array[count($img_array)-1]; //ext count
$new_file_name=$d.'.'.$ext;                 //systemdate . ext
$source=$_FILES['image']['tmp_name'];
$destination='images/'.$new_file_name;      //store new image name in folder
move_uploaded_file($source, $destination);
 //moves an uploaded file to a new location.

$insert="INSERT INTO `mobile_product` (`name`,`brand`,`price`,`description`,`image`,`os`,`ram`,`color`) values ('$name','$brand','$price','$description','$new_file_name','$os','$ram','$color')";
mysqli_query($conn,$insert);
header("location:product.php?success_msg=7");
?>
