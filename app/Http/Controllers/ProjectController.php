<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Service\BaseService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public BaseService $baseService;

    public function __construct()
    {
        $this->baseService = new BaseService();
    }

    public function createOrUpdateTask(Request $request){
        $create_array = [
            'name' => $request->get('name'),
            'manager_id' => $request->get('manager_id'),
        ];

        if($request->has('id')){
            $create_array['id'] = $request->get('id');
        }

        return $this->baseService->updateOrCreate(new Project(), $create_array);
    }
}
