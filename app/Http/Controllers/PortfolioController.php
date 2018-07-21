<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Resources\UserResource;
use App\User;
use App\UserTrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the user resource.
     *
     * @return UserResource
     */
    public function index()
    {
        $user = Auth::user();
        return new UserResource(User::findOrFail($user->id));
    }

    /**
     * Store a newly created resource in storage for Auth user.
     *
     * @param StorePortfolioRequest|Request $request
     * @return UserTrade
     */
    public function store(StorePortfolioRequest $request)
    {
        $user = Auth::user();
        return UserTrade::create([
            'coin_id' => $request->get('coin_id'),
            'amount' => $request->get('amount'),
            'price_usd' => $request->get('price_usd'),
            'traded_at' => $request->get('traded_at'),
            'user_id' => $user->id,
            'notes' => $request->get('notes'),
        ]);
    }

}
