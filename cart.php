<?php

    require_once "Models/Order.php";

    if(session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }

    $new_cart_products = new Order();
    $selected_products = $new_cart_products -> display_cart($_SESSION["user_id"]);
    //var_dump($selected_products);
    

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php foreach($selected_products as $selected_product): ?>

            <p>Product name: <?=$selected_product["product_name"] ?></p>
            <p>Desired quantity: <?=$selected_product["quantity"] ?></p>
            <p>Price: <?=$selected_product["price"] ?></p>

            <p><?="-----------------------------------------------"?></p>

        <?php endforeach; ?>
        
    </body>
    </html>


    