<?php
    session_start();
    
  if(isset($_POST['sub']))
  {
    include 'links.php';
    ?>
    
    <?php
    $p_id = $_SESSION['p_id'];
    $user = $_SESSION['id'];
    $fetch_name = mysqli_query($connection,"select * from accounts where ID = $user");
    $namefetch = mysqli_fetch_assoc($fetch_name);
    $name = $namefetch['first_name']." ".$namefetch['last_name'];
    $user_ratings = $_POST['ratings'];
    $rev = $_POST['review'];
    $pd = $p_id;

    $z = 0;
    $y = 0;

    $insert_query = mysqli_query($connection, "insert into reviews (reviewer_name,review,ratings,p_id,user_id)values('$name','$rev',$user_ratings,$pd,$user)" );

    $ratings_query = mysqli_query($connection,"select * from reviews where p_id = $p_id");
    if ($ratings_query) {
    
    while($rat = mysqli_fetch_array($ratings_query)){
      $z = $z + $rat['ratings'];

    $y++;
    }
     

  }
    $final_ratings = floor($z/$y);
    $updatequery = mysqli_query($connection,"update items set rattings = $final_ratings where product_id = {$p_id}");
    }

    echo "<script> location.replace('/bag_store/buy.php?product_id=$p_id') </script>"
?>

