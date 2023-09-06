<?php
// controllers/AdvertisementController.php

require_once './services/AdvertisementService.php';

class AdvertisementController {
    public function listAdvertisements() {
        // Get all advertisements from the database
        $ad = new AdvertisementService();
        $ads = $ad->getAdvertisements();

        // Pass the advertisements to the view
        include 'views/ad-list.php';
    }
}
