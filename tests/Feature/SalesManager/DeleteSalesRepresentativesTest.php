<?php

namespace Tests\Feature\SalesManager;

use App\Models\SalesRepresentative;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class DeleteSalesRepresentativesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function delete_sales_representative()
    {
        $salesRepresentative = SalesRepresentative::factory()
            ->create();

        $response = $this->delete(route('sales-representatives.destroy', $salesRepresentative));

        $response->assertRedirect(route('sales-representatives.index'));
        $this->assertDeleted($salesRepresentative);
    }
}
