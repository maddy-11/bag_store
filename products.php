<?php
$category = $_GET['category'];
$cat = strtoupper($category);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title><?php echo $cat ?></title>
    <?php 
      include 'php/links.php';
      include 'header.php';
      ?>
      <style type="text/css">
        .middle{
          justify-content: space-around;
        }
        .bbody{
          background: #F4F4F4;
        }
        .img{
          
          height: 300px;
        }
        .img_women{
          width: 300px;
          height: 200px;
        }
        .space-between{
          justify-content: space-between;
          flex-wrap: wrap;
        }
        .col-custom{
          width: 350px;
          margin: 10px;
          background: white;


        }
        .col-custom-women{
          height: 300px;
          width: 300px;
          margin: 10px
          border: solid black 1px;
        }
        a{
          text-decoration: none;
          color: darkcyan;
        }

@media only screen and (max-width: 830px){
          .col-custom{
          height: 250px;
          width: 200px;
        }

        }
@media only screen and (max-width: 1199px){
          .col-custom{
          height: 400px;
          width: 300px;
        }

        }
@media only screen and (max-width: 500px){
    .col-custom{
          height: 90%;
          width: 90%;
        }

    .img_women{
          width: 100%;
          
        }
  }

      </style>

<?php
$category = $_GET['category'];
?>

   </head>
   <!-- body -->
   <body >

  <div class="container-fluid p-4">

    <h1 class="fs-1 text-center container p-4">New Arrivals</h1>
    <p class="fs-3 text-center col-lg-8 container">We have recently launched the new season stuff. You can find the perfect stuff for your below</p>
    <hr class="mt-5">
  </div>
  <div class="container-fluid bg-white border-bottom py-5 col-lg-12 col-12 col-md-12">
    
    <div class="container ">
    <div class="row middle text-white ">

<?php
$category = $_GET['category'];
$selecttion_query = mysqli_query($connection, "select * from items where category = '$category'");


      while($rows = mysqli_fetch_array($selecttion_query) )

{

        ?>

      <div class="brand_item-box col-custom card radius-5 p-3 ">
        <!-- <h2 class="text-center mt-1 text-dark"><?php echo $rows['product_name'] ?></h2>
        <hr class="bg-dark"> -->
          <div class="brand_img item-all">


            <?php if ($category == "laptops") { ?>
            <img class="img ms-3" src="<?php echo $rows['image']?>">
         <?php } ?>


        <?php if ($category == "purses") { ?>
        <img class="img_women p-1" src="<?php echo $rows['image']?>"> <?php } ?>

        <?php if ($category == "hiking") { ?>
        <img class="img p-1" src="<?php echo $rows['image']?>"> <?php } ?>

        <?php if ($category == "travel") { ?>
        <img class="img p-1" src="<?php echo $rows['image']?>"> <?php } ?>


          </div>
          <div class="brand_detail-box text-center">
            <a href="buy.php?product_id=<?php echo $rows['product_id'] ?>" class="slider-btn1 mr-3  ">
              <?php echo $rows['product_name'] ?>
            </a>
          </div>
</div>
    <?php  } ?>

          </div>
 

</div>
</div>
    <!-- --------------------------------- -->
    <?php include 'footer.php' ?>

   </body>
</html>
