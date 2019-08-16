<?php
session_start();
?>
<style>
.btn-group{
  margin-left: 2%;
  width:79%;
}
.card-img-top{
  padding-top: 3%;
  height:300px;

}

</style>
<?php 
	require_once('config.php');
	$select="SELECT * FROM `mobile_product`";
          $query=mysqli_query($conn,$select);
          $product=mysqli_fetch_assoc($query);
          if(isset($_POST['price']))
        {
        	$output= '';
        	$query1="SELECT * FROM mobile_product WHERE price  <=".$_POST['price']." ORDER BY price DESC ";
        	$result=mysqli_query($conn,$query1);
        	if(mysqli_num_rows($result) > 0){
        		while($product=mysqli_fetch_array($result))
        		{
        $output .='<div class="col-lg-4 col-md-4 col-sm-12 mb-2">
       <form  class="product" action="insertcard.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-deck">
                <div class="card border-secondary">
                <h6 style="font-size:16px" class=" text-center  pt-3 pb-3 bg-info text-white text-uppercase rounded">'.$product['name'].'  </h6>
                 <a href="get_product_detail.php?product_id='.$product['id'].'" style="color:black;text-decoration: none">
              <img src="images/'.$product['image'].'" class="card-img-top  pl-3 pr-3 "> </a>
             <div class="card-body">
              <h6 style="padding-left: 4%;margin-bottom: 0rem;" class="card-title text-danger  ">&#8377; '.$product['price'].' </h6>
                   <p class="card-title pl-2" >
                    OS:   '.$product['os'].'<br>
                    RAM:   '.$product['ram'].'<br>
                    COLOR:   '.$product['color'].'<br>
                  <input type="text" class="quantity" name="quantity" id="quantity'.$product["id"].'" placeholder="Enter Quantity" value="">
                  </p>
                   <input type="hidden" name="hidden_name"  id="name'.$product["id"].'" value="'.$product['name'].'"/>
                    <input type="hidden" name="hidden_price"  id="price'.$product["id"].'" value="'.$product['price'].'"/>
                  <div class="btn-group" style="padding-left:1%">
                  <input type="submit" name="add_to_cart" id='.$product["id"].' class="btn btn-warning btn-block flex-fill add_to_cart mt-1" value="Add To Cart">
                      
                        </div>
          </div>
              </div> 
           </div>
   </form>
  </div>';
  }

}
  else{
  $output="<h3> No Products Found!</h3>";
}
echo $output;
}
?>