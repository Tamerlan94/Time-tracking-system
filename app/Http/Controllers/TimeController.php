<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::user()->id)->get();
        $statuses = Status::all();
        return view('index', [
            'tasks' => $tasks,
            'statuses' => $statuses,
        ]);
    }

    public function userStatistic()
    {
        return view('user');
    }

    public function managerStatistic()
    {
        $users = User::with('projects')
            ->with('tasks')
            ->get();

        return view('manager', [
            'users' => $users
        ]);
    }

    public function admin()
    {
        $user = User::all();
        return view('NewAdmin', ['users' => $user]);
    }
}
