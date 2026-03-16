<?php

if (isset($_post['pseudo'])) {
    $nouveauMembre = $_post['pseudo'];
    echo "Nouveau profil enregistré : $nouveauMembre <br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>  </title>
</head>
<body>

    <form method = "POST" action  ="inscription.php">
        Inscription <br><br>
    <input type="text" name="pseudo" placeholder="Votre pseudo">
    <button type="submit">Ajouter un joueur</button>

</body>
</html>