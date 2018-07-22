<?php

namespace App\Repositories;

use App\User;

/**
 * Interface UserRepositoryInterface.
 */
interface UserRepositoryInterface
{
    public function getUserPortfolio(User $user);
}
