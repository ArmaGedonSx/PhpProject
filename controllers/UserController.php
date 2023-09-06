<?php
// controllers/UserController.php

//require_once './models/User.php';
/*
This is a PHP script that implements a simple user controller.
The controller lists all users from a database using a user service and displays them in a view.
*/
require_once './services/UserService.php';

class UserController {
    public function listUsers() {
        $userModel = new UserService();
        $users = $userModel->getUsers(); 

        include './views/user-list.php';
    }
}
?>
