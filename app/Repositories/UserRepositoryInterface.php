<?php

namespace App\Repositories;

use App\User;


/**
 * Interface UserRepositoryInterface
 * @package App\Repositories
 */
interface UserRepositoryInterface
{
    public function getUserPortfolio(User $user);
}