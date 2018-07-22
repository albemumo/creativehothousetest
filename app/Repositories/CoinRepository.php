<?php

namespace App\Repositories;

use App\Coin;
use App\CoinHistorical;
use App\Http\Resources\CoinHistoricalResource;
use App\Http\Resources\CoinHistoricalResourceCollection;
use App\Http\Resources\CoinResource;
use App\Http\Resources\CoinResourceCollection;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

/**
 * Class CoinRepository
 * @package App\Repositories
 */
class CoinRepository implements CoinRepositoryInterface
{
    /**
     * @var Coin
     */
    protected $coinModel;

    /**
     * @var CoinHistorical
     */
    protected $coinHistoricalModel;

    /**
     * CoinRepository constructor.
     * @param Coin $coinModel
     * @param CoinHistorical $coinHistoricalModel
     */
    public function __construct(Coin $coinModel, CoinHistorical $coinHistoricalModel)
    {
        $this->coinModel = $coinModel;
        $this->coinHistoricalModel = $coinHistoricalModel;
    }

    /**
     * @return CoinResourceCollection
     */
    public function orderByRankAsc()
    {
        // return $this->coinModel->orderBy('rank', 'asc')->paginate(25);
        return new CoinResourceCollection($this->coinModel->orderBy('rank', 'asc')->paginate(25));
    }

    /**
     * @param int $id
     * @return CoinResource
     */
    public function getByIdOrFail(int $id)
    {
        return new CoinResource($this->coinModel->findOrFail($id));
        // return $this->coinModel->findOrFail($id);
    }


    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCoinHistoricalBetweenDates(Request $request, int $id)
    {
        $coin = $this->coinModel->findOrFail($id);

        // Getting the start and end dates by url params for database query.
        $start = $request->query('start');
        $end = $request->query('end');

        if ($start == null || $end == null) {
            $start = Carbon::now();
            $end = Carbon::now();
        }

        return $this->coinHistoricalModel->where('coin_id', $coin->id)->whereBetween('snapshot_at', [$start, $end])->get();
    }
}
