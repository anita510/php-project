<?php 
	require_once('config.php');
if(isset($_POST["username"]))
{
    $select="SELECT * FROM `mobile_login` where username='".$_POST["username"]."'";
	$query=mysqli_query($conn, $select);
if(mysqli_num_rows($query)>0)
{
	echo '<span class="text-danger">username is not available</span>';
}
else{
	echo '<span class="text-success">username  available</span>';
}
}
?>