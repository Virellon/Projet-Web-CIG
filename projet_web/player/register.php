<?php

require "../config/databases.php";
require "../classes/user.php";
require "../classes/userManager.php";

$manager = new userManager($pdo);

if(isset($_POST["submit"])){

    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $pseudo = new pseudo(null,$pseudo,$email,$password);

    $manager->create($pseudo);

    echo "Utilisateur ajouté";
}