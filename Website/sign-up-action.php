<?php 
include_once "db.php";
include_once "student.php";

if( ! isset($_POST["email"])){
    header("Location: /");
    exit;
}
var_dump($_POST);

$student = new student($connection, $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["date_of_birth"], $_POST["password"]);
$student->insert();