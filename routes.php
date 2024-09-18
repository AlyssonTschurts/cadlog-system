<?php
 
require 'controllers/AuthController.php';
require 'controllers/UserController.php';
require 'controllers/DashBoardController';
 
$authController = new $AuthController();
$userController = new $UserController();
$dashboardController = new $DashboardController();
 
 
?>
tem menu de contexto