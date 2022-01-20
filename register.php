<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/loginandregister.css">
	<?php include 'php/links.php' ?>


<!-- ===============================================================================================-->
</head>
<body>	
<?php include 'header.php'; ?>

	<!-- ------------------------------------- -->
				<div class="formm mt-5 col-lg-6 col-md-9 col-10 m-auto my-5">
					<div class="bg-grad p-3">
				<form class="Sign-In-form validate-form " method="POST" action="php/registration_validation.php">
					<h1 id="title" class="col-lg-7 col-md-7 col-10 my-2 btn-warning">
						Register
					</h1>
						<div>
						<input class = "mt-3 col-lg-7 col-md-9 col-10 col-sm-12 p-1" id="input2" type="text" name="first_name" style="height: 40px;" placeholder="Enter First Name"required>
						<input class = "mt-3 col-lg-7 col-md-9 col-10 p-1" id="input2" type="text" name="last_name" style="height: 40px;" placeholder="Enter Last Name"required>
						<input class = "mt-3 col-lg-7 col-md-9 col-10 p-1" id="input2" type="email" name="email_address" style="height: 40px;" placeholder="Enter Email"required>
						<input class = "mt-3 col-lg-7 col-md-10 col-10 p-1" id="input2" type="password" name="password" style="height: 40px;" placeholder="Enter Password"required>
						</div>

						<input class="btn btn-warning mt-3 col-lg-6 fs-4 col-md-6 col-8" id="form_btn" type="submit" name="register" value="Register" toggle="tooltip" data-placement="top" title="Register"><br>
						Already a Member? <a href="login.php"><b class="text-primary">Login Here</b></a>
							
						
				</form>
				
			</div></div>
			<?php include 'footer.php' ?>
			</body>
			</html>
<!--===============================================================================================-->




