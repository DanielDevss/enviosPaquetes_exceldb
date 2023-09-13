<?php

include_once('../configs/conexion.php');
require "../utils/readExcel.php";


function updateExcel () {

    $xlsx = (isset($_FILES['templete'])) ? $_FILES['templete'] : null;

    $xlsx_temp = $xlsx['tmp_name'];
    $xlsx_dir_final = "plantilla/templete.xlsx";

    move_uploaded_file($xlsx_temp, "../$xlsx_dir_final");

    uploadDataMysql();

    header("location: ../administrador/index.php");
}

function backupExcel () {

    $dir = "../plantilla/templete.xlsx";
    $dirCopy = "../plantilla/templete_backup.xlsx";

    if(copy($dir, $dirCopy)){
        echo "Respaldado";
    }else{
        echo "Error";
    }


}

function uploadDataMysql (){
    
    global $conn;

    $dataPaquetes = readExcel(1);
    $dataSobres = readExcel(0);

    $conn->query("TRUNCATE envios");

    foreach ($dataPaquetes as $paquete) {
        $stmt = $conn->prepare("INSERT INTO envios (categoria, paqueteria, costo, etr_estimada, servicio, peso) VALUES (:categoria, :paqueteria, :costo, :etr_estimada, :servicio, :peso)");
    
        // Define los valores de los marcadores de posición
        $categoria = "paquete";
        $paqueteria = $paquete->{"Paquetería"};
        $costo = $paquete->Costo;
        $etr_estimada = $paquete->{"Entrega estimada"};
        $servicio = $paquete->Servicio;
        $peso = $paquete->Peso;
    
        // Vincula los valores a los marcadores de posición
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':paqueteria', $paqueteria);
        $stmt->bindParam(':costo', $costo);
        $stmt->bindParam(':etr_estimada', $etr_estimada);
        $stmt->bindParam(':servicio', $servicio);
        $stmt->bindParam(':peso', $peso);
    
        $stmt->execute();
    }
    
    foreach($dataSobres as $sobre){
        $stmt = $conn->prepare("INSERT INTO envios (categoria,paqueteria,costo,etr_estimada,servicio) VALUES (:categoria,:paqueteria,:costo,:etr_estimada,:servicio)");
    
        $categoria = "sobre";
        $paqueteria = $sobre->{"Paqueteria"};
        $costo = $sobre->Costo;
        $etr_estimado = $sobre->{"Entrega estimada"};
        $servicio = $sobre->Servicio;
    
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':paqueteria', $paqueteria);
        $stmt->bindParam(':costo', $costo);
        $stmt->bindParam(':etr_estimada', $etr_estimado);
        $stmt->bindParam(':servicio', $servicio);
    
        $stmt->execute();
    }

}
