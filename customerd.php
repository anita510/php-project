<?php 
     session_start();
    if(isset($_SESSION['customer_id']) && $_SESSION['customer_id']!=""){
   ?>

<?php

require_once("config.php");
require_once("common1.php");
?>
 <style>
.title{
   margin-bottom: 3%;
   margin-top: 2%;
   font-size: 50px;
}
.name1{
   margin-bottom: 2%;
   margin-top: 2%;
}
.col-md-6{
   padding-bottom: 2%;
}
p{
   color:green;
   padding-left: 43%;
   padding-top: 4%;
   font-size:24px;
}
.form-group{
   font-size: 20px;
   padding-top: 2%;
}
label{
   font-size: 20px;
}
form{
   font-size:24px;
   padding-bottom: 3%;
}
.cc-cart{
   font-size: 20px;
}
.payment{
    margin-left: 30%;
	width:40%;
}
.error{
    font-size: 40px;
	padding-left: 40%;
	padding-top: 3%;
}
.button1{
	margin-left: 31%;
	width:40%;
}
.button2{
    margin-left: 34%;
    width:24%;
 }
</style>
<?php 
	require_once('config.php');
		require_once('common1.php');
		
		 $total=$_GET['total_amount'];
		  $quantity=$_GET['total_quantity'];
      if(isset($_GET['success_msg']) && $_GET['success_msg']==21){?>
		<p class="error">Enter successfully</p>
	<?php }
   
	$output="";
	$output .=' <div class="container" style="margin-left:25%;padding-top:3%">
<a href="viewcart.php"  class="btn btn-warning col-lg-2 mb-3 mt-2 text-black" style="font-size:20px;color: black" ><i class="fas fa-arrow-circle-left" style="font-size:30px"></i> Change plan</a>
<div class="row" style="margin-left:0">
<div class="col-md-8 col-sm-8 col-lg-8" style="border:2px solid black;padding-left:1%">
 <h1 class="title text-info pt-3"style="font-size:40px;color: black;padding-left:20%" >Your Checkout Details</h1>
  <form  onsubmit="return validation()" action="customer_details.php" method="post" autocomplete="off"><hr>
  <h1 class="title text-warning pt-3"style="font-size:20px;color: black" >Your Order Details</h1>

<h6 style="font-size:24px" class="   pt-2 pb-2  text-black rounded">Total Quantity:- '.$quantity.' </h6>
<h6 style="font-size:24px" class="   pt-2 pb-2  text-black rounded">Total Amount:- '.number_format($total,2).' </h6>
<hr>
	<div class="form-group">
		<label>First Name</label>
	<input type="text"  name="firstname" class="form-control" placeholder="Enter first name" required="">
	</div>
	<div class="form-group">
		<label>Middle Name</label>
	<input type="text"  name="middlename" class="form-control" placeholder="Enter middle name" required="">
	</div>
	<div class="form-group">
		<label>Last Name</label>
	<input type="text"  name="lastname" class="form-control" placeholder="Enter last name" required="">
	</div>
	
   <div class="form-group">
		<label>Contact No</label>
	<input type="text" name="contact"  id="contact" class="form-control" placeholder="Enter contact no" required="">Enter only 10 digit.
		<p style="color:red;display:none;" id="err_contact">Enter Valid Mobile number</p>
	</div>
	<div class="form-group">
		<label>City</label>
	<input type="text" name="city"   class="form-control" placeholder="Enter city" required="">
	</div>
	<div class="form-group">
		<label>Address</label>
	<input type="text" name="address"   class="form-control" placeholder="Enter Address" required="">
	</div>
	<div class="form-group">
		<label>Pincode</label>
	<input type="pincode" name="pincode"  id="pincode" class="form-control" placeholder="Enter pincode" required="">
    </div>
	<button type="submit"  value="submit" class="btn btn-warning center button1 " style="font-size:20px">Go To CheckOut<i class="fas fa-shopping-cart"style="font-size:30px"x></i> <i class="fas fa-arrow-circle-right" style="font-size:30px"></i></button>
</form>
 </div>
</div> 
	</div>';
   echo $output;
?>
<?php
  require_once("footer.php");
  ?>
  <script>
function validation(){
var flag = true;//refer regular expression library
var contact_regex = /^\d{10}$/;
var email_regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;


var contact = document.getElementById('contact').value;
var email = document.getElementById('email').value;

 if(!contact.match(contact_regex)){
 document.getElementById('err_contact').style.display = 'block';
	flag = false;
}else{
document.getElementById('err_contact').style.display = 'none';
}	
if(!email.match(email_regex)){
document.getElementById('err_email').style.display = 'block';
    flag = false;
}else{
document.getElementById('err_email').style.display = 'none';
}
if(flag == false){
	return false;
}else{
	return true;
	}
}
</script>
<?php }else{ ?>
  <p>Please <a href="customer_login.php">Login</a> To Access this Page!!</p>
 <?php } ?> 

                
