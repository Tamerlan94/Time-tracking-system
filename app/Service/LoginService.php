<?php

namespace App\Service;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function authenticate($credentials){
        return Auth::attempt($credentials);
    }
}
