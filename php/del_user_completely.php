<?php
include 'C:\xampp\htdocs\bag_store\connection.php';

$p_id = $_GET['id'];

$del = mysqli_query($connection,"delete from accounts where ID = $p_id");

if($del){
?> 
<script type="text/javascript">
	location.replace("/bag_store/view_users.php");
</script> <?php 
}
else{
	echo "unsuccessful";
}