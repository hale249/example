<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Cache;
use Laravel\Passport\Client as OAuthClient;

class OAuthClientRepository implements OAuthClientRepositoryInterface
{
    private $cacheKey = 'passport_oauth_client';

    private $expiresInSeconds = 24*60*60;    // Cache this 24 hours because it won't be changed

    /**
     * Get OAuthClient default info
     * @return array
     * @throws \Exception
     */
    public function getFirstOAuthClientInfo(): array
    {
        $oauthClient = Cache::remember($this->cacheKey, now()->addSeconds($this->expiresInSeconds), function () {
            return OAuthClient::query()->where('password_client', 1)->first();
        });

        if (!$oauthClient) {
            throw new \Exception('OAuth Client not found', 400);
        }

        return [
            'id' => $oauthClient->id,
            'secret' => $oauthClient->secret
        ];
    }
}
