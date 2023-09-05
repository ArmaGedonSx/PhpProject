<?php
// index.php

require_once 'controllers/UserController.php';
require_once 'controllers/AdvertisementController.php';

// URL átírás
$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri == '/user-list') {
    $controller = new UserController();
    $controller->listUsers();
} elseif ($requestUri == '/ad-list') {
    $controller = new AdvertisementController();
    $controller->listAdvertisements();
} else {
    include 'views/index.php';
}
