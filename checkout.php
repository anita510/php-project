<?php 
    session_start();
    if(isset($_SESSION['customer_id']) && $_SESSION['customer_id']!=""){
   ?>

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
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="css/style3.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        <meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/demo.css">
</head>
<style>
    body{
        margin:0px;
        background-image:url("images/shop11.png");
        background-repeat:no-repeat;
        background-size: cover;
    }
    .footer{
        margin-top: 0px;
    }
   .container-fluid{
      margin-bottom: 0px;
    }
    .success_msg{
        font-size: 40px;
        margin-left: 38% auto;
        padding-top: 3%;
        color:green;
    }
   .creditCardForm .heading h1{
        color:#5bc0de; 
    }
    .creditCardForm .payment .btn{
        color:black;
         background-color:#5bc0de; 
    }


</style>
<body>
     <div class="wrap">
        <!----start-Header---->
        <div class="header">
            
            
        </div>
        </div>
        <div class="clear"> </div>
        <div class="top-header" style="margin-top:0px; background:#17a2b8!important">
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
          <?php
        if(isset($_GET['success_msg']) && $_GET['success_msg']==21){?>
        <p class="success_msg " style="padding-left: 38%">Payment Successfully</p>
    <?php } ?>
    <div class="container-fluid">
        <a href="viewcart.php"  class="btn btn-info col-lg-2 mb-1 mt-2 text-black plan1" style="font-size:20px;color: black;margin-left:25.5%;" ><i class="fas fa-arrow-circle-left" style="font-size:30px"></i> Change plan</a>
<a href="customer_logout.php"  class="btn btn-info col-lg-2 mb-1 mt-2 text-black plan2" style="font-size:20px;margin-left:15.5%;color: black" >LogOut <i class="fas fa-sign-out-alt" style="font-size:30px"></i></a>
       
        <div class="creditCardForm pb-2" style="border:1px solid black">
            <div class="heading" style="color:#2ec4a5">
                <h1>Confirm Purchase</h1>
            </div>
            <div class="payment">
              <form  action="getcredit.php" method="post" autocomplete="off">
                    <div class="form-group owner">
                        <label for="owner">Card Holder Name</label>
                        <input type="text" name="nm" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control"   name="cardnumber" id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date" >
                        <label>Expiration Date</label>
                        <select name="month"  >
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                           <div class="form-group" id="expiration-date" >
                        <select name="year" >
                            
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                            <option value="24"> 2024</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets1/images/visa.jpg" id="visa">
                        <img src="assets1/images/mastercard.jpg" id="mastercard">
                        <img src="assets1/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">

                        <button type="submit" value="submit" class="btn btn-default" >Payment</button>

                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets1/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="assets1/js/script.js"></script>
</body>

</html>
 <?php
require_once("footer.php");
?>




<?php }else{ ?>
  <p>Please <a href="customer_login.php">Login</a> To Access this Page!!</p>
 <?php } ?>
<!--5281037048916168-->
