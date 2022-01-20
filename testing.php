<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testing</title>
</head>
<body>
<?php include 'php/links.php'; ?>
<?php include 'header.php' ?>
<form method="GET" action="" class="m-auto mt-5 bg-warning col-lg-6 p-3 rounded border border-danger border-5"> 
<h1 class="text-center font">Sign In Form</h1>
<hr>
    
        <input type="text" name="text" placeholder="Mehmood">
        <input type="password" name="pass" placeholder="pass">
        <input type="submit" name="sub" class="btn btn-danger">

</form>
<hr>
<?php

$x = $_GET;

print($x['text']);

?>

</body>
</html>