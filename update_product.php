<?php
	require_once('config.php');
	$user_id=$_POST['categ_id'];
	$name=$_POST['name'];
	$brand=$_POST['brand']; 
    $price=$_POST['price'];
    $color=$_POST['color'];
	$os=$_POST['os']; 
    $ram=$_POST['ram'];
  
	$imagename=$_POST['image_id'];   //inserted file name
   $file_name=$_FILES['image']['name']; 
	
	if($file_name==""){
		$new_file_name=$imagename;
	}
	else{
	$select="SELECT * FROM `mobile_product` WHERE id=$user_id";
	$query1=mysqli_query($conn,$select);
	$row1=mysqli_fetch_assoc($query1);
	$imagename=$row1["image"];
	$path="images/".$imagename;
	unlink($path);
	$d=Date('Ymdhis');
	$img_array=explode('.',$file_name);    //The explode() function breaks a string into an array.
	$ext=$img_array[count($img_array)-1];
	$new_file_name=$d.'.'.$ext;
	$source=$_FILES['image']['tmp_name'];
	$destination='images/'.$new_file_name;   //store new image name in folder
	move_uploaded_file($source, $destination);    //moves an uploaded file to a new location.
	}  
	$update="UPDATE `mobile_product` set `name`='".$name."',`price`='".$price."',`color`='".$color."',`os`='".$os."',`ram`='".$ram."',`brand`='".$brand."',`image`='".$new_file_name."' where id=$user_id ";
     mysqli_query($conn, $update);
     header("Location:viewproduct_admin.php?success_msg=5");
?>


