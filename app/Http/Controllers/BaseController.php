<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use App\Models\WorkHours;
use App\Service\BaseService;
use App\Service\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BaseController extends Controller
{
    private BaseService $baseService;
    private TaskService $taskService;


    public function __construct()
    {
        $this->baseService = new BaseService();
        $this->taskService = new TaskService();

    }

    // TASK
    public function createOrUpdateTask(Request $request)
    {
        if(!$request->has('id')){
            return Task::query()
                ->create($request->input());
        } else {
            return Task::query()
                ->findOrFail($request->get('id'))
                ->update($request->input());
        }
    }

    public function changeStatus(Request $request)
    {
        $this->taskService->changeStatus($request->get('id'), $request->get('status_id'));

        return response('success', 200);
    }

    public function getTaskById(Request $request)
    {
        $task = Task::query()
            ->findOrFail($request->get('id'));
        //print_r($task);
        return response($task);
    }

    public function getInfoByTaskId(Request $request){
        $task = Task::query()
            ->where('id', '=', $request->get('id'))
            ->with('project')
            ->with('work_hours')
            ->with('status')
            ->first();
        //print_r($task);
        return response($task);
    }

    // USER
    public function createOrUpdateUser(Request $request){
        if(!$request->has('id')){
            return User::query()
                ->create($request->input());
        } else {
            return User::query()
                ->findOrFail($request->get('id'))
                ->update($request->input());
        }
    }

    public function userAll(){
        return User::all();
    }

    // STATUS
    public function getAll(){
        return Status::all();
    }

    // PROJECT
    public function createOrUpdateProject(Request $request){
        if(!$request->has('id')){
            return Project::query()
                ->create($request->input());
        } else {
            return Project::query()
                ->findOrFail($request->get('id'))
                ->update($request->input());
        }
    }

    // WORK HOURS
    public function createOrUpdateWorkHours(Request $request){
        if(!$request->has('id')){
            return WorkHours::query()
                ->create($request->input());
        } else {
            return WorkHours::query()
                ->findOrFail($request->get('id'))
                ->update($request->input());
        }
    }

    public function updateByTaskAndWorkHours(Request $request){

        if($request->has('id')){
            $create_array = [
                'id' => $request->get('id'),
                'start_hour' => $request->get('start_hour'),
                'end_hour' => $request->get('end_hour'),
                'status_id' => $request->get('status_id'),
                'comment' => $request->get('comment'),
            ];
            return $this->baseService->updateByTaskAndWorkHours($create_array);

        }

        return response('There is no task id');
    }
}
