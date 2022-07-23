<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public BaseService $baseService;

    public function __construct()
    {
        $this->baseService = new BaseService();
    }

    public function createOrUpdateUser(Request $request){
        $create_array = [
            'username' => $request->get('username'),
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'password' => Hash::make($request->get('password')),
            'role_id' => $request->get('role_id')
        ];

        if($request->has('id')){
            $create_array['id'] = $request->get('id');
        }

        return $this->baseService->updateOrCreate(new User(), $create_array);
    }

    public function checkRole(){
        return response('success');
    }
}
