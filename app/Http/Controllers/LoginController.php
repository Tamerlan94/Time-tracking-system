<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            $role = User::find(Auth::user()->getAuthIdentifier())->role;
            session(['role' => $role->name]);
            return view('/index');
        }
        else return back()->with('error', 'Failed to login');
    }
}
