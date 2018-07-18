<?php

namespace Tests\Feature;

use App\Coin;
use App\CoinHistorical;
use Carbon\Carbon;
use DateTimeZone;
use Faker\Provider\DateTime;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CoinTest extends TestCase
{

    // use RefreshDatabase;

//    public function testCoinTableSeed()
//    {
//        $this->assertGreaterThan(
//            0,
//            Coin::count(),
//            sprintf('Found [%s] records in database table.', Coin::count())
//        );
//    }

    public function testApiCoinIndexOk()
    {
        $response = $this->json('GET', '/api/coins');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'total',
                'per_page',
                'current_page',
                'last_page',
                'first_page_url',
                'last_page_url',
                'next_page_url',
                'prev_page_url',
                'path',
                'from',
                'to',
                'data',
            ]);

    }

    public function testApiCoinShowOk()
    {
        $coin = factory(Coin::class)->create();

        $response = $this->json('GET', '/api/coins/' . $coin->id);

        $response
            ->assertStatus(200)
            ->assertJson([
                'id' => $coin->id,
                'name' => $coin->name,
                'symbol' => $coin->symbol,
                'logo' => $coin->logo,
                'rank' => $coin->rank,
                'price_usd' => $coin->price_usd,
                'price_btc' => $coin->price_btc,
                // '24h_volume_usd' => $coin->24h_volume_usd,
                'market_cap_usd' => $coin->market_cap_usd,
                'available_supply' => $coin->available_supply,
                'total_supply' => $coin->total_supply,
                'percent_change_1h' => $coin->percent_change_1h,
                'percent_change_24h' => $coin->percent_change_24h,
                'percent_change_7d' => $coin->percent_change_7d,
            ]);

    }

    public function testApiCoinShowError()
    {
        $response = $this->json('GET', '/api/coins/0');

        $response
            ->assertStatus(404)
            ->assertExactJson([
                'error' => 'App\\Coin {0} not found',
            ]);
    }

//    public function testApiCoinHistoricalOk()
//    {
//        $coinHistorical = factory(CoinHistorical::class)->create();
//
//        $response = $this->json('GET', '/api/coins/' . $coinHistorical->coin->id . '/historical');
//        $response
//            ->assertStatus(200)
//            ->assertJson([
//                'id' => $coinHistorical->id,
//                'coin_id' => $coinHistorical->coin->id,
//                'price_usd' => $coinHistorical->price_usd,
//                'snapshot_at' => $coinHistorical->snapshot_at,
//            ]);
//
//    }

    public function testApiCoinHistoricalError()
    {
        $response = $this->json('GET', '/api/coins/0/historical');

        $response
            ->assertStatus(404)
            ->assertExactJson([
                'error' => 'App\\Coin {0} not found',
            ]);
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
