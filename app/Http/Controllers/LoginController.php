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
            Auth::login($user);
            $role = $user->role;

            $this->projectService->setInSessionProjectsWithTasksForCurrentUser();
<<<<<<< HEAD

            //dd(session('projects'));
            return redirect()->route('index');
=======
            /*session([
               'role' => $role,
            ]);*/
            setcookie('role', $role->name);
            //dd(session('projects'));
            //dd(session('role.name'));
            return redirect('/');
>>>>>>> e1c3fb8169cbddd5a120d7dc02025b6aa6bf9adb
        }
        else return back()->with([
            'loginError' =>  'Неверный логин',
            'passwordError'=> 'Неправильный пароль'
        ]);
    }

    public function logout(){
        setcookie('role', '', [
            'expires' => time()-3600,
        ]);
        Auth::logout();
        return redirect()->route('login');
    }
}
