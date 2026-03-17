<?php



session_start();

require "../databases/databases.php";
require "../index.html";

if(isset($_POST["submit"])){

$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->execute([$email, $password]);


$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user && password_verify($password, $user["password"])){

$_SESSION["user_id"] = $user["id"];
$_SESSION["username"] = $user["username"];
$_SESSION["role"] = $user["role"];

header("Location: profile.php");
exit;

} else {

echo "Identifiants incorrects.";

}

