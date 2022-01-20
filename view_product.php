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
	<title>Products List</title>
</head>
<body>
<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


<div class="container mt-5">
	
	<table width="100%" class="table table-striped">
		<thead class="bg-warning">
		<th>Image</th>	
		<th>Product</th>
		<th>Rattings</th>
		<th>Price</th>
		<th class="text-center">Delete</th>
		</thead>
		<tbody>
			<?php
			$fetchQ = mysqli_query($connection,"select * from items");
			while($fetch = mysqli_fetch_array($fetchQ))
			{
				?>
				<tr>
				<td><img src="<?php echo $fetch['image'];?>" class = "image"></td>
				<td><?php echo $fetch['product_name']; ?></td>
				<td><div> <?php
				$i=1;
					while($i <= $fetch['rattings']) {?>
						<img src="images/star-icon.png">
					<?php $i++; } ?>
				</div></td>
				<td>$<?php echo $fetch['price']; ?></td>
				<td class="text-center"> <a href="php/del_item_completely.php?product_id=<?php echo $fetch['product_id'] ?>"><i class="fa fa-trash fs-1 "></i></a></td>
				</tr>

				<?php
			}
			?>
		</tbody>

	</table>
</div>
</body>
</html>
<style>
	th,td{
		width:10%;
		padding: 1%;
		/*border: solid black 3px !important;*/
	}
	.image{
		height: 90px;
	}
</style>