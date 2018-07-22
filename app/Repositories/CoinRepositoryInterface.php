<?php

namespace App\Repositories;

use Illuminate\Http\Request;

/**
 * Interface CoinRepositoryInterface.
 */
interface CoinRepositoryInterface
{
    /**
     * @return mixed
     */
    public function orderByRankAsc();

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function getByIdOrFail(int $id);

    /**
     * @param Request $request
     * @param int     $id
     *
     * @return mixed
     */
    public function getCoinHistoricalBetweenDates(Request $request, int $id);
}
