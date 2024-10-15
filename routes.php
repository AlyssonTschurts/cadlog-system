<?php
 
require 'controllers/AuthController.php';
require 'controllers/UserController.php';
require 'controllers/DashBoardController';
 
$authController = new $AuthController();
$userController = new $UserController();
$dashboardController = new $DashboardController();
 
$action = $_GET['action'] ?? 'login'

switch ($action){
    case 'login':
        $authController ->login();
        break;
    default:
    $authController->login();
    break;
}

?>
