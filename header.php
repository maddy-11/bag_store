<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="bg-theme p-1 border-bottom border-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-theme container-fluid py-2 ">
  <div class="container-fluid">
    <div class="col-lg-6 col-6 col-md-6 navbar-brand mx-2" ><a href="index.php"><img src="images/logo.png" style="height: 50px;"></a></div>
    <button class="navbar-toggler p-1 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <div class="bg-dark menu-item"></div>
      <div class="menu-item bg-dark mt-1"></div>
      <div class="menu-item bg-dark mt-1"></div>
    </button>
    <div class="collapse navbar-collapse text-white  ms-5" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 fs-4 ">
        <li class="nav-item " >
          <a class="nav-link active text-dark " href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active text-dark " href="Contact.php">Contact</a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu bg-theme- fs-5" id="drop">
            <li><a class="dropdown-item" href="products.php?category=laptops">Laptop Bags</a></li>
            <li><hr></li>
            <li><a class="dropdown-item" href="products.php?category=purses">Women Purse</a></li>
            <li><hr></li>
            <li><a class="dropdown-item" href="products.php?category=hiking">Hiking Bags</a></li>
            <li><hr></li>
            <li><a class="dropdown-item" href="products.php?category=travel">Travel Bags</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu bg-theme- fs-5 "  aria-labelledby="navbarDropdown" id="drop">
          <?php if(!isset($_SESSION['id'])){?>
            <li><a class="dropdown-item" href="login.php">Log In</a></li>
            <li><hr></li>
            <li><a class="dropdown-item" href="register.php">Register</a></li>
            
            <?php }
            else {?>
            <li><a class="dropdown-item" href="update.php?id=<?php echo $_SESSION['id']?>">Profile</a></li>
            <li><hr></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><hr></li>
            <li><a class="dropdown-item" href="delete.php?id=<?php echo $_SESSION['id']?>">Delete Profile</a></li>
            <li><hr></li>
            <?php
            
            if ($_SESSION['_user'] == "mahmoodshah321@gmail.com") {
              ?>
            <li>
              <li><a class="dropdown-item" href="admin.php">Admin</a></li>
            </li>
            <?php
            }
            ?>
          </ul>
        </li>
        <li class="nav-item">
          <div class="row" style="align-items: center; justify-content: center;">
          <a class="nav-link active col-lg-8 text-dark " href="cart.php?id=<?php echo $_SESSION['id']?>"><i class="fa fa-shopping-cart fs-1"></i></a>
          <?php 
          if($_SESSION['cart']>0){
          ?>
          <label class="bg-danger font fs-5 text-white col-lg-4 rounded-circle"><?php echo $_SESSION['cart']?></label>
<?php
        }
          ?>
        </div >
        </li>
<?php } ?>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
</div>
<style type="text/css">
  #drop a{color: white;}
  #drop .hr{background: red;}
  .navbar-toggler { background: grey;}
  .menu-item{ width: 20px; height: 2px; margin: 5px; }
  .nav-link{color: red; }
  .bg-theme-{
    background: orange;
    border: none;

  }
</style>