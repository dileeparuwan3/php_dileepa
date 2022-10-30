<?php

namespace Tests\Feature\SalesManager;

use App\Models\SalesRepresentative;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateSalesRepresentativesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function when_valid_data_given()
    {
        $payload = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'telephone' => '0777123456',
            'joined_at' => now(),
            'current_route' => 'Test route',
            'comments' => 'Test comment',
        ];

        $response = $this->post(route('sales-representatives.store'), $payload);

        $response->assertRedirect(route('sales-representatives.index'));
        $this->assertDatabaseHas('sales_representatives', $payload);
    }
}
