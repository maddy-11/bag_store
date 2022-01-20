<?php
include 'C:\xampp\htdocs\bag_store\connection.php';

$p_id = $_GET['product_id'];

$del = mysqli_query($connection,"delete from items where product_id = $p_id");

if($del){
?> 
<script type="text/javascript">
	location.replace("/bag_store/view_product.php");
</script> <?php 
}
else{
	echo "unsuccessful";
}