<?php
$pdo = "null";
$user = "root";
$password = "";
$host = "localhost";
$bdname = "test";

try {
    $connexion= new PDO("mysql:host=localhost;dbname=test","root","");
    echo "connection etablir";
} catch (PDOExeption $e) {
    echo "Erreur connexion" + $e->getMessage() ;
    exit();

}


?>