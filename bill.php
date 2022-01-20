<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bill</title>
    <style type="text/css">
        td,th{
            /*border: ;*/
            padding: 1%;
        }

    </style>
</head>
<body>

<?php 
include 'php/links.php';
include 'header.php';

    ?>
    <div class="container my-5">
    <table width="100% m-auto" class="table table-striped" >
      <thead class="">
        <th >Product</th>
        <th >Quantity</th>
        <th >Price</th>
        <th >Total</th>

      </thead>
      <tbody>
        <?php 
                $id = $_GET['id'];
                $discount = 0;
                $final_price = 0;
                $_SESSION['total_sum'] = 0;

      
      
          $query = "select * from orders where user_id = {$id} && bool = 1";
          $insert = mysqli_query($connection,$query);
          if($insert){
            if(mysqli_num_rows($insert)){
      
      $result = mysqli_query($connection, "SELECT SUM(t_amount) FROM orders where user_id = {$id}");
      $row = mysqli_fetch_assoc($result); 
      $_SESSION['total_sum']=$row['SUM(t_amount)'];
          }
          while($rows = mysqli_fetch_array($insert))
          {
        ?>
        <tr class="border-top">
        <td><?php echo $rows['product_name'] ?></td>
        <td class="text-center"><?php echo $rows['quantity'] ?></td>
        <td>$<?php echo $rows['price'] ?></td>
        <td>$<?php echo $rows['t_amount'] ?></td>
      </tr>
    <?php }} ?>

      </tr>
      </tbody>
    </table>
    </div>
</body>
</html>
<style type="text/css">
    td,th{
        border: solid 1px;
    }
</style>