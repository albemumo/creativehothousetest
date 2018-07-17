<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinHistorical extends Model
{
    /**
     * The database table used by the entity.
     *
     * @var string
     */
    protected $table = 'coins_historicals';
    /**
     * The primary key for the entity.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
