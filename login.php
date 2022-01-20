<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/loginandregister.css">
	<?php include 'php/links.php' ?>

<!-- ===============================================================================================-->
</head>
<body>
<?php include 'header.php'; ?>
<!-- -------------------------------------------- -->
<?php 
		if(isset($_POST['login']))
		{
			$email=$_POST['email'];
			$pass=$_POST['pass'];

			$email_search = "select * from accounts where email_address = '$email'";
			$query= mysqli_query($connection,$email_search);
			
			$list= mysqli_num_rows($query);
			
			if($list) {	
				$details = mysqli_fetch_assoc($query);
				$dbpass = $details['pass'];
				$_SESSION['_user']=$details['email_address'];
				$_SESSION['id']=$details['ID'];
				$_SESSION['cart'] = 0;
				$_SESSION['check'] = $details['ID'];

				if($pass == $dbpass) {
					?>
					<script>

						location.replace("index.php")
					</script>
					<?php
				}
				else{
					?>
					<script>
						alert("Wrong Password");
					</script>
					<?php
				}
			}
			elseif($email == "")
			{
				?>
					<script>
						alert("Enter Any Email");
					</script>
					<?php
			}
			else{
				?>
				<script type="text/javascript">
					alert("Email Doesn't Exist");
				</script>
				<?php


			}
}
	
?>

	<!-- ------------------------------------- -->
	<div class="mt-5">
		
				<div class="formm col-lg-6 col-10 my-5">
					<div class="p-1 pb-5">
				<form class="Sign-In-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				<div class="mt-5">
				<h1 id="title" class = "my-5 col-lg-6 bg-warning" >
						Sign In
					</h1>
					</div>	
					<div class = "row col-lg-12 " style=" justify-content:center;">
						<input class = "my-2 col-lg-7 col-md-7 col-10" id="input2" type="email" name="email" style="height: 40px;" placeholder="&nbsp;Enter Email">
						<input class = "my-2 col-lg-7 col-md-7 col-10" id="input2" type="password" name="pass" placeholder="&nbsp;Enter Password" style="height: 40px;">
						</div>

							<div class="buttns mt-3 col-lg-7 col-md-5  col-10 m-auto">
							<button class="btn btn-warning col-lg-5 col-md-5 fs-5" id="form_btn" type="submit" name="login" value="Sign In"toggle="tooltip" data-placement="top" title="Sign In" >Sign In</button>
							<a class="btn btn-warning col-lg-5 col-md-5 fs-5" href="register.php" id="form_btn" toggle="tooltip" data-placement="top" title="Register"> Register</a>
							</div>
				</form>
				
			</div>
			</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>