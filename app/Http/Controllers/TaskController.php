<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Service\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    public BaseService $baseService;

    public function __construct()
    {
        $this->baseService = new BaseService();
    }

    public function createOrUpdateTask(Request $request){
        $create_array = [
            'project_id' => $request->get('project_id'),
            'status_id' => $request->get('status_id'),
            'user_id' => $request->get('user_id'),
            'name' => $request->get('name'),
            'deadline' => $request->get('deadline'),
        ];

        if($request->has('id')){
            $create_array['id'] = $request->get('id');
        }

        return $this->baseService->updateOrCreate(new Task(), $create_array);
    }
}
