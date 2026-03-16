<?php

$user = [
    ["pseudo" => "", "email" => "", "password" => "", "age" => ""],
    ["pseudo" => "", "email" => "", "password" => "", "age" => ""],
    ["pseudo" => "", "email" => "", "password" => "", "age" => ""],
    ["pseudo" => "", "email" => "", "password" => "", "age" => ""]
];

$user = [];
$message = "";
$recherche = "";



if (isset($_POST['search'])) {
    $recherche = strtolower($_POST['search']);
}

if  (isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['email']) && isset ($_POST['password'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $age = (int)$_POST['age'];

    if (empty($pseudo) || empty($email) || empty($password) || empty($age)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        $user[] = ["pseudo" => $pseudo, "email" => $email, "password" => $password, "age" => $age];

        $message = "Utilisateur ajouté avec succès.";}

}



?>