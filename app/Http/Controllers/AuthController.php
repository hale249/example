<?php

namespace App\Http\Controllers;

use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
        parent::__construct();
    }

    public function register()
    {

    }

    public function login(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (!Auth::guard('web')->attempt($credentials, true)) {
            return $this->error(__('authentication.wrong_username_password'), null, 400);
        }
        $user = auth()->guard('web')->user();
        $result = $this->userService->makeToken($request->username, $request->password);

        return $this->success('oke', $result);
    }

    public function logout()
    {

    }

    public function info()
    {
        $auth = Auth::user();

        return $this->success('info', $auth, 200);
    }
}
