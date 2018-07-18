<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTrade extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_trades';

    /**
     * The primary key for the entity.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Get the coin that owns the userTrade.
     */
    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }

    /**
     * Get the coin that owns the userTrade.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}