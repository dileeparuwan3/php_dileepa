<?php

namespace Tests\Feature\SalesManager;

use App\Models\SalesRepresentative;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UpdateSalesRepresentativesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function when_valid_data_given()
    {
        $salesRepresentative = SalesRepresentative::factory()
            ->create();

        $data = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'telephone' => '0777123456',
            'joined_at' => now()->addDay(),
            'current_route' => 'Test route',
            'comments' => 'Test comment',
        ];

        $response = $this->put(
            route('sales-representatives.update', $salesRepresentative),
            $data
        );

        $response->assertRedirect(route('sales-representatives.index'));
        $this->assertEquals($data['first_name'], $salesRepresentative->fresh()->first_name);
        $this->assertEquals($data['last_name'], $salesRepresentative->fresh()->last_name);
        $this->assertEquals($data['email'], $salesRepresentative->fresh()->email);
        $this->assertEquals($data['telephone'], $salesRepresentative->fresh()->telephone);
        $this->assertEquals($data['joined_at'], $salesRepresentative->fresh()->joined_at);
        $this->assertEquals($data['current_route'], $salesRepresentative->fresh()->current_route);
        $this->assertEquals($data['comments'], $salesRepresentative->fresh()->comments);
    }
}
