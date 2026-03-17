<?php

session_start();
require "../databases/databases.php";
require "../index.html";


if(!isset($_SESSION["cart"])){
$_SESSION["cart"] = [];
echo "Votre panier est vide.";
}

$total = 0;

foreach($_SESSION["cart"] as $product_id => $quantity){

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$product_id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

$subtotal = $product["price"] * $quantity;

$total += $subtotal;


?>
