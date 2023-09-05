<?php
// views/user-list.php

include '../services/UserService.php';

$userModel = new UserService();
$users = $userModel->getUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php realpath($_SERVER["DOCUMENT_ROOT"]);?>/Rabit/css/style.css" />
</head>

<h1>User List</h1>

<body>
<table>
    <a href="index.php"> Back </a>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>