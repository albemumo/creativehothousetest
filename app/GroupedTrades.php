<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupedTrades extends Model
{
    /**
     * Get the coin that owns the groupedTrades.
     */
    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }
}
