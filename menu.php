<?php include("conn.php")?>

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
$product=mysqli_query($connect"SELECT * FROM foods ORDER BY foods_id ASC");
 if (!empty($product)){
	 while($row=mysqli_fetch_array($product)){
?>
    <div class="box-container">
    <form method="post" action="index.php?action=add&pid=<?php echo $row["foods_id"];?>">
        <div class="box">
            <a href="#" class="fas fa-heart"></a>  
            </div>
            <div class="content">
			<div class="foods-image"><img src="<?php echo $row["picture"];?>"?</div>
               <div class="foods-name"><?php echo $row["name"];?></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="foods-price"><?php echo "RM".$row["price"];?></div>
                <div class="foods-quantity"><input type="text" name="quantity" value="1" size="2"></div>
				<div class="btn" ><input type="submit" value="Add to Cart"></div>
            </div>
        </form>
	</div>
	
<?php
	 }
 } else {
echo "No Records.";
 }
?> 

</section>

<!-- footer -->
<?php include("footer.php")?>
</body>
</html>