<?php

namespace App\Http\Controllers;

use App\Models\WorkHours;
use App\Service\BaseService;
use Illuminate\Http\Request;

class WorkHoursController extends Controller
{
    public BaseService $baseService;

    public function __construct()
    {
        $this->baseService = new BaseService();
    }

    public function createOrUpdateWorkHours(Request $request){
        $create_array = [
            'task_id' => $request->get('task_id'),
            'start_hour' => $request->get('start_hour'),
            'end_hour' => $request->get('end_hour'),
            'date' => $request->get('date'),
            'comment' => $request->get('comment'),
        ];

        if($request->has('id')){
            $create_array['id'] = $request->get('id');
        }

        return $this->baseService->updateOrCreate(new WorkHours(), $create_array);
    }
}
