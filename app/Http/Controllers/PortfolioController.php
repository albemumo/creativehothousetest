<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserTradeResource;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserTradeRepositoryInterface;
use App\Models\User;
use App\Models\UserTrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    private $userRepository;

    private $userTradeRepository;

    public function __construct(UserRepositoryInterface $userRepository, UserTradeRepositoryInterface $userTradeRepository)
    {
        $this->userRepository = $userRepository;
        $this->userTradeRepository = $userTradeRepository;
    }

    /**
     * Display a listing of the user resource.
     *
     * @return UserResource
     */
    public function index()
    {
        $user = Auth::user();

        return $this->userRepository->getUserPortfolio($user);
    }

    /**
     * Store a newly created resource in storage for Auth user.
     *
     * @param StorePortfolioRequest|Request $request
     *
     * @return UserTradeResource
     */
    public function store(StorePortfolioRequest $request)
    {
        $user = Auth::user();

        return new UserTradeResource(
            UserTrade::create([
                'coin_id'   => $request->get('coin_id'),
                'amount'    => $request->get('amount'),
                'price_usd' => $request->get('price_usd'),
                'traded_at' => $request->get('traded_at'),
                'user_id'   => $user->id,
                'notes'     => $request->get('notes'),
            ])
        );
    }
}
