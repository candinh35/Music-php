<?php
$nameController = $action = '';
if (isset($_GET['admin']) && $_GET['admin'] == '1') {
    $nameController =  $_GET['controller'] ?? 'Login';
    $nameController = $nameController . "Controller";
    $method = $_GET['action'] ?? 'index';
    require_once "Controller/admin/$nameController.php";
} else {
    $nameController =  $_GET['controller'] ?? 'Home';
    $nameController = $nameController . "Controller";
    $method = $_GET['action'] ?? 'index';
    require_once "Controller/$nameController.php";
}
$action = new $nameController();
$action->$method();
