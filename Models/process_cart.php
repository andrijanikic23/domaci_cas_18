<?php

    require_once "Order.php";

    
    if(!isset($_POST["product_id"]) || empty($_POST["product_id"]))
    {
        die("Incorrect entered data!");
    }

    if(!isset($_POST["user_id"]) || empty($_POST["user_id"]))
    {
        die("Incorrect entered data!");
    }

    if(!isset($_POST["quantity"]) || empty($_POST["quantity"]))
    {
        die("Incorrect entered data!");
    }

    if(!isset($_POST["price"]) || empty($_POST["price"]))
    {
        die("Incorrect entered data!");
    }




    

    $new_entry = new Order();
    $result = $new_entry -> database_entry($_POST["product_id"], $_POST["user_id"], $_POST["quantity"], $_POST["price"]);
    header("Location: ../index.php");
    
    
    
    
    



    