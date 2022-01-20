  <?php 
session_start();
$_SESSION['cart']=0;
session_commit();
if(!isset($_SESSION['id']))
{
  ?>
  <script type="text/javascript">
    alert("Sorry You are not Logged In");
    location.replace("login.php");
  </script>
  <?php
  session_commit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <?php include 'php/links.php';?>
</head>
<body>
<?php include 'header.php'; ?>

<!-- ------------------------------------- -->
<div class="container-fluid p-3">
  <h1 class="font">Shopping Cart <i class="fa fa-shopping-cart text-danger"></i></h1>
  <hr>
<div class="row" style="justify-content: space-around;">
  <div class="col-lg-8 col-md-10 p-2 border m-1">
    <table width="100%" >
      <thead class="bg-warning">
        <th>Remove</th>
        <th >Image</th>
        <th >Product</th>
        <th >Color</th>
        <th >Quantity</th>
        <th >Price</th>
        <th >Total</th>

      </thead>
      <tbody>
        <?php 
                $id = $_GET['id'];
                $discount = 0;
                $final_price = 0;
                $_SESSION['total_sum'] = 0;

      
        if($id != $_SESSION['id']){
          ?>
          <script type="text/javascript">
            location.replace("cart.php?id=<?php echo $_SESSION['id'] ?>");
          </script>
          <?php
        }
          $query = "select * from orders where user_id = {$id} && bool = 0";
          $insert = mysqli_query($connection,$query);
          if($insert){
            if(mysqli_num_rows($insert)){
      
      $result = mysqli_query($connection, "SELECT SUM(t_amount) FROM orders where user_id = {$id}");
      $row = mysqli_fetch_assoc($result); 
      $_SESSION['total_sum']=$row['SUM(t_amount)'];
          }
          while($rows = mysqli_fetch_array($insert))
          {
        ?>
        <tr class="border-top">
        <td class="text-center  " style="width: 10%;"><a href="php/delproduct.php?product_id=<?php echo $rows['id']?>"><i class="fa fa-trash fs-5 text-center text-danger fs-3"></i></a></td>
        <td><img src="<?php echo $rows['image']?>" width ="100" class="img-thumbnail p-2"></td>
        <td><?php echo $rows['product_name'] ?></td>
        <td><?php echo $rows['color'] ?></td>
        <td class="text-center"><?php echo $rows['quantity'] ?></td>
        <td>$<?php echo $rows['price'] ?></td>
        <td>$<?php echo $rows['t_amount'] ?></td>
      </tr>
    <?php }} ?>
    <tr class="border-top border-dark">
      <td style="border:none"><?php echo "" ?></td>
      <td style="border:none"><?php echo "" ?></td>
      <td style="border:none"><?php echo "" ?></td>
      <td style="border:none"><?php echo "" ?></td>
      <td style="border:none"><?php echo "" ?></td>
      <td>Total Price</td>
      <td>$<?php echo $_SESSION['total_sum'] ?></td>

      </tr>
      </tbody>
    </table>
  </div>
  <div  class="col-lg-3 col-md-10 p-2 ">
    <div class="border p-2">
    <h2 class="text-center my-3">Have a Coupon?</h2>
    <form method="POST" class="mb-3 m-auto row" aaction="php/coupon.php" style="justify-content:space-around;">
      <input type="text" name="coupon_" placeholder="Your Coupon" id="coupon" class="col-lg-8 col-md-8 col-8 p-1">
    <input class="col-lg-3 col-md-3 col-3 btn btn-primary" id="member" type="submit" name="coupon"data-toggle="tooltip" data-placement="top" title="Get 25% Off!" value="Apply" >
    </form>   
  </div>
  <div class="border p-2 mt-2">
    <div class="row" style="justify-content:center;">
  <p class="col-lg-5 col-md-5 col-5">Total Price</p>
  <p class="col-lg-5 col-md-5 col-5 text-end">$<?php echo  $_SESSION['total_sum'] ?></p>
  <p class="col-lg-5 col-md-5 col-5">Discount</p>
  <!-- --------------------------------- -->
  <?php
  if (isset($_POST['coupon'])) {

  $coupon = $_POST['coupon_'];
  $query = "select * from coupon where coupon = '$coupon'";
  $couponquery = mysqli_query($connection, $query);
  if($couponquery){
    $row = mysqli_num_rows($couponquery);
    if ($row) {
      $discount = $_SESSION['total_sum']/4;
      $final_price = $_SESSION['total_sum'] - $discount;
      $_SESSION['total_sum'] = $_SESSION['total_sum'] - $discount;
      ?>
  <?php
    }
    else{
      $discount = 0;
            ?>
  <script type="text/javascript">
    alert("Sorry! Your Coupon is either expired or incorrect");
  </script>
  <?php
    }
  }

}
?>
  <!-- ---------------------------------------- -->
  <p class="col-lg-5 col-md-5 col-5 text-end">$<?php echo $discount ?></p>
  <p class="col-lg-5 col-md-5 col-5">Final Price</p>
  <p class="col-lg-5 col-md-5 col-5 text-end">$<?php echo $_SESSION['total_sum']?></p>
</div>
  </div>

  <script src="js/javascript/js">
    
    function checkout() {
      location.replace("checkout.php");
    }
  </script>

  <button class=" btn btn-warning fs-5 mt-3 container" onclick="checkout
  ()">Check Out</button> </div> </div> </div>


<!-- ------------------------------------- -->
<?php include 'footer.php'; ?>
<?php
if (isset($_POST['del'])) {
  ?>
  <script type="text/javascript">
    alert("clicked");
  </script>
  <?php
}

?>
</body>
</html>
<style>
  
  .img-thumbnail{
    border: none;
    /*border-right: solid 1px silver;*/
  }
  th,td{
    padding: 1.5%;
    border: solid ; 
  }
  
.bg-orange{
background: darkorange;
}  
.center{
  display: block;
  justify-content: center;
  margin: auto;
}
@media only screen and (max-width: 600px){
  th,td{
    padding: 0;
    
  }
}
</style>
