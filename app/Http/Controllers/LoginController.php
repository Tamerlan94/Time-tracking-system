<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public ProjectService $projectService;

    public function __construct()
    {
        $this->projectService = new ProjectService();
    }

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $isCorrect = Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')]);
        if($isCorrect){
            $user = User::find(Auth::user()->getAuthIdentifier());

            $role = $user->role;
            session([
                'role' => $role->name,
            ]);

            $this->projectService->setInSessionProjectsWithTasksForCurrentUser();

            dd(session('projects'));
            //return view('/index');
        }
        else return back()->with([
            'error' =>  'Failed to login',
        ]);
    }
}
