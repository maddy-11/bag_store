<?php 
include 'C:\xampp\htdocs\bag_store\connection.php';
session_start();

if (isset($_POST['submit'])) {

$card_name = $_POST['card_name'];
$card_num = $_POST['card_number'];
$card_exp_m = $_POST['exp_month'];
$card_exp_y = $_POST['exp_year'];
$card_cvv = $_POST['cvv'];

$selectcard = mysqli_query($connection,"select * from card where card_num = $card_num");
if($selectcard){
$card = mysqli_fetch_assoc($selectcard);
if ($card) {


if($card_name == $card['card_name'] && $card_exp_m == $card['card_exp_month'] && $card_exp_y == $card['card_exp_year'] && $card_cvv == $card['card_cvv']){
	// echo '<script> alert("hello"); </script>';
// -----------------------------------

$address = $_POST['add'];
$city = $_POST['city'];
$province = $_POST['province'];
$phone = $_POST['phone'];

$name = $_POST['card_name'];
$card = $_POST['card_number'];
$exp_month= $_POST['exp_month'];
$exp_year= $_POST['exp_year'];
$cvv= $_POST['cvv'];



$insertQuery = mysqli_query($connection, "insert into delivery_add (address,city,province,phone)values('$address','$city','$province','$phone')");

if ($insertQuery) {
	
	?>
	<script>
		alert("Successful");
		location.replace("/bag_store/bill.php?id=<?php echo $_SESSION['id'] ?>");
	</script>
	<?php
	session_start();
	$num = $_SESSION['id'];
	$del = mysqli_query($connection,"update orders set bool = 1 where user_id = $num");
}
else{
	?>
	<script>
		alert("Card was Declied");
		location.replace("/bag_store/checkout.php");
	</script>
	<?php
}

}
else{
	echo '<script> alert("Sorry Card was Declined"); </script>';
	echo "<script>location.replace('/bag_store/checkout.php')</script>";
}
}
else{
	echo '<script> alert("Sorry Card was Declined"); </script>';
	echo "<script>location.replace('/bag_store/checkout.php')</script>";	
}
}
else{
	echo '<script> alert("Sorry Card was Declined"); </script>';
	echo "<script>location.replace('/bag_store/checkout.php')</script>";	
}
}

?>