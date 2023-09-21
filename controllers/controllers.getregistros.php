<?php
include_once('../configs/conexion.php');

$categoria = (isset($_GET['categoria'])) ? $_GET['categoria'] : null;

if($categoria === "sobre"){
    $result = $conn -> query("SELECT * FROM envios WHERE categoria = 'sobre'");
    $data = $result -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}
else if($categoria === "paquete"){
    $peso = (isset($_GET['peso'])) ? $_GET['peso'] : null;
    $result = $conn -> query("SELECT * FROM envios WHERE categoria = 'paquete' AND peso = '$peso'");
    $data = $result -> fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}
else{
    echo json_encode(array("respuesta" => "selecciona categoria"));
}
