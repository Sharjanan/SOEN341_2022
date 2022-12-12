<?php include "header.php"; ?>
<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   if (isset($_POST['product_name'])) {
   
   }
   $product_price = $_POST['product_price'];

   if (isset($_FILES['product_img']['name'])) {
     
      $product_image = $_FILES['product_img']['name'];
      $product_image_tmp_name = $_FILES['product_img']['tmp_name'];
      $product_image_folder = 'products/' . $product_image;

   }

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(product_name, product_price, product_img) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($link,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};


?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>product update page</h3>
         <input type="text" placeholder="Enter product name" name="product_name" class="box">
         <input type="number" placeholder="Enter product price" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_img" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

    $select = mysqli_query($link, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th>action</th>

         </tr>
         </thead>

         <?php 
         while($row = mysqli_fetch_assoc($select)){
           
            
         ?>
         <tr>
            <td><img src="./products/<?php echo $row['product_img']; ?>" height="100" alt=""></td>
            <td><?php echo $row['product_name']; ?></td>
            <td>$<?php echo $row['product_price']; ?>/-</td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="delete.php?delete=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
         <?php
            } 
            $link -> close();
         ?>
      </table>
   </div>

</div>


</body>

<?php include "footer.php"; ?>