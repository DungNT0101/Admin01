<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view('admin.user.login');
    }

    public function userLogin(Request $request)
    {
        $user = $this->userService->login($request->userName, $request->password);

        if(!$user){
            $request->flash();
            return $this->userService->loginFails();
        }

        return $this->userService->loginSuccess($user);

    }

}
