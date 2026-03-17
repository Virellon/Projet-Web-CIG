<?php

session_start();

require "../databases/databases.php";
require "../index.html";

if(!isset($_SESSION["cart"]) || empty($_SESSION["cart"])) {
    echo "votre panier est vide";
}


$total = 0;

foreach($_SESSION["cart"] as $product_id => $quantity){

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$product_id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

$total += $product["price"] * $quantity;

}


if(isset($_POST["confirm"])){

$user_id = $_SESSION["user_id"];

$stmt = $pdo->prepare("INSERT INTO orders(user_id,total_price) VALUES(?,?)");
$stmt->execute([$user_id,$total]);

$order_id = $pdo->lastInsertId();


foreach($_SESSION["cart"] as $product_id => $quantity){

$stmt = $pdo->prepare("INSERT INTO order_items(order_id,product_id,quantity) VALUES(?,?,?)");

$stmt->execute([$order_id,$product_id,$quantity]);


$_SESSION["cart"] = [];

echo "Commande confirmée !";
}
}