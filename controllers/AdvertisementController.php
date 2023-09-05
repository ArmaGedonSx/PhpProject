<?php
// controllers/AdvertisementController.php

require_once './services/AdvertisementService.php';

class AdvertisementController {
    public function listAdvertisements() {
        $ad = new AdvertisementService();
        $ads = $ad->getAdvertisements();

        
        include 'views/ad-list.php';
    }
}
