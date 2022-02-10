<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param array $data
     * @return User|Builder
     */
    public function create(array $data): User
    {
        return User::query()->create($data);
    }
}
