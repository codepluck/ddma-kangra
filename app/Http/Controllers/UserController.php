<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\User;
use App\Http\Requests\User as UserRequest;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function show(User $user)
    {

    }
}
