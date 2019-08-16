<?php 
    session_start();
    if(isset($_SESSION['customer_id']) && $_SESSION['customer_id']!=""){
   ?>
<?php
  
require_once("config.php");
require_once("common1.php");
?>
<html lang="en">
<head>
    <title>Mobilestore Website Template | Home </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
    <meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
    <script src="js/responsiveslides.min.js"></script>
    <link rel="stylesheet" href="css/responsiveslides.css">
</head>
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
.center{
      margin-left: 89%;
      padding-left: 1.5%;
      padding-right: 1.5%;
      }
    
</style>
<body>
    <div class="container" style="border: 2px solid black">
         <h1 class="title text-center text-info">Your  Product Cart</h1>
          <a href="clearcart.php"  class="btn btn-warning col-lg-2 mb-3 text-black" style="margin-left:77%;font-size:18px;color: black" >Clear Cart</a>
                <table class="table">
                      <thead style="font-size: 20px">
                        <tr>
                          <th>Sr.No</th>
                          <th>Name</th>
                          <th>Price</th>
                           <th>Quantity</th>
                           <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
              <tbody style="font-size: 16px">
                <?php
                $total = 0;
                $bill = 0;
                $sno =1;
                $quantity=0;
if($cart = isset($_SESSION['cart'])?$_SESSION['cart']:false){

                foreach($_SESSION['cart'] as $product) 
                {     //for break the session array
                  $p = 0;                               //for price
                  $q = 0; 
                                             //for quantity
                  echo "<tr>";
                  echo "<td>".($sno++)."</td>";
               echo "<form action='editcart.php' method='POST'>";
                  foreach($product as $key => $value)
                    {  //put value from outside product

                         if($key == 2)
                         {
                          echo "<td><input type='text'  name='name$key' value='".$value."'></td>";
                          $q=$value;
                          }
                          elseif($key == 1) {
                            echo "<input type='hidden'  name='name$key' value='".$value."'>";
                            echo "<td>" .$value."</td>";
                         
                          $p=$value; 
                          }
                          elseif($key == 0)  {
                            echo "<input type='hidden'  name='name$key' value='".$value."'>";
                            echo "<td>".$value."</td>";
                                                    
                          }

                    }

               
                      // outside the loop(not in session)
                     $bill=((int)$q * (int)$p);
            echo "<td>".number_format( $bill)."</td>";
            echo "<td><input type='submit' name='event' value='Update' class='btn  btn-success'></td>";
            echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                 $total =  $total + ((int)$p * (int)$q);
                 $quantity=$quantity+$q;
             echo "</form>";
             echo "</tr>";

                }
              }
            ?>
                <tr>
                  <td colspan="4" align="right" style="font-size: 24px">Total = </td>
                  <td style="font-size: 24px"><?php echo number_format($total,2);?>/-</td>
                </tr>
              </tbody>
                    </table>


          <a href="view_product.php"  class="btn btn-info col-lg-2 mb-3 text-black" style="margin-left:60%;font-size:18px;color: black" >Continues Shopping</a>
          <a href="customerd.php?total_amount=<?php echo $total ;?>&total_quantity=<?php echo $quantity ;?> "style="color:black;text-decoration: none">
           <button class="btn  btn-warning col-lg-2  mb-3"name="button" value="button" style="font-size:18px;color: black;">Customer Info</button></a>
                  


   </div>
   
  </body>
</html>
  <?php 
  require_once("footer.php"); 
   ?>
   <?php }else{ ?>
  <p>Please <a href="customer_login.php">Login</a> To Access this Page!!</p>
  <?php
    header("Location:customer_login.php");
    ?>
 <?php } ?>
