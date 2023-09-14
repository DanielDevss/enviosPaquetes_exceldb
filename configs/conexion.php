<?php

$hostdb = "localhost";
$namedb = "paqueteria";
$userdb = "daniel";
$passdb = "12345";

try{
    $conn = new PDO("mysql:host=$hostdb;dbname=$namedb", $userdb, $passdb);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    die("Error de conexión: " . $err->getMessage());
}
