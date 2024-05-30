<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\loginRequest;
use App\Http\Requests\User\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->all();
        User::create($data);
        return to_route('login');
    }

    public function login(loginRequest $request)
    {
        $data = $request->all();
        unset($data['_token']);
        if(Auth::attempt($data))
        {
            return to_route('user.index');
        }
        else
        {
            return to_route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
