<?php

namespace App\Repositories;

use App\UserTrade;

/**
 * Class UserTradeRepository.
 */
class UserTradeRepository implements UserTradeRepositoryInterface
{
    /**
     * @var UserTrade
     */
    protected $userTradeModel;

    /**
     * UserTradeRepository constructor.
     *
     * @param UserTrade $userTradeModel
     */
    public function __construct(UserTrade $userTradeModel)
    {
        $this->userTradeModel = $userTradeModel;
    }
}
