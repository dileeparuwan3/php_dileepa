<?php

namespace Tests\Feature\SalesManager;

use App\Models\SalesRepresentative;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ListSalesRepresentativesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function list_all()
    {
        SalesRepresentative::factory()
            ->count(10)
            ->create();

        $response = $this->get(route('sales-representatives.index'));

        $response->assertOk();
    }
}
