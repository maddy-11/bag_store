<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Check Out</title>
</head>
<body>
  <?php include 'php/links.php'; include 'header.php' ?>

<h1 class="font text-center fs-1 mt-2 font">Check Out</h1>
<hr>
<div class="container-fluid ">

<div class="container col-lg-7 mt-5 font border">
  <h2>Delivery Address</h2>
            <form method="POST" action="php/checkout_validation.php">
            <label><i class="fa fa-map-marker" style="font-size:20px"></i> Address</label>
            <input type="text" id="city" name="add" placeholder="Address" required>
            <label><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City" required>
            
            <div class="row just-center mt-3 ">
            <div class="col-lg-5 col-12">
            <p class="m-auto">Province</p>
            <input type="text" name="province" placeholder="KPK" required >
            </div>
            <div class="col-lg-5 col-12 mb-2">
            <p class="m-auto"><i class="fa fa-phone"></i> Phone Number</p>
            <input type="text" name="phone" placeholder="03*********" required>
            </div>
            </div>
            <div class="row mb-2" style="align-items: center;">
            
            </div>
            
</div>

<div class="container col-lg-7 border font ">
  <h2 class="fs-1">Payment</h2>
  <h3>Accepted Cards</h3>

  <div>

  <i class="fa fa-cc-visa" style="color:navy; font-size: 30px;"></i>
  <i class="fa fa-cc-paypal" style="color:blue;font-size: 30px;"></i>
  <i class="fa fa-cc-mastercard" style="color:orangered;font-size: 30px;"></i>
  <i class="fa fa-cc-discover" style="color:red;font-size: 30px;"></i>
  </div>
  <div class="my-2">
  <label class="m-auto">Name on Card</label>
  <input class="" type="text" name="card_name" placeholder="Syed Mehmood Shah"required>

  <label class="m-auto mt-2">Credit card number</label>
  <input type="text" class="" name="card_number" placeholder="1111222233334444"required>


            <div class="row just-center mt-3 ">
            <div class="col-lg-3">
            <p class="m-auto">EXP Month</p>
            <input type="number" max="12" min="1" name="exp_month" placeholder="01" >
            </div>
            <div class="col-lg-3">
            <p class="m-auto">EXP Year</p>
            <input type="text" name="exp_year" placeholder="2022" >
            </div>
            <div class="col-lg-3 mb-2">
            <p class="m-auto"><i class="fa fa-phone"></i> CVV</p>
            <input type="text" name="cvv" placeholder="111" >
            </div>
            </div>
            <input type="submit" class="btn btn-outline-primary fs-3" value="Proceed To Pay" name="submit">
</form>
</div>
</div>

</div>

<?php include 'footer.php' ?>
</body>
</html>
<style type="text/css">
  .just-center{
    justify-content: space-between;
    margin: auto;
  }
</style>