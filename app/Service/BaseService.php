<?php

namespace App\Service;

use App\Models\Task;
use App\Models\User;
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
}
