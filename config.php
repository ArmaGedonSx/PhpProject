<?php
$db_host = 'localhost';
$db_name = 'rabit';
$db_user = 'root';
$db_pass = '';

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
