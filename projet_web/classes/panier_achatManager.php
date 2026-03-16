<?php


$userId = [
    ["userId" => "", "productId" => "", "quantity" => ""],
    ["userId" => "", "productId" => "", "quantity" => ""],
    ["userId" => "", "productId" => "", "quantity" => ""],
    ["userId" => "", "productId" => "", "quantity" => ""]
];

$userId = [];
$message = "";
$recherche = "";



if (isset($_POST['search'])) {
    $recherche = strtolower($_POST['search']);
}

if  (isset($_POST['userId']) && isset($_POST['productId']) && isset($_POST[''])) {
    $userId = htmlspecialchars($_POST['userId']);
    $productId = (float)$_POST['productId'];
    $quantity = (int)$_POST['quantity'];

    if (empty($userId) || empty($productId)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        $userId[] = ["userId" => $userId, "productId" => $productId, "quantity" => $quantity];

        $message = "Produit(s) ajouté(s) au panier.";}

}
?>