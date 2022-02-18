<?php
    session_start();

    require_once "../classes/products.php";

    $products = new Products;

    $products_list = $products->getProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <a href="dashboard.php" class="navbar-brand">
            <h3>SALES PRPDUCTS</h3>
        </a>
    </nav> 

    <div class="container">
        <table class="table table-hover">
            <thead class="table-dark">
                <th>Product ID</th>
                <th>Name</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    foreach($products_list as $products){
                ?>
                        <tr>
                            <td><?= $products['product_id']?></td>
                            <td><?= $products['product_name']?></td>
                            <td><?= $products['product_price']?></td>
                            <td>
                                <!-- icon -->
                                <a href="../views/edit-products.php?product_id=<?= $products['product_id']?>" class="btn btn-outline-success">
                                <i class="fas fa-pencil alt"></i></a>
                                <a href="../actions/delete-products.php?product_id=<?= $products['product_id']?>" class="btn btn-outline-danger">
                                <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>        
            <?php
                }
            ?>
            </tbody>
        </table>


    
    </div>
    
</body>
</html>

