<?php
require "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

function readExcel ($page) {

    // ruta de excel archivo
    $xlsx_file_dir = "../plantilla/templete.xlsx";
    
    // carga del excel
    $spreadsheet = IOFactory::load($xlsx_file_dir);
    
    //selecciona una hoja 'espacio de trabajo'
    $workspace = $spreadsheet->getSheet($page);
    
    $data = $workspace->toArray();
    
    $header_object = $data[0];
    
    $dataSelect = [];

    $indexColumns = array_map(function ($col) use ($data){
        return array_search($col, $data[0]);
    }, $header_object);

    foreach (array_slice($data, 1) as $fila){
        $isEmpty = true; // Variable para verificar si la fila está vacía
        $rowSelect = new stdClass();
        
        foreach($indexColumns as $index) {
            $nameColumn = $data[0][$index];
            $valueColumn = $fila[$index];

            // Verificar si el valor de la columna no está vacío
            if (!empty($valueColumn)) {
                $isEmpty = false;
            }

            $rowSelect->$nameColumn = $valueColumn;
        }

        // Agregar la fila solo si no está vacía
        if (!$isEmpty) {
            $dataSelect[] = $rowSelect;
        }
    }
    
    return $dataSelect;
}
