<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BaseService
{
    public function updateOrCreate($model, $params){
        if(key_exists('id', $params)){
            User::query()
                ->find($params['id'])
                ->update($params);
        } else {
            User::create($params);
        }

        return response('success', 200);
    }
}
