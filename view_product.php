<?php 
    session_start();
    if(isset($_SESSION['customer_id']) && $_SESSION['customer_id']!=""){
  ?>
<?php 
  
    require_once("config.php");
    require_once('common1.php');
    $select="SELECT * FROM `mobile_brand` WHERE 1";
    $query=mysqli_query($conn,$select);
    $res=mysqli_fetch_assoc($query);
    if(isset($_GET['success_msg'])&& $_GET['success_msg']==2){ 
    ?>
         <p class="success_msg">User Deleted Successfully</p>
          <?php }else if(isset($_GET['success_msg'])&& $_GET['success_msg']==3){?>
         <p class="success_msg">User Updated Successfully</p>
         <?php } ?>
<style>
.btn-group{
  margin-left: 2%;
  width:79%;
}
.quantity{
  margin-top: 2%;
  padding-top: 1%;
  padding-bottom: 1%;
  width:80%;
  font-size: 24px;
}
#price_range{
  color:red;
  width:30%;
  font-size: 24px;
}
.form-check-input {
    margin-top: 0.1rem;
}
.text-center1{
  text-align: center;
  font-size: 30px;
}
.text-center3{
 text-align: center;
  font-size: 24px;
  padding-top: 4%;
  padding-bottom: 3%;
}
.card-img-top{
  padding-top: 3%;
  height:300px;

}
</style>
  <h1 class="text-center1 text-light bg-info p-3 mb-4 ">shop your favourite product here</h1>
 <div class="container-fluid pl-0 pr-0">
  <div class="row ml-0">
    <div class="col-lg-3">
        <h3 align="center" class="text-info  text-center3 mt-5"> Select Product On Price</h3><br>
      <div class="form-check">
          <div align="center">
              <input type="range" class="text-info  min="1000" max="70000" step="1000" value="10000" name="min_price" id="min_price"><br>
              <span id="price_range"></span>
              <?php 
              $sql="SELECT * FROM mobile_product ORDER BY price DESC";
              $result=mysqli_query($conn,$sql);
         
              ?>
            </div>
        </div>
            
           <h6 class="text-info text-center3 mt-5"> Select Brand</h6>
            <ul class="list-group ">
              <?php 

