<style>
img{
	width:100%;
	padding-top:2%;
}
.title{
  font-size: 50px;
 margin-top: 2%;
  
}
.button{
  padding-top: 1%;
  padding-bottom: 2%;
 margin-left:60%;
  width:40%;
}
.product{
	border:2px solid black;
	padding-bottom:4%;
}

</style>
<?php 
	require_once('config.php');
	require_once('common1.php');
    $id=$_GET['product_id'];
    $select="SELECT * FROM `mobile_product` where `id`=$id";
	  $query=mysqli_query($conn, $select);
	  $product=mysqli_fetch_assoc($query);
    $output="";
	  $output .=' 
  <div class="container">
  <h1 class="title text-info">Shopping Site</h1>
  <div class="row">
  <div class="button">
  <a href="view_product.php" class=" btn1 btn btn-warning col-lg-4  ">home</a>
  <a href="viewcart.php" class="btn btn2 btn-info col-lg-4  "> cart</a>
   </div>
</div>
</div>
<div class="container product">
<form  action="insertcard.php" method="post" enctype="multipart/form-data">
   <h6 style="font-size:40px" class=" text-center  pt-5 pb-4  text-info text-uppercase rounded">'.$product['name'].'</h6>
      <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-12 left">
                <img src="images/'.$product['image'].'">
           </div>
          <div class="col-lg-8 col-md-8 col-sm-12 right"style="padding-top:5%;font-size:24px">
             <h6 style="padding-left: 4%" class="card-title text-danger  ">&#8377; '.$product['price'].'</h6>
                 <p class="card-title pl-2" >
                    OS:  '.$product['os'].'<br>
                    RAM:  '.$product['ram'].'<br>
                    COLOR:  '.$product['color'].'<br>
                    DESCRIPTION:  '.$product['description'].'<br><br>
               <input type="text" class="quantity" name="quantity" id="quantity'.$product["id"].'" placeholder="Enter Quantity" value="">
                    </p>
                    <input type="hidden" name="hidden_name"  id="name'.$product["id"].'" value="'.$product['name'].'"/>
                    <input type="hidden" name="hidden_price"  id="price'.$product["id"].'" value="'.$product['price'].'"/>
                   <div class="btn-group" style="padding-left:1%">
                  
                        <input type="submit" name="add_to_cart" id='.$product["id"].' class="btn btn-warning btn-block flex-fill add_to_cart " value="Add To Cart">
                    </div>
              </div>
          </div>
      </form>
</div>';
   echo $output;
require_once('footer.php');
?>
