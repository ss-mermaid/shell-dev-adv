<?php
    require_once "../classes/products.php";

    $products_id = $_POST['product_id'];
    $products_name = $_POST['product_name'];
    $products_price = $_POST['Product_price'];

    $products =new Products;
    $products->editProduct($product_id,$product_name,$product_price);
?>



 
