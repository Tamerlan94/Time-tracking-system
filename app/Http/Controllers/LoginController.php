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
        if ($isCorrect) {
            $user = User::find(Auth::user()->getAuthIdentifier());

            $role = $user->role;
            $projects = $user->projects;
            $tasks_by_user = $user->tasks;
            session([
                'role' => $role->name,
                'projects' => $projects,
                'tasks' => $tasks_by_user
            ]);

            //dd(session('tasks'));

            return view('/index');
        } else return back()->with([
            'loginError' => 'Неправильный логин',
            'passwordError' => 'Неправильный пароль'
        ]);
    }
}
