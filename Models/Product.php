<?php

    require_once "Base.php";

    class Product extends Base
    {
        public function all_products()
        {
            $result = $this -> sql -> query("SELECT * FROM products");
            $products = $result -> fetch_all(MYSQLI_ASSOC);
            return $products;
        }

        public function specific_product($id)
        {
            $id = $this -> sql -> real_escape_string($id);
            $result = $this -> sql -> query("SELECT * FROM products WHERE id = $id");
            $product = $result -> fetch_assoc();
            return $product;
        }

        

    }
