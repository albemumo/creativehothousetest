<?php

namespace Tests\Feature;

use App\Models\Coin;
use App\Models\CoinHistorical;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class CoinTest
 * @package Tests\Feature
 */
class CoinTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Api Coins Index
     *
     * @return void
     */
    public function testApiCoinIndexOk()
    {
        factory(Coin::class, 100)->create();

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
            ])
        ->assertJson([
            'total' => 100,
        ]);
    }

    /**
     * Test Api Coins Id Show
     *
     * @return void
     */
    public function testApiCoinShowOk()
    {
        $coin = factory(Coin::class)->create();

        $response = $this->json('GET', '/api/coins/'.$coin->id);

        $response
            ->assertStatus(200)
            ->assertJson([
                'coin' => [
                    'id'                 => $coin->id,
                    'name'               => $coin->name,
                    'symbol'             => $coin->symbol,
                    'logo'               => $coin->logo,
                    'rank'               => $coin->rank,
                    'price_usd'          => $coin->price_usd,
                    'price_btc'          => $coin->price_btc,
                    'market_cap_usd'     => $coin->market_cap_usd,
                    'available_supply'   => $coin->available_supply,
                    'total_supply'       => $coin->total_supply,
                    'percent_change_1h'  => $coin->percent_change_1h,
                    'percent_change_24h' => $coin->percent_change_24h,
                    'percent_change_7d'  => $coin->percent_change_7d,
                ],
            ]);
    }

    /**
     * Test Api Coins Id Show Error
     *
     * @return void
     */
    public function testApiCoinShowError()
    {
        $response = $this->json('GET', '/api/coins/0');

        $response
            ->assertStatus(404)
            ->assertExactJson([
                'error' => 'App\\Models\\Coin {0} not found',
            ]);
    }

    /**
     * Test Api Coins Historical by Coin Id and Between two dates.
     *
     * @return void
     */
    public function testApiCoinHistoricalBetweenDatesOk()
    {
        $coinHistorical = factory(CoinHistorical::class)->create();

        $start = new Carbon('now');
        $start->subYears(100); // Substract years to create large date range.

        $end = new Carbon('now');

        $response = $this->json('GET', '/api/coins/'.$coinHistorical->coin->id.'/historical?start='.$start.'&end='.$end);
        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'id'          => $coinHistorical->id,
                'coin_id'     => $coinHistorical->coin->id,
                'snapshot_at' => $coinHistorical->snapshot_at,
            ]);
    }

    /**
     * Test Api Coins Historical by Coin Id and Between two dates error.
     *
     * @return void
     */
    public function testApiCoinHistoricalError()
    {
        $response = $this->json('GET', '/api/coins/0/historical');

        $response
            ->assertStatus(404)
            ->assertExactJson([
                'error' => 'App\\Models\\Coin {0} not found',
            ]);
    }
}
