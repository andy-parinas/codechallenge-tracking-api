<?php

namespace Tests\Feature;

use App\Dto\DeliveryStatus;
use App\Enums\TrackingStatus;
use App\Services\DeliveryTrackingService;
use Tests\TestCase;

class TrackingServiceTest extends TestCase
{

    public function test_it_shows_tracking_status()
    {
        $trackingService = new DeliveryTrackingService();

        $trackingStatus = $trackingService->getTrackingStatus("1231232");

        $this->assertInstanceOf(DeliveryStatus::class, $trackingStatus);
    }

}
