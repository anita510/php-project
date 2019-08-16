
<html>
	<head>
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
   </head>
<body> 
     <style>
        body{
	  background-image:url("images/ragister5.png");
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
 </style>
   <?php 
	if(isset($_GET['success_msg']) && $_GET['success_msg']==11){?>
		<p class="error">username and password not available</p>
	<?php } ?>
	<?php
 if(isset($_GET['success_msg']) && $_GET['success_msg']==100){?>
		<p class="error">Ragister successfully</p>
	<?php } ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 ragister">
			<h2>Admin Ragister Here </h2>
<form  action="admin_ragistration.php" method="post">
	<div class="form-group">
		<label> Name</label>
	<input type="text"  name="name" class="form-control" placeholder="Enter name" required="">
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
		<label>Password</label>
	<input type="password" name="password"  id="password" class="form-control" placeholder="Enter password" required="">
    </div>
 <button type="submit"  value="submit" class="btn btn-success center ">Ragister</button>
</form>
</div>
</div>
</div>
</body>
</html>

