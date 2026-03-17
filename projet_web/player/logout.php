<?php

session_start();

$_SESSION = [];

session_destroy();

header("Location: ../public/index.php");
exit;

?>



// *Suppression de l'utilisateur


<?php

require "../databases/databases.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");

$stmt->execute([$id]);

header("Location: users.php");

?>