<?php 
include 'C:/xampp/htdocs/bag_store/connection.php';
if(isset($_POST['newz'])){
	$email = $_POST['subscriber'];
	$query = "insert into newsletter (email) values ('$email')";

	$equery = mysqli_query($connection,$query);

	if($equery){
		?>
		<script type="text/javascript">
			alert("Email Added Successfully");
			location.replace("/bag_store/index.php");
		</script>
		<?php

	}
	else{
		?>
		<script type="text/javascript">
			alert("Some Error Occured");
		</script>
		<?php
	}
}
?>