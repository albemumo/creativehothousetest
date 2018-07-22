<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = collect([
            'App\Repositories\CoinRepository',
            'App\Repositories\CoinHistoricalRepository',
            'App\Repositories\UserRepository',
            'App\Repositories\UserTradeRepository',
        ]);

        $repositories->each(function ($item, $key) {
            $this->app->bind($item.'Interface', $item);
        });

        // $this->app->bind('App\Repositories\CoinRepositoryInterface', 'App\Repositories\CoinRepository');
    }
}
