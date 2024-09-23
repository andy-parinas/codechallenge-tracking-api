<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\DeliveryTrackingService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeliveryController extends Controller
{

    protected DeliveryTrackingService $trackingService;

    public function __construct(DeliveryTrackingService $trackingService)
    {
        $this->trackingService = $trackingService;
    }


    public function deliveryStatus(string $trackingNumber)
    {
        $deliveryTrackingStatus = $this->trackingService->getTrackingStatus($trackingNumber);

        return response()->json($deliveryTrackingStatus);
    }
}
