<?php
include_once('../configs/conexion.php');

$categoria = (isset($_GET['categoria'])) ? $_GET['categoria'] : null;

$result = $conn -> query("SELECT * FROM envios WHERE categoria = '$categoria'");
$data = $result -> fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);