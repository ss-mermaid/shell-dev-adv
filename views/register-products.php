<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50">
        <div class="card-body">
            <form action="../actions/add-products.php" method="POST">
                <p><font size="5"><b>REGISTER</b></font></p>

                <label for="product_id">Products Name:</label> 
                <input type="text" name="product_name" id="product_name"class="form-control mb-2" required>
                            
                <label for="product_price"> Products Price:</label>
                <input type="text" name="product_price" id="product_price" class="form-control" required>

                <button type="submit" name="btn_register" class="btn btn-success mt-3" value="register">Register</button>

                
            </form>     
        </div>
    </div>
    
</body>
</html>