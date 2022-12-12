<?php
$id = $_GET['delete'];
@include 'config.php';
$sql = "DELETE FROM products WHERE product_id = $id";
if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    echo " sucess";
    echo $id;
   header('Location: admin_page.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
} 
?>