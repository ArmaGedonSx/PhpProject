<?php

// Require the config file
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/Rabit/config.php');

// Define the AdvertisementService class
class AdvertisementService {
    // Define the private database property
    private $db;
    
    // Define the constructor
    public function __construct() {
        // Get the global database connection
        global $db;
    
        try {
            // Set the database property to the global connection
            $this->db = $db;
    
            // Set the error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Die with an error message if the connection fails
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    // Define the getAdvertisements method
    public function getAdvertisements() {
        try {
            // Query the advertisements table
            $query = "SELECT * FROM advertisements";
            $stmt = $this->db->query($query);
    
            // Return the results as an array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Die with an error message if the query fails
            die("Error fetching advertisements: " . $e->getMessage());
        }
    }
}