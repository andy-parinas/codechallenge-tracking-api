<?php

namespace Tests\Feature;

use Tests\TestCase;

class DeliveryApiTest extends TestCase
{

    public function test_it_gets_delivery_status_by_tracking_number()
    {
        $response = $this->get('api/delivery-status/123');

        $response->assertStatus(200)
            ->assertSee('123');
    }

}
