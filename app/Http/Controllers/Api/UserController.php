<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    /**
     *
     **/
    public function index(Request $request)
    {
        $users = User::take(4)->get();
        return (response()->json($users));
    }

}
