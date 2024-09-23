<?php

namespace App\Enums;

enum TrackingStatus : string implements \JsonSerializable
{
    case ORDER_RECEIVED     =   "Order Received";
    case SHIPPED            =   "Shipped";
    case IN_TRANSIT         =   "In Transit";
    case OUT_FOR_DELIVERY   =   "Out for Delivery";
    case DELIVERED          =   "Delivered";


    public function jsonSerialize(): array
    {
        return [
            'key' => $this->name,  // Enum case name
            'value' => $this->value // Enum case value
        ];
    }

}
