<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use App\User;

class ApiController extends Controller
{
    public function profile(Request $requset){
        return UserResource::collection(User::find($requset->user()));
    }
}
