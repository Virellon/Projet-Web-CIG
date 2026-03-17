<?php


$user_id = [
    ["user_id" => "", "product_id" => "", "quantity" => ""],
    ["user_id" => "", "product_id" => "", "quantity" => ""],
    ["user_id" => "", "product_id" => "", "quantity" => ""],
    ["user_id" => "", "product_id" => "", "quantity" => ""]
];

$user_id = [];
$message = "";
$recherche = "";



if (isset($_POST['search'])) {
    $recherche = strtolower($_POST['search']);
}

if  (isset($_POST['user_id']) && isset($_POST['product_id']) && isset($_POST[''])) {
    $user_id = htmlspecialchars($_POST['user_id']);
    $product_id = (float)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    if (empty($user_id) || empty($product_id)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        $user_id[] = ["user_id" => $user_id, "product_id" => $product_id, "quantity" => $quantity];

        $message = "Produit(s) ajouté(s) au panier.";}

}
?>