<?php session_start(); 
include 'C:\xampp\htdocs\bag_store\connection.php';
$p_id = $_GET['product_id'];
  $fetchquery = mysqli_query($connection,"select * from items where product_id = $p_id");
  if($fetchquery){
  $fetch = mysqli_fetch_assoc($fetchquery);
  $rows = mysqli_num_rows($fetchquery);
  if ($rows) {
  $name = $fetch['product_name'];
  $img = $fetch['image'];
  $p_price =$fetch['price'];
  $rattings =$fetch['rattings'];
  }}


  
<script type="text/javascript">
  location.replace("buy.php?product_id=<?php echo $pid ?>")
</script>
<?php

?>