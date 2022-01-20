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
	<title>Users List</title>
</head>
<body>
	<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


<div class="container">
	<h1 class="font my-3">List of All Product</h1>
	<table width="100%" class="table table-striped">
		<thead class="bg-warning">
		<th>User ID</th>	
		<th>Name</th>
		<th>Email</th>
		<th>Remove</th>
		</thead>
		<tbody>
			<?php
			$fetchQ = mysqli_query($connection,"select * from accounts");
			if ($fetchQ) {
			
			while($fetch = mysqli_fetch_array($fetchQ))
			{
				?>
				<tr>
				<td><?php echo $fetch['ID']; ?></td>
				<td><?php echo $fetch['first_name']." ".$fetch['last_name']; ?></td>
				<td><?php echo $fetch['email_address']; ?></td>
				<td> <a href="php/del_user_completely.php?id=<?php echo $fetch['ID'] ?>"><i class="fa fa-trash fs-2"></i></a></td>
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
<style type="text/css">
	th,td{
		padding: 1%;
		/*border: solid 1px black;*/
	}
</style>