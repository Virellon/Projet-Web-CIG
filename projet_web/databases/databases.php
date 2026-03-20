<?php

$host = "localhost";
$dbname = "cubicInfrastructure";
$port = "3306";
$pseudo = "root";
$password = "";

try {

  $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname",
        $pseudo,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté";

} catch(PDOException $e) {

    echo "Erreur connexion : " . $e->getMessage();

}


?>
