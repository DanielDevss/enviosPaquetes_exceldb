<?php

include_once("../models/models.paquteria.php");

switch($_SERVER['REQUEST_METHOD']){
    case "POST":
        newPaquteria();
        break;
    case "GET":
        getPaqueterias();
        break;
    case "DELETE":
        deletePaqueteria();
        break;
}