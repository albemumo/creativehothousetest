<?php

namespace Tests\Feature;

use App\Coin;
use App\User;
use App\UserTrade;
use Carbon\Carbon;
use DateTime;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function testApiPortfolioGetUnauthorized()
    {
        $response = $this->json('GET', '/api/portfolio');

        $response
            ->assertStatus(401);
    }

    public function testApiPortfolioGetOk()
    {

        $user = factory(User::class)->create();
        factory(UserTrade::class)->create();
//        $coin = factory(Coin::class)->create();
//        $userTrade = factory(UserTrade::class)->create([
//            'coin_id' => $coin->id,
//            'user_id' => $user->id,
//            'amount' => '100',
//            'price_usd' => '10.10',
//            'traded_at' => new Carbon('now'),
//            'notes' => 'Silent is gold.',
//        ]);

        $response = $this->actingAs($user, 'api')->json('GET', '/api/portfolio');


        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'email',
                'coins' => [
//                    'id',
//                    'coin_id',
//                    'user_id',
//                    'amount',
//                    'price_usd',
//                    'notes',
//                    'traded_at',
                ]
            ]);
    }

    public function testApiPortfolioPostUnauthorized()
    {
        $response = $this->json('POST', '/api/portfolio');

        $response
            ->assertStatus(401);
    }

    public function testApiPortfolioPostValidation()
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

        $response = $this->actingAs($user, 'api')->json('POST', '/api/portfolio', [
            'coin_id' => 0,
            'amount' => 'invalid',
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

    public function testApiPortfolioPostOk()
    {
        $coin = factory(Coin::class)->create();
        $user = factory(User::class)->create();
        $userTrade = factory(UserTrade::class)->create();

        $tradedAt = $userTrade->traded_at;
        // Substract one year to pass before date 2018-05-03T09:14:39+00:00 validation
        $tradedAtSubYear = $tradedAt->modify('-1 year')->format('Y-m-d');


        $response = $this->actingAs($user, 'api')->json('POST', '/api/portfolio', [
            'coin_id' => $coin->id,
            'amount' => $userTrade->amount,
            'price_usd' => $userTrade->price_usd,
            'traded_at' => $tradedAtSubYear,
            'notes' => $userTrade->notes,
        ]);

        $response->assertStatus(201);
        $response->assertJson([
            'trade' => [
                'coin_id' => $coin->id,
                'amount' => $userTrade->amount,
                'price_usd' => $userTrade->price_usd,
                'traded_at' => $tradedAtSubYear,
                'notes' => $userTrade->notes,
            ]
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
