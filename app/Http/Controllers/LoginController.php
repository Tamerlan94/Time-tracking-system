<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $isCorrect = Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')]);
        if($isCorrect){
            session(['role' => Auth::user()->role]);
            return view('/index');
        }
        else return back()->with('error', 'Failed to login');
    }
}
