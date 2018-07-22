<?php

namespace App\Repositories;

use App\Models\User;

/**
 * Interface UserRepositoryInterface.
 */
interface UserRepositoryInterface
{
    public function getUserPortfolio(User $user);
}
