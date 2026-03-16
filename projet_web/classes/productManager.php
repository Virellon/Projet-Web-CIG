<?php


    private $id;
    private $name;
    private $description;
    private $price;
    private $category;
    private $image;

$name = [
    ["name" => "", "price" => "", "description" => "", "category" => "", "image" => ""],
    ["name" => "", "price" => "", "description" => "", "category" => "", "image" => ""],
    ["name" => "", "price" => "", "description" => "", "category" => "", "image" => ""],
    ["name" => "", "price" => "", "description" => "", "category" => "", "image" => ""]
];

$name = [];
$message = "";
$recherche = "";



if (isset($_POST['search'])) {
    $recherche = strtolower($_POST['search']);
}

if  (isset($_POST['name']) && isset($_POST['price']) && isset($_POST[''])) {
    $name = htmlspecialchars($_POST['name']);
    $price = (float)$_POST['price'];
    $description = htmlspecialchars($_POST['description']);
    $category = htmlspecialchars($_POST['category']);
    $image = htmlspecialchars($_POST['image']);

    if (empty($name) || empty($price)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        $name[] = ["name" => $name, "price" => $price, "description" => $description, "category" => $category, "image" => $image];

        $message = "Produit ajouté avec succès.";}

}
?>