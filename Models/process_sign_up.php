<?php

    require_once "User.php";

    if(!isset($_POST["email"]) || empty($_POST["email"]))
    {
        die("You have to enter your email!");
    }

    if(!isset($_POST["password"]) || empty($_POST["password"]))
    {
        die("You have to enter your password!");
    }

    $new_user = new User();
    $new_user -> register($_POST["email"], $_POST["password"]);
    header("Location: ../login.php");


