<?php
// views/ad-list.php

include '../services/AdvertisementService.php';
include '../services/UserService.php';

$adModel = new AdvertisementService();
$ads = $adModel->getAdvertisements();

$userModel = new UserService();
$users = $userModel->getUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Advertisement List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php realpath($_SERVER["DOCUMENT_ROOT"]);?>/Rabit/css/style.css" />
</head>

<body>
    <h1>Advertisement List</h1>

    <table>
        <a href="index.php"> Back </a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>User ID</th>
                <th>User Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ads as $ad) : ?>
                <tr>
                    <td><?= $ad['id'] ?></td>
                    <td><?= $ad['title'] ?></td>
                    <td><?= $ad['userid'] ?></td>
                    <td>
                        <?php
                        foreach ($users as $user) {
                            if ($user['id'] == $ad['userid']) {
                                echo $user['name'];
                            }
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>