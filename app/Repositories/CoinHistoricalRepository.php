<?php

namespace App\Repositories;

use App\Models\CoinHistorical;

/**
 * Class CoinHistoricalRepository.
 */
class CoinHistoricalRepository implements CoinHistoricalRepositoryInterface
{
    /**
     * @var CoinHistorical
     */
    protected $coinHistoricalModel;

    /**
     * CoinHistoricalRepository constructor.
     *
     * @param CoinHistorical $coinHistoricalModel
     */
    public function __construct(CoinHistorical $coinHistoricalModel)
    {
        $this->coinHistoricalModel = $coinHistoricalModel;
    }
}
