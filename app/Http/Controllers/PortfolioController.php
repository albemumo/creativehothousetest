<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserTradeResource;
use App\Models\User;
use App\Models\UserTrade;
use App\Repositories\UserRepository;
use App\Repositories\UserTradeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PortfolioController.
 */
class PortfolioController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var UserTradeRepository
     */
    private $userTradeRepository;

    /**
     * PortfolioController constructor.
     *
     * @param UserRepository      $userRepository
     * @param UserTradeRepository $userTradeRepository
     */
    public function __construct(UserRepository $userRepository, UserTradeRepository $userTradeRepository)
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
        return $this->userRepository->getUserPortfolio(Auth::user());
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
        return new UserTradeResource(
            UserTrade::create([
                'coin_id'   => $request->get('coin_id'),
                'amount'    => $request->get('amount'),
                'price_usd' => $request->get('price_usd'),
                'traded_at' => $request->get('traded_at'),
                'user_id'   => Auth::user()->id,
                'notes'     => $request->get('notes'),
            ])
        );
    }
}
