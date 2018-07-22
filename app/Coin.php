<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coin.
 */
class Coin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coins';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Get the userTrade for the coin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userTrades()
    {
        return $this->hasMany('App\UserTrade');
    }

    /**
     * Get the coinHistorical for the coin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coinHistoricals()
    {
        return $this->hasMany('App\CoinHistorical');
    }
}
