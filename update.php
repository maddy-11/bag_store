<!DOCTYPE html>
<html lang="en">
<head>


	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/loginandregister.css">
	<?php 
	include 'php/links.php';
	?>
  
</head>
<body>

<?php include 'header.php'; ?>

	
<!-- ---------------------------------------------------- -->
		<?php 
		

		$id=$_GET['id'];

		$jquery="select * from accounts where ID = {$id}";
		$data=mysqli_query($connection,$jquery);
		$fetch=mysqli_fetch_assoc($data);
	
 if(isset($_POST['update'])) {

	$id=$_GET['id'];
	$fname= $_POST['first_name'];
 	$lname= $_POST['last_name'];
 	$email=$_POST['email_address'];
 	$pass=$_POST['password'];
 	
 	$updatequery = ("UPDATE accounts set ID = $id,first_name='$fname', last_name='$lname',email_address='$email', pass='$pass' where ID = $id");
 	$x = mysqli_query($connection,$updatequery);	
$jquery="select * from accounts where ID = {$id}";
		$data=mysqli_query($connection,$jquery);
		$fetch=mysqli_fetch_assoc($data);
 	if (!$x) {
 		?>
 		<script type="text/javascript">
 			alert("Data not inserted");
 		</script>
 		<?php 

}
				
 	}
			
 
?>
<?php 
	$id=$_GET['id'];
		$query="select * from accounts where ID = {$id}";
		$d=mysqli_query($connection,$query);
		$count= mysqli_num_rows($d);
 		if($count) {
				$namefetch = mysqli_fetch_assoc($d);
				$_SESSION['_user']=$namefetch['first_name'];
			}
?>

<!-- ---------------------------------------------------- -->
	


<!-- ===============================================================================================-->
<body>

<div class="formm mt-5 col-lg-5 col-md-7 col-10 m-auto my-5">
					<div class="bg-grad p-3">
				<form class="Sign-In-form validate-form" method="POST" action="">
					<h1 id="title" class="col-lg-9 col-md-9 col-10 my-2 btn-warning font">
						Profile
					</h1>
						<div>
						<input class = "mt-3 col-lg-9 col-md-9 col-10" id="input2" type="text" name="first_name" style="height: 40px;" value="<?php echo $fetch['first_name']?>" required>
						<input class = "mt-3 col-lg-9 col-md-9 col-10" id="input2" type="text" name="last_name" style="height: 40px;" value="<?php echo $fetch['last_name']?>" required>
						<input class = "mt-3 col-lg-9 col-md-9 col-10" id="input2" type="email" name="email_address" style="height: 40px;"  value="<?php echo $fetch['email_address']?>" required>
						<input class = "mt-3 col-lg-9 col-md-9 col-10" id="input2" type="password" name="password" style="height: 40px;" value="<?php echo $fetch['pass']?>" required>
						</div>

						<input class="btn btn-warning mt-3 col-lg-8 fs-4 col-md-6 col-8" id="form_btn" type="submit" name="update" value="Update" toggle="tooltip" data-placement="top" title="Update"><br>
						
							
						
				</form>
				</div>
			</div>
<!--===============================================================================================-->
<?php include 'footer.php'; ?>
</body>
</html>
