<?php

    require_once "../classes/products.php";

    $products = new Products;
    
    $products->deleteProduct($_GET['product_id']);
?>