<?php 
include 'connection.php';
 if(isset($_POST['register'])) {

 
 
 	$fname= $_POST['first_name'];
 	$lname=$_POST['last_name'];
 	$email=$_POST['email_address'];
 	$pass=$_POST['password'];
 	
$inquery = "insert into accounts(first_name,last_name,email_address,pass)values('$fname','$lname','$email','$pass')";

 	$x = mysqli_query($connection,$inquery);
 	if($x)
	 {
		 ?>
		 <script>
			 alert("Account Created Successfully");
			 location.replace("/bag_store/index.php");
		 </script>
		 <?php
	 }
	 else{
		?>
		<script>
			alert("Email Already Exists");
			location.replace("/bag_store/register.php");
		</script>
		<?php
	 }
 }
 
?>
