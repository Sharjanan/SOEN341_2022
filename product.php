<?php include "header.php"; ?>

<?php
require_once "config.php";

$sql = "SELECT * FROM products";
$result = $link->query($sql);

 
?> 
<link rel="stylesheet" href="./css/product.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<section class="product_page">
<h1> List of Products </h1>

<!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
  <!--product1 -->
   <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="./products/<?php echo $rows['product_img'];?>" alt="Denim Jeans" style="width:100%" height="300" >
        <h3><?php echo $rows['product_name'];?></h3>
        <p class="price"><?php echo $rows['product_price'];?></p>
       
        <p><button>Add to Cart</button></p>
      </div>
    </div>
  </div>
            <?php
                }
            ?>

</section>

<?php include "footer.php"; ?>
