<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use App\User;

/**
 * Class UserRepository.
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    protected $userModel;

    /**
     * UserRepository constructor.
     *
     * @param User $userModel
     */
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * @param User $user
     *
     * @return UserResource
     */
    public function getUserPortfolio(User $user)
    {
        return new UserResource($this->userModel->findOrFail($user->id));
    }
}
