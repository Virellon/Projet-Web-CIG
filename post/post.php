<?php
if(isset($_POST["name"])){
  $pseudoUser = htmlspecialchars($_POST["name"]);
  $emailUser = htmlspecialchars($_POST["email"]);
  $passUser = htmlspecialchars($_POST["password"]);
  $confPassUser = htmlspecialchars($_POST["confirm-password"]);
}


$error = [];

function validateForm()
{

    global $error;

    switch (true) {
        case empty($_POST["name"]) ||
            empty($_POST["email"]) ||
            empty($_POST["password"]) ||
            empty($_POST["repeatpassword"]):

            $error[] = "Tous les champs sont obligatoire";

        case !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL):
            $error[] = "email invalid";

        case $_POST["password"] !== $_POST["confirm-password"]:
            $error[] = "Les mots de passe ne sont pas identique";

            break;
    }



    return empty($error);
}

$formIsValid = $_SERVER["REQUEST_METHOD"] === "POST" && validateForm()


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "../_header.php" ?>


    <main>
        <?php
        if ($formIsValid):

        ?>
        <?php 
            /*    <!--<div> <?php //!  /!\ Fail XSS ?>
                    <p>nom : <?php echo htmlspecialchars($_POST["name"]); ?></p>
                    <p>email: <?php echo htmlspecialchars($_POST["email"]); ?> </p>
                    <p>password: <?php echo htmlspecialchars($_POST["password"]); ?> </p>
                </div>
                <a href="http://localhost:8000/formulaire/post/register.php">Retour</a>-->
            */

            $users = [];

            $id = count($users) + 1;

            $users[] = [
                "id" => $id,
                "nom" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"] 
            ];

            session_start();

            $_SESSION["user_name"] = $_POST["name"] ; 
            $_SESSION["user_email"] = $_POST["email"];

            //. redirection vers ../index.php 
            header("Location: ../index.php")

?>
