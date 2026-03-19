<?php

$host = "localhost";
$dbname = "postgres";
$port = "5432";
$pseudo = "postgres";
$password = "";

try {

  $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $pseudo,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté";

} catch(PDOException $e) {

    echo "Erreur connexion : " . $e->getMessage();

}


?>