<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('coins', 'CoinController')->only(['index', 'show']);
Route::get('coins/{id}/historical', 'CoinController@historical');

Route::middleware('auth:api')->group(function () {
    Route::apiResource('portfolio', 'PortfolioController')->only(['index', 'store']);
});
