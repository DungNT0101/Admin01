<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

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

    public function myProfile()
    {
        $user = $this->userService->getUser();
        return view('admin.user.my-profile', [
            'data' => $user
        ]);
    }
    public function updateProfile(Request $request)
    {
        $user = $this->userService->updateProfile($request);
        if($user){
            return redirect()->back()->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->back()->with('error', 'Cập nhật thất bại');
        }

    }
    public function updatePassword(Request $request)
    {
        $user = $this->userService->updatePassword($request);
        if($user){
            return redirect()->back()->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->back()->with('error', 'Cập nhật thất bại');
        }
    }
    public function logout()
    {
        return $this->userService->logout();
    }
    public function getUser()
    {
        return $this->userService->getUser();
    }
    public function getUserById($id)
    {
        return $this->userService->getUserById($id);
    }

}
