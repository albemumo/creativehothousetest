<?php

namespace App\Repositories;

use App\Http\Resources\CoinResource;
use App\Models\Coin;
use App\Models\CoinHistorical;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

/**
 * Class CoinRepository.
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
     *
     * @param Coin           $coinModel
     * @param CoinHistorical $coinHistoricalModel
     */
    public function __construct(Coin $coinModel, CoinHistorical $coinHistoricalModel)
    {
        $this->coinModel = $coinModel;
        $this->coinHistoricalModel = $coinHistoricalModel;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function orderByRankAsc()
    {
        return $this->coinModel->orderBy('rank', 'asc')->paginate(25);
    }

    /**
     * @param int $id
     *
     * @return CoinResource
     */
    public function getByIdOrFail(int $id)
    {
        return new CoinResource($this->coinModel->findOrFail($id));
    }

    /**
     * @param array $betweenDates
     * @param int   $id
     *
     * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
     *
     * @internal param Request $request
     */
    public function getCoinHistoricalBetweenDates(array $betweenDates, int $id)
    {
        $coin = $this->coinModel->findOrFail($id);

        if (!isset($betweenDates['start']) || !isset(betweenDates['end'])) {
            $betweenDates['start'] = Carbon::now();
            $betweenDates['end'] = Carbon::now();
        }
        // Getting the start and end dates by url params for database query.
        $start = $betweenDates['start'];
        $end = $betweenDates['end'];

        return $this->coinHistoricalModel->where('coin_id', $coin->id)->whereBetween('snapshot_at', [$start, $end])->get();
    }
}
