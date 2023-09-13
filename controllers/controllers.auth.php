<?php
include_once("../models/models.auth.php");

switch($_SERVER['REQUEST_METHOD']) {
    case "POST":
        login();
        break;
    case "GET":
        logout();
        break;
}

