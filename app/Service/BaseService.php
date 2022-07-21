<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BaseService
{
    public function updateOrCreate($model, $params){
        if(key_exists('id', $params)){
            $temp_array = [];
            foreach ($params as $key => $value){
                if($value !== null){
                    $temp_array[$key] = $value;
                }
            }

            $model::query()
                ->find($params['id'])
                ->update($temp_array);
        } else {
            $model::create($params);
        }

        return response('success', 200);
    }
}
