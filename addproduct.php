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
	<title>Add Product</title>
</head>
<body>
<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


<div class="container my-5">
	<h1 class="font my-3">Add Product</h1>
	<form method="POST" enctype="multipart/form-data">
		<input type="text" name="pn" class="m-auto" placeholder="Procut Name">
		<input type="text" name="pp" class="m-auto" placeholder="Product Price">
		<div>
          <textarea type="textbox" name="pd" class="message-box" placeholder="Add Description"></textarea>
        </div>

        <div class="dropdown">
  		<select class="btn btn-warning my-2" name="category" id="dropdown" data-toggle="dropdown">
  		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    	<option class="dropdown-item" value="laptops">Laptops Bags</option>
    	<option class="dropdown-item" value="purses">Purses</option>
    	<option class="dropdown-item" value="hiking">Hiking Bags</option>
    	<option class="dropdown-item" value="travel">Travel Bags</option>
  		</ul>
  		</select>
		</div>

        <span class="fs-4">Ratings </span>
        <input type="number" min="1" max="5" name="pr" class="col-lg-1" value="5">
		<input type="file" name="file1" class="m-auto my-2 border">
		<input class="btn btn-warning col-lg-6 me-auto	" type="submit" name="submit" style="display: block; margin: auto;">
	</form>
</div>
<?php include 'footer.php'; ?>

<?php

if (isset($_POST['submit'])) {
	
	$p_n = $_POST['pn'];
	$p_p = $_POST['pp'];
	$p_d = $_POST['pd'];
	$p_r = $_POST['pr'];
	$cat = $_POST['category'];




	$image = $_FILES['file1']['name'];
	// $img_type = $_FILES['file1']['type'];
	// $im_er = $_FILES['file1']['error'];
	// $img_size = $_FILES['file1']['size'];

	$path = "images/$image";
	
	$queryC = mysqli_query($connection,"select * from items where category = '$cat'");
	$i =1; while($rows = mysqli_fetch_array($queryC)) { $i = $rows['product_id']; }

	if($cat == "laptops"){ $pid = $i + 1; }

	if($cat == "purses"){ $pid = $i + 51; }

	if($cat == "hiking"){ $pid = $i + 101; }

	if($cat == "travel"){ $pid = $i + 151; }
	
	
	echo $pid;
	?>
		
	</div>

	<?php

	$insertQ = mysqli_query($connection,"insert into items (product_id,product_name,price,p_desc,image,rattings,category) values($pid,'$p_n','$p_p','$p_d','$path','$p_r','$cat')");


	if($insertQ)
	{

	}
	else{ echo '<script> alert("Unssecsful"); </script>'; }
}

?>

</body>
</html>