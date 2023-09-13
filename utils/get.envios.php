<?php
include_once('../configs/conexion.php');

$sql_sobre = "SELECT * FROM envios WHERE categoria = 'sobre'";
$sql_paqueteria = "SELECT * FROM envios WHERE categoria = 'paquete'";

$result_sobre = $conn->query($sql_sobre);
$data_sobre = $result_sobre->fetchAll(PDO::FETCH_ASSOC);

$result_paqueteria = $conn->query($sql_paqueteria);
$data_paqueteria = $result_paqueteria->fetchAll(PDO::FETCH_ASSOC);