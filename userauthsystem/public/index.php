<?php
require_once __DIR__ . '/../app/controllers/UserController.php';

$userController = new UserController();
$userController->handleRequest($_GET);