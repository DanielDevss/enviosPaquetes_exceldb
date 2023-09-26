<?php
include_once("../configs/conexion.php");

function newPaquteria () {
    global $conn;

    $image = (isset($_FILES["image"])) ? $_FILES["image"] : null;
    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : null;

    $imgTemp = $image['tmp_name'];
    $dir = "uploads/$nombre.png";

    if(move_uploaded_file($imgTemp, "../".$dir)){
        try{
            $conn -> query("INSERT INTO paqueterias SET nombre='$nombre', image='$dir'");
            header("location: ../administrador/index.php");
        }catch(PDOException $err){
            echo "Error al guardar: " . $err->getMessage();
        }
    }

}


function getPaqueterias() {

    global $conn;

    $results = $conn->query("SELECT * FROM paqueterias");
    $data = $results->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
}


function deletePaqueteria() {
    global $conn;

    $id = (isset($_GET['id'])) ? $_GET['id'] : null;
    $results = $conn -> query("SELECT * FROM paqueterias WHERE id = $id");
    $results_data = $results->fetchAll(PDO::FETCH_ASSOC)[0];

    try{
        if(unlink("../".$results_data["image"])){
            $conn->query("DELETE FROM paqueterias WHERE id = $id");
            echo json_encode(array("response" => "ok"));
        }

    }catch(PDOException $err){
        echo json_encode(array("response" => "error"));
    }

}