<?php 
session_start();
session_commit();
if($_SESSION['_user'] != "mahmoodshah321@gmail.com")
{
	echo "<script> alert('Sorry You are Not an Admin') </script>";
	echo "<script> location.replace('index.php') </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orders List</title>
</head>
<body>

<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


<div class="container">
	<h1 class="font my-3">List of All Product</h1>
	<table width="100%" class="table table-striped">
		<thead class="bg-warning">
<!-- 		<th>Product ID</th>	
 -->		<th>Item Name</th>
		<th>Color</th>
		<th>Quantity</th>
		<th>User</th>
		<th>Remove</th>
		</thead>
		<tbody>
			<?php
			$fetchQ = mysqli_query($connection,"select * from orders where bool = 1");
			if ($fetchQ) {
			
			while($fetch = mysqli_fetch_array($fetchQ))
			{
				?>
				<tr>
				<!-- <td><?php echo $fetch['product_id']; ?></td> -->
				<td><?php echo $fetch['product_name'] ?></td>
				<td><?php echo $fetch['color']; ?></td>
				<td><?php echo $fetch['quantity']; ?></td>
				<td>
					<?php
					$id = $fetch['user_id'];
					$fetch1 = mysqli_query($connection,"select * from accounts where ID = $id");
					$assoc = mysqli_fetch_assoc($fetch1);
					echo $assoc['first_name'] ?>
				</td>
				<td> <a href="php/delete_order.php?id=<?php echo $fetch['id'] ?>"><i class="fa fa-trash fs-1"></i></a></td>
				</tr>

				<?php
			}
			}
			?>
		</tbody>

	</table>
</div>


</body>
</html>