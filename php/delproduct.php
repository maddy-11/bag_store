<?php
session_start();
include 'C:\xampp\htdocs\bag_store\connection.php';


  $p_id = $_GET['product_id'];

  $x = mysqli_query($connection,"delete from orders where id = {$p_id}");
  if ($x) {
      ?>
  <script type="text/javascript">
    alert("Product Deleted Successfully");
  </script>
  <?php
  }


?>
  <script type="text/javascript">
    location.replace("/bag_store/cart.php?id=<?php echo $_SESSION['id']?>")
  </script>
  