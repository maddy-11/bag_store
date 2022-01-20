<?php
include 'connection.php';
$del = $_GET['id'];
$query = mysqli_query($connection,"delete from orders where id = $del");
?>
<script type="text/javascript">
	location.replace("http://localhost/bag_store/view_orders.php");
</script>