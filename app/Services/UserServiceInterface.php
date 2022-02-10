<?php

namespace App\Services;

use App\Models\User;

interface UserServiceInterface
{
    public function makeToken(string $username, string $password): array;

    public function refreshToken(string $refreshToken): array;

    public function createUser(array $data, bool $activated = false): User;
}
