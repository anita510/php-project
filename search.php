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
  $select1="SELECT * FROM `mobile_product`";
  $query1=mysqli_query($conn,$select1);
  $product=mysqli_fetch_assoc($query1);
if(isset($_POST['action']))
{
  $select="SELECT * FROM mobile_product WHERE brand !=''";
    if(isset($_POST['brand'])){
      $brand=implode("','",$_POST['brand']);
      $select .="AND brand IN('".$brand."')";
    }
     if(isset($_POST['ram'])){
      $ram=implode("','",$_POST['ram']);
      $select .="AND ram IN('".$ram."')";
    }
       if(isset($_POST['os'])){
      $os=implode("','",$_POST['os']);
      $select .="AND os IN('".$os."')";
    }
     if(isset($_POST['color'])){
      $color=implode("','",$_POST['color']);
      $select .="AND color IN('".$color."')";
    }
     if(isset($_POST['price'])){
      $price=implode("','",$_POST['price']);
      $select .="AND price IN('".$price."')";
    }
 
   $result=mysqli_query($conn,$select);
  $output='';
  if(mysqli_num_rows($result)>0){
     while($product=mysqli_fetch_assoc($result)){
      $output .='<div class="col-lg-4 col-md-4 col-sm-12 mb-2">
      <form  class="product" action="insertcard.php" method="post" enctype="multipart/form-data" autocomplete="off">
                 <div class="card-deck">
                <div class="card border-secondary">
                <h6 style="font-size:16px" class=" text-center  pt-3 pb-3 bg-info text-white text-uppercase rounded">'.$product['name'].'  </h6>
                  <a href="get_product_detail.php?product_id='.$product['id'].'" style="color:black;text-decoration: none">
              <img src="images/'.$product['image'].'" class="card-img-top  pl-3 pr-3 "> </a>
             <div class="card-body">
                  <h6 style="padding-left: 4% ;margin-bottom: 0rem;" class="card-title text-danger  ">&#8377; '.$product['price'].'  </h6>
                   <p class="card-title pl-2" >
                    OS:  '.$product['os'].'<br>
                    RAM:  '.$product['ram'].'<br>
                    COLOR:  '.$product['color'].'<br>
                  <input type="text" class="quantity" name="quantity" id="quantity'.$product["id"].'" placeholder="Enter Quantity" value="">
                    <input type="hidden" name="hidden_name"  id="name'.$product["id"].'" value="'.$product['name'].'"/>
                    <input type="hidden" name="hidden_price"  id="price'.$product["id"].'" value="'.$product['price'].'"/>
                  </p>
                   <div class="btn-group" style="padding-left:1%">
                  <input type="submit" name="add_to_cart" id='.$product["id"].' class="btn btn-warning btn-block flex-fill add_to_cart mt-1" value="Add To Cart">
                       
                        </div>
                   </div>
                </div> 
           </div>
    <form>
  </div>';
  }
}
  else{
  $output="<h3> No Products Found!</h3>";
}
echo $output;
}
?>