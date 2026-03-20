<?php

require "../databases/databases.php";
require "../classes/user.php";
require "../classes/userManager.php";

//$manager = new userManager($pdo);

if(isset($_POST["submit"])){

    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    //$confirmPass = htmlspecialchars($_POST["confirmPass"])
    $role = "player";
    $pseudo = new User($pseudo, $email, $password, $role);

    $manager->create($pseudo);

    echo "Utilisateur ajouté";
}
?>
