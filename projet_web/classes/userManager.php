<?php

$user = [
    ["pseudo" => "", "email" => "", "password" => "", "age" => "", "role" => ""],
    ["pseudo" => "", "email" => "", "password" => "", "age" => "", "role" => ""],
    ["pseudo" => "", "email" => "", "password" => "", "age" => "", "role" => ""],
    ["pseudo" => "", "email" => "", "password" => "", "age" => "", "role" => ""]
];

$user = [];
$message = "";
$recherche = "";



if (isset($_POST['search'])) {
    $recherche = strtolower($_POST['search']);
}

if  (isset($_POST['pseudo']) && isset($_POST['age']) && , "role" => ""isset($_POST['email']) && isset ($_POST['password'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $role = htmlspecialchars($_POST['role']);

    if (empty($pseudo) || empty($email) || empty($password) || empty($age)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        $user[] = ["pseudo" => $pseudo, "email" => $email, "password" => $password, "age" => $age, "role" => $role];

        $message = "Utilisateur ajouté avec succès.";}

}



?>