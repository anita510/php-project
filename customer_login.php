<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		</head>
	<style>
body{
	background-image:url("images/b2.png");
    background-repeat:no-repeat;
    background-size: cover;
    }
    .login{
	margin-top: 10%;
	margin-left: 18%;
	border: 2px solid black;

	padding-bottom: 2%;
   }
   .login h2{
   	color:white;
    margin-left: 30%;
    padding-top: 2%;
    padding-bottom: 2%;
 
   }
   .btn-warning{
	margin-left:33%;
	width:30%;
	font-size: 20px;
   }
   label{
  color:white;
   	font-size: 20px;
   }
</style>
<?php 
	if(isset($_GET['login_error']) && $_GET['login_error']==1){?>
		<p class="error">Username Password Incorrect!!</p>
	<?php } ?>
<div class="container">
	<div class="row">


<div class="col-md-8 col-lg-8 col-sm-8 login" >
			<h2> Custmer Login Here </h2>
<form action="validation.php" method="post" autocomplete="off">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username"   class="form-control" placeholder="Enter Username" >
    </div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password"  class="form-control" placeholder="Enter Password" >
	</div>
	<button type="submit"  class="btn btn-warning center"  value="Login">Login<i class="fas fa-unlock-alt" style="padding-left: 4%"></i></button>
	<a href="ragister.php" style="color:yellow; padding-left:1%"> ? Ragister Hear</a>
	  
</form>
</div>
</div>
</div>
</html>

