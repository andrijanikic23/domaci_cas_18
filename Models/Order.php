<?php

    require_once "Base.php";

    class Order extends Base
    {
        

        public function database_entry($product_id, $user_id, $desired_quantity, $price)
        {
            $product_id = $this -> sql -> real_escape_string($product_id);
            $user_id = $this -> sql -> real_escape_string($user_id);
            $desired_quantity = $this -> sql -> real_escape_string($desired_quantity);
            $price = $this -> sql -> real_escape_string($price);
    
            $final_price = intval($desired_quantity) * intval($price);
            
            $entry = $this -> sql -> query("INSERT INTO orders(product_id, user_id,  price, quantity) VALUES($product_id, $user_id, $final_price, $desired_quantity)");
            return $entry;
        }


        public function display_cart($user_id)
        {
            $user_id = $this -> sql -> real_escape_string($user_id);
            $result_orders = $this -> sql -> query("SELECT * FROM orders WHERE user_id = $user_id");
            $orders = $result_orders -> fetch_all(MYSQLI_ASSOC);

            foreach($orders as &$order)
            {
                $product_id = $order["product_id"];
                $precise_product_row = $this -> sql -> query("SELECT * FROM products WHERE id=$product_id");
                $product_assoc = $precise_product_row -> fetch_assoc();
                $product_name = $product_assoc["name"];
                $order["product_id"] = $product_name;
            }

            $updated_data = [];

            foreach ($orders as $key => $order_value) {
                // Replace the key "product_id" with "product_name" for each order
                if (isset($order_value['product_id'])) {
                    // You replace the key of "product_id" with "product_name"
                    $order_value['product_name'] = $order_value['product_id'];  // Create a new key
                    unset($order_value['product_id']);  // Remove the old "product_id" key
                }
                
                // Add the modified order to updated_data
                $updated_data[] = $order_value;  // Use [] to append to the new array
            }

            return $updated_data;
            
        }


    }