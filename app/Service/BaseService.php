<?php

namespace App\Service;

use App\Models\Task;
use App\Models\User;
use App\Models\WorkHours;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BaseService
{
    public function updateOrCreate($model, $params){
        try{
            $temp_array = [];
            foreach ($params as $key => $value){
                if($value !== null){
                    $temp_array[$key] = $value;
                }
            }
            if(key_exists('id', $params)){
                $model::query()
                    ->find($params['id'])
                    ->update($temp_array);
            } else {
                Task::query()
                    ->create($temp_array);
            }

            return response('success', 200);
        } catch (\Exception $e){
            return $e;
        }
    }

    public function updateByTaskAndWorkHours(array $create_array)
    {
        $task = Task::query()
            ->findOrFail($create_array['id'])
            ->update([
                'status_id' => $create_array['status_id'],
                'comment' => $create_array['comment'],
            ]);

        $work_hours = WorkHours::query()
            ->where('task_id', '=', $create_array['id'])
            ->update([
                'start_hour' => $create_array['start_hour'],
                'end_hour' => $create_array['end_hour'],
            ]);

        return response('success');
    }
}
