<?php
    require_once "../classes/products.php";

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $products = new Products;
    
    $products->createProducts($product_name, $product_price);
?>