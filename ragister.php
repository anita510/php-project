<?php
require_once("config.php");
?>
<html>
	<head>
		<title>Mobilestore Website Template | Home </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/responsiveslides.min.js"></script>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="css/style3.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		
		
	</head>
 
<style>
body{
	background-image:url("images/shop10.png");
      background-repeat:no-repeat;
      background-size: cover;
}
.ragister{
   margin-top: 5%;
   margin-left: 7%;
   border: 2px solid black;
   padding-bottom: 2%;
   margin-bottom: 3%;
 }
 .ragister h2{
   margin-left: 30%;
   padding-top: 2%;
   padding-bottom: 2%;
 }
.btn-success{
	margin-left:33%;
	width:30%;
}
label{
	color:black;
}
</style>
<body>
<?php 
	if(isset($_GET['success_msg']) && $_GET['success_msg']==11){?>
		<p class="error">username and password not available</p>
	<?php } ?>
<?php 
	if(isset($_GET['success_msg']) && $_GET['success_msg']==10){?>
		<p class="error">ragister successfully</p>
	<?php } ?>
	    <div class="wrap">
		<!----start-Header---->
		<div class="header">
			
			
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header" style="margin-top:0px">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="view_product.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="blog.php">Blog</a></li>
			    <li><a href="ragister.php">Register</a></li>
				<li><a href="customer_logout.php">LogOut</a></li>
				
				
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
<div class="container ">
	<div class="row  justify-content-center">
		<div class="col-md-6 ragister "  style="background-color: #f5f7ed61">
			<h2 style="font-size: 32px"> Ragister Here </h2>
<form  onsubmit="return validation()" action="ragistration.php" method="post" autocomplete="off">
	<div class="form-group">
		<label>First Name</label>
	<input type="text"  name="firstname" class="form-control" placeholder="Enter First Name" required="">
	</div>
	<div class="form-group">
		<label>Middle Name</label>
	<input type="text"  name="middlename" class="form-control" placeholder="Enter Middle Name" required="">
	</div>
	<div class="form-group">
		<label>Last Name</label>
	<input type="text"  name="lastname" class="form-control" placeholder="Enter Last Name" required="">
	</div>
	<div class="form-group">
		<label>Gender</label>
	<input type="radio" name="gender" value="male"> MALE
    <input type="radio" name="gender" value="female"> FEMALE
	</div>
	<div class="form-group">
		<label>Email</label>
	<input type="text"  name="email" id="email" class="form-control" placeholder="Enter Email" required="">
	<p style="color:red;display:none;" id="err_email">Enter Valid Email ID</p>
	</div>
   
	<div class="form-group">
		<label>Contact No</label>
	<input type="text" name="contact"  id="contact" class="form-control" placeholder="Enter Contact No" required="">enter only 10 digit.
		<p style="color:red;display:none;" id="err_contact">Enter Valid Mobile number</p>
	</div>
	<div class="form-group">
		<label>City</label>
	<input type="text" name="city"   class="form-control" placeholder="Enter City" required="">
	</div>
	<div class="form-group">
		<label>Address</label>
	<input type="text" name="address"   class="form-control" placeholder="Enter Address" required="">
	</div>
	<div class="form-group">
		<label>Username</label>
	<input type="text" name="username"  id="username" class="form-control" placeholder="Enter Username" required="">
	<span id="availibility"></span>
	</div>
<div class="form-group">
		<label>Password</label>
	<input type="password" name="password"  id="password" class="form-control" placeholder="Enter Password" required="">
    </div>
    <div class="form-group">
		<label>Pincode</label>
	<input type="pincode" name="pincode"  id="pincode" class="form-control" placeholder="Enter Pincode" required="">
    </div>
	
	<button type="submit"  value="submit" class="btn btn-success center ">Ragister</button>
</form>
</div>
</div>
</div>

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
<script>
 $(document).ready( function () {
                 $('#username').blur(function(){
                    var username=$(this).val();
                    $.ajax({
                        url:'get_single_username.php',
                        method:'post',
                        data:{username:username},
                       dataType:'text',
                      
                        success:function(html){
                            //console.log(response);
                            $('#availibility').html(html);
                     
                        }
                        
                    });
                });
             });
            
        </script>
</body>
</html>
<?php
require_once("footer.php");
?>
