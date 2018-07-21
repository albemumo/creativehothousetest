<?php

namespace App\Http\Controllers;

use App\Coin;
use App\CoinHistorical;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return Coin::orderBy('rank', 'asc')->paginate(25);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection|Model
     */
    public function show($id)
    {
        return Coin::findOrFail($id);

    }

    /**
     * Display thje specified resource historical listing.
     *
     * @param Request $request
     * @param  int $id
     * @return CoinHistorical
     */
    public function historical(Request $request, int $id)
    {
        $coin = Coin::findOrFail($id);

        // Getting the start and end dates by url params for database query.
        $start = $request->query('start');
        $end = $request->query('end');

        if ($start == null || $end == null) {
            $start = Carbon::now();
            $end = Carbon::now();
        }

        return CoinHistorical::where('coin_id', $coin->id)->whereBetween('snapshot_at', [$start, $end])->get();
    }
}
