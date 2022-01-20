
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete</title>
</head>
<body>

</body>
</html>
<?php 
include 'connection.php';

$id=$_GET['id'];

$delquery = "delete from accounts where ID = $id";

$dquery = mysqli_query($connection,$delquery);

if($dquery){
session_start();
session_destroy();
	?>
	<script type="text/javascript">
		alert("Deleted Successfully");
		location.replace("index.php");
	</script>
<?php } ?>
	