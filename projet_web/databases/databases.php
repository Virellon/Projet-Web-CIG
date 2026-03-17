<?php

$host = "localhost";
$dbname = "cubic_portal";
$port = "3306";
$pseudo = "root";
$password = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
        $pseudo,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo "Erreur connexion : " . $e->getMessage();

}
