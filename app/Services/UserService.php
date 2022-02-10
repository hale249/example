<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\OAuthClientRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use GuzzleHttp\Client as HttpClient;

class UserService implements UserServiceInterface
{
    protected $oAuthClientRepository;
    protected $userRepository;

    public function __construct(OAuthClientRepositoryInterface $oAuthClientRepository, UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->oAuthClientRepository = $oAuthClientRepository;
    }

    public function makeToken(string $username, string $password): array
    {
        $oauthClient = $this->oAuthClientRepository->getFirstOAuthClientInfo();
        $passportTokenUrl = config('app.url') . '/oauth/token';
        $http = new HttpClient();
        $response = $http->request('POST', $passportTokenUrl, [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => $oauthClient['id'],
                'client_secret' => $oauthClient['secret'],
                'username' => $username,
                'password' => $password,
                'scope' => '*',
            ]
        ]);

        return json_decode((string)$response->getBody(), true);
    }

    public function refreshToken(string $refreshToken): array
    {
        $oauthClient = $this->oAuthClientRepository->getFirstOAuthClientInfo();
        $passportTokenUrl = config('app.url') . '/oauth/token';
        $http = new HttpClient();
        $response = $http->request('POST', $passportTokenUrl, [
            'form_params' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $refreshToken,
                'client_id' => $oauthClient['id'],
                'client_secret' => $oauthClient['secret'],
                'scope' => '*',
            ],
        ]);

        return json_decode((string)$response->getBody(), true);
    }

    public function createUser(array $data, bool $activated = false): User
    {
        // TODO: Implement createUser() method.
    }
}
