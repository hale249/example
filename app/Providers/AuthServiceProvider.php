<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Register Passport routes and cache
        Passport::routes();
        Passport::tokensExpireIn(Carbon::now()->addMinutes(config('auth.passport_token_expires')));
        Passport::personalAccessTokensExpireIn(Carbon::now()->addMinutes(config('auth.passport_token_expires')));
        // Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(config('auth.passport_token_expires') * 2));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

        // Register Cached Eloquent user provider
        Auth::provider('cache-user', function() {
            return resolve(CacheUserProvider::class);
        });
    }
}
