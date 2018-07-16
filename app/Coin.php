<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    /**
     * Get the individualTrade for the coin.
     */
    public function individualTrades()
    {
        return $this->hasMany('App\IndividualTrade');
    }

    /**
     * Get the individualTrade for the coin.
     */
    public function groupedTrades()
    {
        return $this->hasMany('App\GroupedTrades');
    }
}
