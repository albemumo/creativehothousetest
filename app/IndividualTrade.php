<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualTrade extends Model
{
    /**
     * Get the coin that owns the individualTrade.
     */
    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }

    /**
     * Get the coin that owns the individualTrade.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
