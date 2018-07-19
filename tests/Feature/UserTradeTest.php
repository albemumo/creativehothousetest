<?php

namespace Tests\Feature;

use App\User;
use App\UserTrade;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTradeTest extends TestCase
{

//    public function testApiUserTradePortfolioGetUnauthorized()
//    {
//        // $user = factory(User::class)->create();
//        $userTrade = factory(UserTrade::class)->create();
//
//        $response = $this->json('GET', '/portfolio');
//
//        $response
//            ->assertStatus(401);
//    }

//    public function testApiUserTradePortfolioGetOk()
//    {
//        $user = factory(User::class)->create();
//        $userTrade = factory(UserTrade::class)->create();
//
//        $response = $this->json('GET', '/api/portfolio');
//
//        $response
//            ->assertStatus(200)
//            ->assertJsonStructure([
//                'id',
//                'name',
//                'email',
//                'coins' => [
//                    'id',
//                    'coin_id',
//                    'user_id',
//                    'amount',
//                    'price_usd',
//                    'notes',
//                    'traded_at',
//                ]
//            ]);
//    }

//    public function testApiUserTradePortfolioPostUnauthorized()
//    {
//
//    }
//
//    public function testApiUserTradePortfolioPostError()
//    {
//
//    }
//
//    public function testApiUserTradePortfolioPostOk()
//    {
//
//    }



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
