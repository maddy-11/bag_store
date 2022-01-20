<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'php/links.php' ;
  $_SESSION['p_id'] = "apple";
  $p_id = $_GET['product_id'];
  $_SESSION['p_id'] = $_GET['product_id'];

  $fetchquery = mysqli_query($connection,"select * from items where product_id = $p_id");
  if($fetchquery){
  $fetch = mysqli_fetch_assoc($fetchquery);
  $rows = mysqli_num_rows($fetchquery);
  if ($rows) {
  $name = $fetch['product_name'];
  $img = $fetch['image'];
  $p_price =$fetch['price'];
  $rattings =$fetch['rattings'];
  $desc = $fetch['p_desc'];
  }}



if (isset($_POST['purchase'])) {
  session_start();
  $_SESSION['cart'] ++;
  session_commit();
}
  ?>
  
  <title><?php echo $name ?></title>
</head>
<body >
  <?php include 'header.php'; ?>

<div class="container-fluid  my-3">
  <div class="row my-5 p-1 mx-1">

    <div class="col-lg-5 border border-warning border-3">
      <img class="img" src="<?php echo $img ?>" class="image-fluid m-auto img">


    </div>

    <div class="col-lg-6 border border-warning border-3 p-3 ">
      <h2 class="fs-1 font"><?php echo $name ?></h2>
      <div class="my-2 fs-3 text-danger">Price $<?php echo $p_price ?></div>
      <h3 class="mt-4 font">Ratings</h3>
        <div class="col-lg-4 col-md-4">
      <?php 
      $i=0;
      while($i<$rattings) {
        ?>
      <img src="images/star-icon.png" class = "image" >
        <?php
        $i++;
      }
      ?>

      </div>
      <h3 class="mt-4 font">Product Description</h3>
      <p class="mt-2 col-lg-11"><?php echo $desc; ?></p>
      <h3 class="mt-4 font">Choose Your Color</h3>
      <form method="POST" class="row px-2" >
        <div  class="col-lg-3 col-md-3 col-4 row align">
        RED
        <input type="radio" name="color" value="Red" class="col-lg-6 col-md-6 col-2" checked required>
        </div>
        <div  class="col-lg-3 col-md-3 col-4 row align">
        BLUE
        <input type="radio" name="color" value="Blue" class="col-lg-6 col-md-6 col-2" required></div>
        <div  class="col-lg-3 col-md-3 col-4 row align">
        BLACK
        <input type="radio" name="color" value="Black" class="col-lg-6 col-md-6 col-2" required></div>
        <div class="mt-2">
        <input type="number" name="no_of_items" min="1" class="col-lg-2 col-md-2 col-3 text-center border-dark mt-1" value="1">
        </div>
        <input type="submit" class="btn btn-warning border-dark mt-5 col-lg-4 btn-hover" value="Add To Cart" toggle = "tooltip" data-placement="top" title="Add to Cart" name="purchase">
      </form>
      
    
    </div>
    
  </div>
</div>

<?php if(isset($_SESSION['id'])) { ?>
<div class=" my-3 col-lg-12" >
  <div class="border border-warning border-3 p-2">
  <h3 class=" fs-2">Write a Review</h3> 


    <form method="POST" action="php/submit_review.php">

      <textarea name="review" placeholder="Write a Review" class="col-lg-8" required></textarea>
      <p class="font fs-4">Ratings</p>
      <input type="number" name="ratings" class="col-lg-1 col-2 " value="5" max="5" min="1">
      <input type="submit" name="sub" class="btn btn-warning col-lg-6">
    </form>

  </div>
</div>
<?php
}
?>

<!-- ///////////////////////////////// -->



<!-- ///////////////////////////////// -->

  <div class="container-fluid col-lg-12 my-4">
    <h3 class=" fs-2">Ratings and Review</h3>
<?php
$a = 1;

$review_fetch = mysqli_query($connection,"select * from reviews where p_id = $p_id");
while($reviews = mysqli_fetch_array($review_fetch)){
  ?>
    <table  class="border border-warning border-2 mb-1" width="100%">
      <tbody>
        
        <tr>
          <td class="fs-4 font p-1"><?php echo $reviews['reviewer_name']; ?></td>
        </tr>

        <tr>
          <td>
      
      <div class="col-lg-2 col-md-4">

      <?php 
      $i=0;

        while ($i < $reviews['ratings']){
        ?>

      <img src="images/star-icon.png" class = "image" >
        <?php
        $i++;
        }
      
      ?>
      </div>

          </td>
        </tr>

        <tr>
          <td><p class="mt-2 col-lg-12"><?php echo $reviews['review']; ?></p></td>
        </tr>

      </tbody>
    </table>
    <?php $a++; }?>
  </div>





<?php include 'footer.php';


  
if (isset($_POST['purchase'])) {

  
  if(!isset($_SESSION['id']))
{
  ?>
  <script type="text/javascript">
    alert("Sorry You are not Logged In");
    location.replace("login.php");
  </script>
    <?php
  }

    $clr = $_POST['color'];
  $quantity = $_POST['no_of_items'];
  $t_amount = $p_price * $quantity;
  $user = $_SESSION['id'];

  $insertquery = mysqli_query($connection,"insert into orders (product_id,product_name,color,price,quantity,t_amount,image,user_id)values($p_id,'$name','$clr',$p_price,$quantity,$t_amount,'$img',$user)");

  if ($insertquery) {

    ?>
<script type="text/javascript">
  // alert("successful");
</script>
    <?php
// $_SESSION['cart']++;
  }
  else{
    ?>
<script type="text/javascript">
  alert("Unsuccessful");
</script>
    <?php

  }}
  $_SESSION['p_id'] = $_GET['product_id'];
  
?>


</body>
</html>
<style type="text/css">
  .row img{
    width: 80%;
  }
  
  .img{
    padding: 10%;
          
        }
        .align{
          align-items: center;
        }
        input[type=number]{
          
        }
        .btn-hover:hover{
          background: white;
          color: black;
        }

        img.image{
          width:10%;
        }

        
</style>