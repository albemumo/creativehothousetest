<?php

namespace Tests\Feature;

use App\Models\Coin;
use App\Models\User;
use App\Models\UserTrade;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Api Portfolio unauthorized.
     *
     * @return void
     */
    public function testApiPortfolioGetUnauthorized()
    {
        $response = $this->json('GET', '/api/portfolio');

        $response
            ->assertStatus(401);
    }

    /**
     * Test Api Portfolio.
     *
     * @return void
     */
    public function testApiPortfolioGetOk()
    {
        $user = factory(User::class)->create();
        factory(UserTrade::class)->create();

        $response = $this->actingAs($user, 'api')->json('GET', '/api/portfolio');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'email',
                'coins' => [],
            ]);
    }

    /**
     * Test Api Portfolio create UserTrade unauthorized.
     *
     * @return void
     */
    public function testApiPortfolioPostUnauthorized()
    {
        $response = $this->json('POST', '/api/portfolio');

        $response
            ->assertStatus(401);
    }

    /**
     * Test Api Portfolio create UserTrade validation required values.
     *
     * @return void
     */
    public function testApiPortfolioPostValidationRequired()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user, 'api')->json('POST', '/api/portfolio', []);

        $response->assertStatus(422);
        $response->assertJson([
            'message' => 'The given data was invalid.',
            'errors'  => [
                'coin_id' => [
                    'The coin id field is required.',
                ],
                'amount' => [
                    'The amount field is required.',
                ],
                'price_usd' => [
                    'The price usd field is required.',
                ],
                'traded_at' => [
                    'The traded at field is required.',
                ],
            ],
        ]);

    }

    /**
     * Test Api Portfolio create UserTrade validation invalid values.
     *
     * @return void
     */
    public function testApiPortfolioPostValidationInvalid()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user, 'api')->json('POST', '/api/portfolio', [
            'coin_id'   => 0,
            'amount'    => 'invalid',
            'price_usd' => 'invalid',
            'traded_at' => new Carbon('2018-06-03T09:14:39+00:00'),
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'message' => 'The given data was invalid.',
            'errors'  => [
                'coin_id' => [
                    'The selected coin id is invalid.',
                ],
                'amount' => [
                    'The amount must be a number.',
                ],
                'price_usd' => [
                    'The price usd must be a number.',
                ],
                'traded_at' => [
                    'The traded at must be a date before 2018-05-03UTC09:14:39+00:00.',
                ],
            ],
        ]);
    }

    /**
     * Test Api Portfolio create UserTrade validation numeric min values.
     *
     * @return void
     */
    public function testApiPortfolioPostValidationNumericMin()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user, 'api')->json('POST', '/api/portfolio', [
            'price_usd' => '-1',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'message' => 'The given data was invalid.',
            'errors'  => [
                'price_usd' => [
                    'The price usd must be at least 0.',
                ],
            ],
        ]);
    }

    /**
     * Test Api Portfolio create UserTrade.
     *
     * @return void
     */
    public function testApiPortfolioPostOk()
    {
        $coin = factory(Coin::class)->create();
        $user = factory(User::class)->create();
        $userTrade = factory(UserTrade::class)->create();

        $tradedAt = $userTrade->traded_at;
        // Substract one year to pass before date 2018-05-03T09:14:39+00:00 validation
        $tradedAtSubYear = $tradedAt->modify('-1 year')->format('Y-m-d');

        $response = $this->actingAs($user, 'api')->json('POST', '/api/portfolio', [
            'coin_id'   => $coin->id,
            'amount'    => $userTrade->amount,
            'price_usd' => $userTrade->price_usd,
            'traded_at' => $tradedAtSubYear,
            'notes'     => $userTrade->notes,
        ]);

        $response->assertStatus(201);
        $response->assertJson([
            'trade' => [
                'coin_id'   => $coin->id,
                'amount'    => $userTrade->amount,
                'price_usd' => $userTrade->price_usd,
                'traded_at' => $tradedAtSubYear,
                'notes'     => $userTrade->notes,
            ],
        ]);

        $userTradeTable = new UserTrade();
        $this->assertDatabaseHas($userTradeTable->getTable(), [
            'user_id'   => $user->id,
            'coin_id'   => $coin->id,
            'amount'    => $userTrade->amount,
            'price_usd' => $userTrade->price_usd,
            'traded_at' => $tradedAtSubYear,
            'notes'     => $userTrade->notes,
        ]);
    }
}
