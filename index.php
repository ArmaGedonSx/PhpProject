<?php
// index.php

// Including the UserController and AdvertisementController files
require_once 'controllers/UserController.php';
require_once 'controllers/AdvertisementController.php';

// Parsing the requested URL
$requestUri = $_SERVER['REQUEST_URI'];

// Checking the requested URL and routing to the appropriate controller method
if ($requestUri == '/user-list') {
    // Creating an instance of UserController and calling the listUsers method
    $controller = new UserController();
    $controller->listUsers();
} elseif ($requestUri == '/ad-list') {
    // Creating an instance of AdvertisementController and calling the listAdvertisements method
    $controller = new AdvertisementController();
    $controller->listAdvertisements();
} else {
    // If the requested URL doesn't match any specific route, including the index.php view
    include 'views/index.php';
}