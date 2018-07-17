<?php

namespace Tests\Feature;

use App\Coin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CoinTest extends TestCase
{
    public function testCoinTableSeed()
    {
        $this->assertGreaterThan(
            1,
            Coin::count(),
            sprintf('Found [%s] records in database table.', Coin::count())
        );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
