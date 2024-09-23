<?php

namespace App\Services;

use App\Dto\DeliveryStatus;
use App\Enums\TrackingStatus;

class DeliveryTrackingService
{

    public function getTrackingStatus(string $trackingNumber)
    {

        $statuses = TrackingStatus::cases();

        $randomIndex = rand(0, count($statuses) - 1);

        $randomStatus = $statuses[$randomIndex];

        $randomDate = now()->addWeeks($randomIndex)->format('d/m/Y');

        return new DeliveryStatus($trackingNumber, $randomStatus, $randomDate);


    }

}
