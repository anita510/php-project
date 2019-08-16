<?php 
    session_start();
    if(isset($_SESSION['admin_id']) && $_SESSION['admin_id']!=""){
?>
<?php 
require_once("config.php");
 ?>
 <?php
$select="SELECT * FROM `mobile_brand`";
$query=mysqli_query($conn,$select);?>

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
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
 
</head>
<style>
body{
  background-image: url("images/arches.png");
}
a{
  color:blue;
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
    color:#eee;
    font-size: 20px;
    text-align:center;
    border:2px  solid black;
    width:65%;
    padding-bottom: 1%;
    padding-top: 2%;
    background-color:red;
    width:25%;
    margin-top: 2%;
}

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
                       <div class="user-area dropdown float-right">
                        <h3>WELCOME</h3>
                         
                    </div>
                         
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
                           
                             <li><a class="logout" href="logout.php">LogOut</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<?php
if(isset($_GET['success_msg'])&& $_GET['success_msg']==2){ 
    ?>
        <p class="success_msg">Brand Name Deleted Successfully</p>


    <?php }else if(isset($_GET['success_msg'])&& $_GET['success_msg']==3){?>
        <p class="success_msg">Brand Updated Name Successfully</p>
    <?php } ?>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Brand Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SR.NO</th>
                                            <th>Brand</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                      <?php
                      $i=1;
                     while($res=mysqli_fetch_assoc($query)){
                      ?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $res['brand'];?></td>
                      <td><a href="delete_brand.php?user_id=<?php echo $res['id'];?>">delete</a>
                      <a href="javascript:;" brand_id="<?php echo $res['id']?>"  class="brand_edit"  data-toggle="modal" data-target="#largeModal" >Edit</a></td>
                        <!--<a href="javascript:;" onclick="edit_category(<?php //echo $res['cat_id']?>)"  data-toggle="modal" data-target="#edit_cat_modal" >Edit</a> -->
                    </tr>
                        <?php } ?>
                 </tbody>
                                </table>
                                <a href="brand.php">Add Brand</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
















</div><!-- /#right-panel -->

    <!-- Right Panel -->


    <!--.modal  start-->

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel"> Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="update_brand.php" method="post">
                  <div class="modal-body">
                       <div class="form-group my-2">
                               <label>Brand</label> <input class="form-control" id="brandeg" name="brandeg" required >
                               <input type="hidden" class="form-control" name="brandeg_id">
                        </div>
                   </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                   </form>
                            </div>
                           
                        </div>
                    </div>
                </div>





              
 
    <!--.modal end -->
 <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
    <script src="js1/jquery-3.4.1.min.js" ></script>
    <script src="js1/bootstrap.bundle.min.js" ></script>
    <script src="js1/popper.min.js" ></script>
    <script src="js1/bootstrap.min.js" ></script>





    

    <script>
             $(document).ready( function () {
              $('#bootstrap-data-table-export').on('click','.brand_edit', function(){

                // $('.brand_edit').click(function(){
                     
                     console.log($(this));
                    var brand_id=$(this).attr('brand_id');
                    //alert(cat_id);
                    $.ajax({
                        url:'get_single_brand.php',
                        data:'brand_id='+brand_id,
                        method:'post',
                        dataType:'json',
                      
                        success:function(response){
                            //console.log(response);
                            $('input[name="brandeg"]').val(response.brand);
                            $('input[name="brandeg_id"]').val(response.id);
                        }
                        
                    });
                });
             });
            
        </script>
        


    
</body>
</html>

<?php }else{ ?>
  <p>Please <a href="login.php">Login</a> To Access this Page!!</p>
  <?php
    header("Location:login.php");
    ?>
 <?php } ?> 