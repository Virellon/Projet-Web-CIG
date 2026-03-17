<?php

require "../databases/databases.php";
require "../index.html";



$stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>