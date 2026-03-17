<?php

require "../databases/databases.php";
require "../classes/user.php";
require "../classes/userManager.php";

$manager = new userManager($pdo);

if(isset($_POST["submit"])){

    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = "player";
    $pseudo = new User(null, $pseudo, $email, $password, $role);

    $manager->create($pseudo);

    echo "Utilisateur ajouté";
}