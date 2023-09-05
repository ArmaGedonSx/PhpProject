<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/Rabit/config.php');

class UserService {
    private $db;
    
    public function __construct() {
    global $db;
    
    try {
    $this->db = $db;
    
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
    }
    }
    
    public function getUsers() {
    try {
    // Lekérdezés a felhasználók táblából
    $query = "SELECT * FROM users";
    $stmt = $this->db->query($query);
    
    // Az eredmény tömbként való visszaadása
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
    die("Error fetching users: " . $e->getMessage());
    }
    }
    }