

<?php
$host = "localhost";
$dbname = "exelib";
$user = "root";
$password = "";

$cnx = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $user,
    $password
);
?>

