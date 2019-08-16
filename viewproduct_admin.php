<?php 
    session_start();
    if(isset($_SESSION['admin_id']) && $_SESSION['admin_id']!=""){
   ?>
<?php
require_once('config.php');
//$select="SELECT * FROM `producttable`";
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
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
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
.success_msg{
  padding-left:45%;
  font-size: 40px;
  color:#e91e63;
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
                          
                             <li><a href="logout.php">LogOut</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                             <th> SR.NO</th>
                                              <th>BRAND</th>
                                              <th>PRODUCT</th>
                                               <th>PRICE</th>
                                               <th>COLOR</th>
                                                <th>OS</th>
                                                <th>RAM</th>
                                                 <th>IMAGE</th>
                                                 <th>ACTION</th>
                                           </tr>
                                    </thead>
                                    <?php

$select="SELECT `mobile_product`.*,`mobile_brand`.brand as brand_name FROM `mobile_product` JOIN `mobile_brand` ON `mobile_brand`.id=`mobile_product`.brand"; 
$query=mysqli_query($conn,$select);
$select2="SELECT * FROM `mobile_product` ";
$query2=mysqli_query($conn,$select2);
$select1="SELECT * FROM `mobile_brand`";
$query1=mysqli_query($conn,$select1);
?>

         <tbody>
             <?php
              $i=1;
                  while($res=mysqli_fetch_assoc($query)){
              ?>
                 <tr>
                      <td><?php echo $i++;?></td>
                     
                      <td><?php echo $res['brand_name'];?></td>
                      <td><?php echo $res['name'];?></td>
                      <td><?php echo $res['price'];?></td>
                      <td><?php echo $res['color'];?></td>
                      <td><?php echo $res['os'];?></td>
                      <td><?php echo $res['ram'];?></td>
                      <td><img src="images/<?php echo $res['image']?>" height="150" width="150"?></td>
                     <td><a href="delete_product.php?user_id=<?php echo $res['id'];?>">delete</a>
                     <a href="javascript:;" prod_id="<?php echo $res['id']?>"  class="prod_edit"  data-toggle="modal" data-target="#edit_prod_modal" >Edit</a></td>
                 </tr>
                      <?php } ?>
                </tbody>
         </table>
                          </div>
                        </div>
                    </div>
                  </div>
            </div><!-- .animated -->
        </div><!-- .content -->
</div>
<!-- Modal -->
            <div class="modal fade" id="edit_prod_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="update_product.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                       <div class="form-group my-2">
                               <label>PRODUCT:</label> 
                               <input class="form-control" id="name" name="name" required ><br>

                                <label>brand:</label>


                                    <select name="brand"  id="brand" class="form-control">
                                       <?php while($result=mysqli_fetch_assoc($query1)){ ?>
                                      <option value="<?php echo $result['id']; ?>"<?php if($result['id']==$res['brand_name']){ echo 'selected'; } ?> ><?php echo $result['brand'];?></option>
                                                  <?php } ?>
                                    </select>

                                <label>PRICE:</label> 
                                 <input class="form-control" id="price" name="price" required ><br>

                                   <label>COLOR:</label> 
                                 <input class="form-control" id="color" name="color" required ><br>

                                   <label>OS:</label> 
                                 <input class="form-control" id="os" name="os" required ><br>

                                   <label>RAM:</label> 
                                 <input class="form-control" id="ram" name="ram" required ><br>

                                    <label>SELECT USER IMAGE:</label><br>
                                    <img src=" " height="150" weidth="150" id="image">
                                    <input type="file" name="image">

                                    
                               <input type="hidden" class="form-control" name="categ_id">
                        </div>
                   </div>
                  <div class="modal-footer">
                    <input type="hidden" name="image_id" id="image_id" >
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                   </form>
                </div>
              </div>
            </div>

 
 <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
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

            $('#bootstrap-data-table-export').on('click','.prod_edit', function(){

                 //$('.prod_edit').click(function(){
                     console.log($(this));
                    var prod_id=$(this).attr('prod_id');
                    //alert(cat_id);
                    $.ajax({
                        url:'get_single_product.php',
                        data:'prod_id='+prod_id,
                        method:'post',
                        dataType:'json',
                      
                        success:function(response){
                            //console.log(response);
                            $('input[name="name"]').val(response.name);
                            $('input[name="price"]').val(response.price);
                            $('#image').attr('src','images/'+response.image);
                            $('input[name="categ_id"]').val(response.id);
                            $('input[name="image_id"]').val(response.image);
                             $('input[name="color"]').val(response.color);
                              $('input[name="os"]').val(response.os);
                               $('input[name="ram"]').val(response.ram);
                            $('select[name="brand"]').val(response.brand);
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
