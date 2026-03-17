<?php


session_start();

require "../databases/databases.php";
require "../index.html";

if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){

header("Location: ../public/index.php");
exit;

}



$stmt = $pdo->query("SELECT * FROM users");

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
