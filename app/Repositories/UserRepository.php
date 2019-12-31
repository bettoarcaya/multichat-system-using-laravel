<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository{

    public function getUserInfo($user_id){
        $response = User::find($user_id);

        return $response;
    }
    
}