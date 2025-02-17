<?php

    require_once "Models/Product.php";

    if(session_status() === PHP_SESSION_NONE)
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
    <a href="index.php">Homepage</a>
    <?php if(!isset($_SESSION["user_id"])): ?>
        
        <a href="sign_up.php">Sign up</a>
        <a href="login.php">Login</a>
    <?php else: ?>
        <a href="Models/logout.php">Logout</a>
        <a href="cart.php">Cart</a>
        <?php $products = new Product();
        $all_products = $products -> all_products(); ?>
        <?php foreach($all_products as $product): ?>
            <h1><?=$product["name"] ?></h1>
            <p>About product:<?=$product["description"] ?></p>
            <p>Price:<?=$product["price"] ?></p>
            <p>In stock:<?=$product["quantity"] ?></p>
            <a href="view_product.php?id=<?=$product['id']?>">View product</a>
            
        <?php endforeach; ?>

    <?php endif; ?>
    
</body>
</html>