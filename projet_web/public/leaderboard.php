<?php

require "../databases/databases.php";
require "../index.html";



$stmt = $pdo->query("SELECT * FROM leaderboard ORDER BY playtime DESC");

$players = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>