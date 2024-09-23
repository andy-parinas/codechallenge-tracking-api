<?php

namespace App\Dto;

use App\Enums\TrackingStatus;
use JsonSerializable;

class DeliveryStatus implements JsonSerializable
{

    public string $trackingNumber;

    public TrackingStatus $status;

    public string $estimatedDeliveryDate;

    public function __construct(string $trackingNumber, TrackingStatus $status, string $estimatedDeliveryDate)
    {
        $this->trackingNumber = $trackingNumber;
        $this->status = $status;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
    }

    public function jsonSerialize(): array
    {
        return [
            'trackingNumber' => $this->trackingNumber,
            'status' => $this->status,
            'estimatedDeliveryDate' => $this->estimatedDeliveryDate,
        ];
    }

}
