<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Service\BaseService;
use App\Service\TaskService;
use Database\Seeders\TaskSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    public BaseService $baseService;
    public TaskService $taskService;

    public function __construct()
    {
        $this->baseService = new BaseService();
        $this->taskService = new TaskService();
    }

    public function createOrUpdateTask(Request $request)
    {
        $create_array = [
            'project_id' => $request->get('project_id'),
            'status_id' => $request->get('status_id'),
            'user_id' => $request->get('user_id'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'deadline' => $request->get('deadline'),
        ];

        if ($request->has('id')) {
            $create_array['id'] = $request->get('id');
        }

        return $this->baseService->updateOrCreate(new Task(), $create_array);
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
            ->first();
        //print_r($task);
        return response($task);
    }

    public function changeStatus(Request $request)
    {
        $this->taskService->changeStatus($request->get('id'), $request->get('status_id'));

        return response('success', 200);
    }

    public function checkRole()
    {
        return response('success');
    }
}
