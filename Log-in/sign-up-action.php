<?php 
include_once "db.php";
include_once "user.php";

if( ! isset($_POST["email"])){
    header("Location: /");
    exit;
}
var_dump($_POST);

$user = new User($connection, $_POST["email"], $_POST["password"]);
$user->insert();
