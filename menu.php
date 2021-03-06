<?php 

include'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food / Resturant Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header -->
<?php include ("header.php")?>

<!-- category -->
<section class="category">

    <a href="#" class="box">
        <img src="image/cat-1.png" alt="">
        <h3>combo</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-2.png" alt="">
        <h3>pizza</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-3.png" alt="">
        <h3>burger</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-4.png" alt="">
        <h3>chicken</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-5.png" alt="">
        <h3>dinner</h3>
    </a>

    <a href="#" class="box">
        <img src="image/cat-6.png" alt="">
        <h3>coffee</h3>
    </a>

</section>
<!-- end category -->

    <section class="popular" id="popular">

<div class="heading">
    <span>popular food</span>
    <h3>our special dishes</h3>
</div>
<?php
  $sql="SELECT * FROM foods;";
  $result=mysqli_query($connect,$sql);
  $resultCheck=mysqli_num_rows($result);

  if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
  <div class="box-container">

<div class="box">
    <a href="#" class="fas fa-heart"></a>
    <div class="image">
        <img src=<?php echo $row["picture"];?> alt="">
    </div>
    <div class="content">
        <h3><?php echo $row["name"];?></h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span> (50) </span>
        </div>
        <div class="price"><?php echo $row["price"]?></div>
        <a href="#" class="btn">add to cart</a>
    </div>
</div>
    <?php
    }

  }
?>


</section>

<!-- footer -->
<?php include("footer.php")?>
</body>
</html>