<?php
// controllers/UserController.php

//require_once './models/User.php';
require_once './services/UserService.php';

class UserController {
    public function listUsers() {
        $userModel = new UserService();
        $users = $userModel->getUsers(); 

        include './views/user-list.php';
    }
}
?>
