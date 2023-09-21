<?php

$hostdb = "mysql-esyshipment.alwaysdata.net";
$namedb = "esyshipment_db";
$userdb = "327118";
$passdb = "Daniel.fdk.2001";

// $hostdb = "localhost";
// $namedb = "sophingh_esyshipment";
// $userdb = "sophingh_suport";
// $passdb = "8xGaD$)vtuoe";

// $hostdb = "localhost";
// $namedb = "paqueteria";
// $userdb = "root";
// $passdb = "";

try{
    $conn = new PDO("mysql:host=$hostdb;dbname=$namedb", $userdb, $passdb);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    die("Error de conexión: " . $err->getMessage());
}
