<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()->create([
            'name' => 'Ha',
            'username' => 'gobysend',
            'email' => 'lehatybg12@gmail.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => Carbon::now()->timestamp,
        ]);

        $user->createToken('admin')->accessToken;
    }
}
