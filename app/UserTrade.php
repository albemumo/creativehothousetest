<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserTrade.
 */
class UserTrade extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_trades';

    /**
     * The primary key for the entity.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the coin that owns the userTrade.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }

    /**
     * Get the coin that owns the userTrade.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
