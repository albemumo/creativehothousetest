<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    /**
     * The database table used by the entity.
     *
     * @var string
     */
    protected $table = 'coins';

    /**
     * The primary key for the entity.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Get the userTrade for the coin.
     */
    public function userTrades()
    {
        return $this->hasMany('App\UserTrade');
    }

}
