<?php

namespace App\Http\Controllers;

use App\Repositories\CoinRepository;
use App\Repositories\CoinRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Class CoinController.
 */
class CoinController extends Controller
{
    /**
     * @var CoinRepositoryInterface
     */
    private $coinRepository;

    /**
     * CoinController constructor.
     * @param CoinRepository $coinRepository
     */
    public function __construct(CoinRepository $coinRepository)
    {
        $this->coinRepository = $coinRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return $this->coinRepository->orderByRankAsc();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Collection|Model
     */
    public function show($id)
    {
        return $this->coinRepository->getByIdOrFail($id);
    }

    /**
     * Display the specified resource historical listing.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return mixed
     */
    public function historical(Request $request, int $id)
    {
        return $this->coinRepository->getCoinHistoricalBetweenDates($request->only(['start', 'end']), $id);
    }
}
