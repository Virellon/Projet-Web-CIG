<?php

session_start();

if(!isset($_SESSION["user_id"])){

header("Location: login.php");
exit;

}

require "../databases/databases.php";
require "../index.html";
?>