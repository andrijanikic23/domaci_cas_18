<?php

    require_once "Models/Product.php";
    $product = new Product();
    $particular_product = $product -> specific_product($_GET["id"]);
    $product_id = $_GET["id"]; 
    if (session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?=$particular_product["name"] ?></h1>
    <p>About product:<?=$particular_product["description"] ?></p>
    <p>Price:<?=$particular_product["price"] ?></p>
    <p>Image:<?=$particular_product["image"] ?></p>
    <p>In stock:<?=$particular_product["quantity"] ?></p>

    <form method = "POST" action="Models/process_cart.php">
        <input name ="quantity" type="number" placeholder = "Quantity of product">
        <input name = "price" type="hidden" value=<?= $particular_product["price"] ?>>
        <input name = "product_id" type="hidden" value =<?= $product_id ?>>
        <input name = "user_id" type="hidden" value =<?= $_SESSION["user_id"] ?>>
        <button>Buy</button>
       
    </form>


    
</body>
</html>