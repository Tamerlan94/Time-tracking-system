<?php

namespace App\Service;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjectService
{
    public function setInSessionProjectsWithTasksForCurrentUser(){
        $user = User::find(Auth::id());

        $projects = $user->projects;

        foreach ($projects as $project){
            $tasks = Task::query()
                ->where('project_id', '=', $project->id)
                ->where('user_id', '=', Auth::id())
                ->get();

            $project['tasks'] = $tasks;
        }

        session([
           'projects' => $projects
        ]);
    }
}
