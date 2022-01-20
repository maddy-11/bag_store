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
	<title>Admin</title>
</head>
<body>
	<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


	<div class=" py-3 bg-themee " style="height: 100%;">
		<h1 class="text-center text-dark mt-5">Welcome Admin</h1>
		<p class="text-center text-dark mb-5">From this panel you have the authority to add or remove an item or a user from the accounts list</p>
<div class="container col-lg-8 my-5">
		<div class="row col-lg-12 m-auto" style="justify-content: space-around;">
		<a href="addproduct.php" class="btn btn-warning my-1 col-lg-5">Add Product</a>
		<a href="view_product.php" class="btn btn-warning my-1 col-lg-5">View Product</a>
		<a href="View_orders.php" class="btn btn-warning my-1 col-lg-5">View Orders</a>
		<a href="view_users.php" class="btn btn-warning my-1 col-lg-5">View Users</a>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>
</body>
</html>