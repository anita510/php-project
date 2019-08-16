<?php 
    session_start();
    if(isset($_SESSION['admin_id']) && $_SESSION['admin_id']!=""){
?>
<?php 
require_once("config.php");
 ?>
<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<style>
.content{
  background-image: url("images/arches.png");
  height:800px;
}

.success_msg{
  font-size: 33px;
  margin-left: 29%;
  padding-top: 3%;
  color:green;
}
.content-grids{
  margin-left: 10%;
  padding-top: 2%;
}
.brand{
  margin-left:24%;
  margin-top:7%;
  margin-bottom: 4%;
  color:white;
  font-size: 24px;
  text-align: center;
  border:2px  solid black;
  width:50%;
  padding-bottom: 2%;
  padding-top: 2%;
}
.brand1{
    background-color:#eee;
    margin-top: 5%;
    font-size: 24px;
    text-align: center;
    border:2px  solid black;
    width:70%;
    padding-bottom: 2%;
    padding-top: 2%;
}
input{
    margin:2%;
}
.submit{
    text-transform: capitalize;
    color:black;
    font-size: 20px;
    text-align:center;
    border:2px  solid black;
    width:65%;
    padding-bottom: 1%;
    padding-top: 1%;
    background-color:#e74c3c;
    width:25%;
    margin-top: 2%;
}
a{
  color:blue;
}

</style>
<body>


    <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <h1 style="color:white;margin-top: 4%"><i>mobile store</i></h1>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav" style="margin-top: 4%">
                   
                    <h3 class="menu-title">MENU</h3><!-- /.menu-title -->
                    
                       <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                      </li>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Brand</a>
                        <ul class="sub-menu children dropdown-menu">
                           <li><a href="brand.php">Add Brand</a></li>
                           <li><a href="view_brand.php">View Brand</a></li>
                         
                        </ul>
                       
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Product</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="product.php">Add Product</a></li>
                            <li><a href="viewproduct_admin.php">View Product</a></li>
                            
                        </ul>
                    </li>
                 

               
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                   
                </div>

                <div class="col-sm-5">
                      <div class="user-area dropdown float-right">
                        <h3>WELCOME</h3>
                         
                    </div>
                  

                 


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
           
            <div class="col-sm-12">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                             <li><a href="logout.php">LogOut</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
   
           
         
                 <?php
            if(isset($_GET['success_msg'])&& $_GET['success_msg']==1){ ?>
        <p class="success_msg">Brand Name Successfully Added</p>
 <?php }else if(isset($_GET['success_msg'])&& $_GET['success_msg']!=1){?>
        <p class="success_msg">Not Add Brand Name</p>
    <?php }
    ?>
      <div class="brand">
        <h4 style="color:black">INSERT BRAND HERE</h4>
          <form action="insert_brand.php" method="post" autocomplete="off">
              <input type="text"  class="brand1" name="brand" placeholder="Enter Brand Name " style="margin-bottom:1%" required><br>
              <input type="submit" class="submit" value="Submit" >
               </form>
          </div>
          
        
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
     <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>    
</body>
</html>

<?php }else{ ?>
  <p>Please <a href="login.php">Login</a> To Access this Page!!</p>
  <?php
    header("Location:login.php");
    ?>
 <?php } ?> 