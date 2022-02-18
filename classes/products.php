<?php
    require "database.php";

    class Products extends Database{
        public function createProducts($product_name, $product_price){
            $sql = "INSERT INTO products(product_name, product_price)
                   VALUES ('$product_name', '$product_price')";

            if($this->conn->query($sql)){
              header("location: ../views/dashboard.php");
             } else{
                die("Error. " . $this->conn->error);
            }
        }

        public function getProducts(){
            $sql = "SELECT * FROM products";

            if($result = $this->conn->query($sql)) {
              while($row = $result->fetch_assoc()){
                 $products[] = $row; 
              } 
              return $products;
            }else{
                die("Error". $this->conn->error);
            }
        }

        public function getSpecificProduct($product_id){
            $sql = "SELECT * FROM products WHERE product_id = '$product_id'";

            if($result = $this->conn->query($sql)) {
             return $result->fetch_assoc();
            }else{
                die("Error". $this->conn->error);
            }
        }

        public function deleteProduct($product_id){
        $sql = "DELETE FROM products WHERE product_id = '$product_id'";

        if ($this->conn->query($sql)) {
            header("location:../views/dashboard.php");
            exit;
        }else{
            die("Error ".$this->conn->error);
        }
    }
        public function editProduct($product_id, $product_name, $product_price){
        $sql = "UPDATE products SET product_name = '$product_name', product_price = '$product_price' WHERE product_id = '$product_id'";

        if ($this->conn->query($sql)) {
            header("location:../views/dashboard.php");
            exit;
        }else{
            die("Error ".$this->conn->error);
        }
    }

        
       

           
    }

    
    ?>

   
       
          
       

         