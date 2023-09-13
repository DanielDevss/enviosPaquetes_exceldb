<?php

include_once('../models/models.excel.php');

switch ($_SERVER['REQUEST_METHOD']){

    case "POST":

        if(isset($_GET['backup'])){
            backupExcel();
        }else{
            updateExcel();
        }
        break;
}