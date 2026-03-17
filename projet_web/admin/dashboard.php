<?php

session_start();

require "../databases/databases.php";
require "../index.html";



if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){

header("Location: ../public/index.php");
exit;

}


// nombre utilisateurs
$stmt = $pdo->query("SELECT COUNT(*) FROM users");
$totalUsers = $stmt->fetchColumn();

// nombre produits
$stmt = $pdo->query("SELECT COUNT(*) FROM products");
$totalProducts = $stmt->fetchColumn();

// nombre commandes
$stmt = $pdo->query("SELECT COUNT(*) FROM orders");
$totalOrders = $stmt->fetchColumn();

// chiffre d'affaires
$stmt = $pdo->query("SELECT SUM(total_price) FROM orders");
$revenue = $stmt->fetchColumn();

?>
