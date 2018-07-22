<?php

namespace App\Repositories;

use App\Coin;
use App\CoinHistorical;

/**
 * Class CoinHistoricalRepository
 * @package App\Repositories
 */
class CoinHistoricalRepository implements CoinHistoricalRepositoryInterface
{
    /**
     * @var CoinHistorical
     */
    protected $coinHistoricalModel;

    /**
     * CoinHistoricalRepository constructor.
     * @param CoinHistorical $coinHistoricalModel
     */
    public function __construct(CoinHistorical $coinHistoricalModel)
    {
        $this->coinHistoricalModel = $coinHistoricalModel;
    }
}
