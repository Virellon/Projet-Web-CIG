<?php

session_start();
require "../databases/databases.php";
require "../index.html";

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

$product_id = $_POST["product_id"] ;
$quantity = $_POST["quantity"] ;

if (isset($_SESSION["cart"][$product_id])) {
    $_SESSION["cart"][$product_id] += $quantity;
} else {
    $_SESSION["cart"][$product_id] = $quantity;
}


header("location: cart.php");
exit;
?>