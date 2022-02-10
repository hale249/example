<?php

namespace App\Repositories;

interface OAuthClientRepositoryInterface
{
    /**
     * Get OAuthClient default info
     * @return array
     * @throws \Exception
     */
    public function getFirstOAuthClientInfo(): array;
}
