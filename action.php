<?php
$query="SELECT username  from mobile_login WHERE username='$username'"
$fire=mysqli_query($conn,$query);
if(mysqli_num_rows($fire)>0){
$msg .="username is not available please try again another !!";
}else{
	$username_valid=true;
}
?>