$select="SELECT  DISTINCT`mobile_product`.brand,`mobile_brand`.brand as brand_name FROM `mobile_product` JOIN `mobile_brand` ON `mobile_brand`.id=`mobile_product`.brand";
$join=mysqli_query($conn,$select);


              $sql="SELECT DISTINCT brand FROM mobile_product ORDER BY brand";
              $result=mysqli_query($conn,$sql);

              while($row=mysqli_fetch_assoc($join)){
              ?>
              <li class="list-group-item ">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $row['brand'];?>" id="brand"><?php echo $row['brand_name'];?>
                  </label>
                </div>
              </li>
            <?php } ?>
            </ul>
              <h6 class="text-info text-center3 mt-5"> Select RAM</h6>
            <ul class="list-group">
              <?php 
              $sql="SELECT DISTINCT ram FROM mobile_product ORDER BY ram";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result)){
              ?>
              <li class="list-group-item">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $row['ram'];?>" id="ram"><?php echo $row['ram'];?>
                  </label>
                </div>
              </li>
            <?php } ?>
            </ul>
            <h6 class="text-info text-center3 mt-5"> Select OS</h6>
            <ul class="list-group">
              <?php 
              $sql="SELECT DISTINCT os FROM mobile_product ORDER BY os";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result)){
              ?>
              <li class="list-group-item">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $row['os'];?>" id="os"><?php echo $row['os'];?>
                  </label>
                </div>
              </li>
            <?php } ?>
            </ul>
                <h6 class="text-info text-center3 mt-5"> Select Color</h6>
            <ul class="list-group">
              <?php 
              $sql="SELECT DISTINCT color FROM mobile_product ORDER BY color";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result)){
              ?>
              <li class="list-group-item">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $row['color'];?>" id="color"><?php echo $row['color'];?>
                  </label>
                </div>
              </li>
            <?php } ?>
            </ul>
                 <h6 class="text-info text-center3 mt-5"> Select Price</h6>
            <ul class="list-group">
              <?php 
              $sql="SELECT DISTINCT price FROM mobile_product ORDER BY price";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result)){
              ?>
              <li class="list-group-item">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?php echo $row['price'];?>" id="price"><?php echo $row['price'];?>
                  </label>
                </div>
              </li>
            <?php } ?>
            </ul>
          </div>
        <div class="col-lg-9 col-md-9">
           <h5 class="text-center1 pb-3" id="textChange">All Products</h5>
            <hr>
            <div class="text-center">
              <img src="images/loader.gif" id="loader" width="200" style="display:none;">
            </div>
            <div class="container" >
              <div class="row" id="result" >
          <?php
          $select1="SELECT * FROM `mobile_product` WHERE 1";
          $query1=mysqli_query($conn,$select1);
          $num=mysqli_num_rows($query1);
        if($num>0){
        while($product=mysqli_fetch_assoc($query1)){
          ?>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-2" >
      <form  class="product" action="insertcard.php?action=add&id=<?php echo $product["id"]; ?>" method="post" autocomplete="off">
      <div class="card-deck">
        <div class="card border-secondary">
              <h6 style="font-size:16px;padding-top:2%" name="name" class=" text-center  pt-3 pb-3 bg-info text-white text-uppercase rounded"> <?php echo $product['name'];  ?>  </h6>
              <a href="get_product_detail.php?product_id=<?php echo $product['id']; ?>" style="color:black;text-decoration: none">
              <img src="images/<?php echo $product['image']; ?>" class="card-img-top  pl-3 pr-3 " id="product_display"></a>
          <div class="card-body">
              <h6 style="padding-left: 4%;font-size:16px;    margin-bottom: 0rem;" name="price" class="card-title text-danger ">&#8377;  <?php echo $product['price'];  ?></h6>
                   <p class="card-title pl-2" style="margin-bottom: 0px;">
                    OS:  <?php echo $product['os'];  ?><br>
                    RAM:  <?php echo $product['ram'];  ?><br>
                    COLOR:  <?php echo $product['color'];  ?><br>
                    <input type="text" class="quantity" name="quantity" placeholder="Enter Quantity">
                    <input type="hidden" name="hidden_name" value=" <?php echo $product["name"]; ?> "/>
                    <input type="hidden" name="hidden_price" value=" <?php echo $product["price"]; ?> "/>
                  </p>
                  <div class="btn-group" >
                  <a href="insertcard.php?product_id=<?php echo $product['id']; ?>" style="color:black;text-decoration: none">
                    <input type="submit" name="add_to_cart" id='.$product["id"].' class="btn btn-warning btn-block flex-fill add_to_cart  pr-3 mr-4 mt-1" value="Add To Cart"></a>
                 </div>
          </div>
      </div>
    </div>
  </form>
</div>
  <?php
}
  }
?>
</div>
</div>
</div>
</div>
</div>
<?php
  require_once("footer.php");
  ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#min_price').change(function(){
      var price=$(this).val();
         $("#price_range").text("product under price Rs."+price);
         $.ajax({
          url:"load_product.php",
          method:'POST',
           data:{price:price},
           success:function(data){
            $("#result").fadeIn(500).html(data);
            }
          });
       });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".product_check").click(function(){
      $("#loader").show();
      var action='data';
      var brand=get_filter_text('brand');
         var ram=get_filter_text('ram');
         var price=get_filter_text('price');
          var os=get_filter_text('os');
         var color=get_filter_text('color');
         $.ajax({
          url:'search.php',
          method:'POST',
          data:{action:action,brand:brand,price:price,ram:ram,os:os,color:color},
          success:function(response){
            $("#result").html(response);
             $("#loader").hide();
               $("#textChange").text("Filtered Products");
               $('textarea[name="description]"').val(response.description);
          }
         });
    });
  function get_filter_text(text_id){
    var filterData=[];
    $('#'+text_id+':checked').each(function(){
      filterData.push($(this).val());
    });
    return filterData;
  }

  });
    
</script>

<?php }else{ ?>
  <p>Please <a href="customer_login.php">Login</a> To Access this Page!!</p>
  <?php
    header("Location:customer_login.php");
    ?>
 <?php } ?>
