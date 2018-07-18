<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinHistorical extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coins_historicals';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Get the coin that owns the coinHistorical.
     */
    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }
}