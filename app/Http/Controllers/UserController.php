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
        return view('client.type-1.page.login');
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
        return view('admin01.my-profile.index', [
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

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('admin01.accounts.index', [
            'data' => $users
        ]);
    }

    public function create()
    {
        /** @var \App\Models\User $user */
        $user = $this->userService->getUser();
        if(!$user || !$user->isAdmin()){
            return redirect()->route('accounts.index')->with('error', 'Bạn không có quyền truy cập');
        }

        return view('admin01.accounts.create', [
            // 'roles' => $roles
        ]);
    }

    public function store(Request $request)
    {
        $user = $this->userService->store($request);
        if($user){
            return redirect()->route('accounts.index')->with('success', 'Tạo tài khoản thành công');
        } else {
            return redirect()->back()->with('error', 'Tạo tài khoản thất bại');
        }
    }

    public function edit($id)
    {
        $user = $this->userService->getUserById($id);
        if(!$user){
            return redirect()->route('accounts.index')->with('error', 'Tài khoản không tồn tại');
        }
        return view('admin01.accounts.edit', [
            'data' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = $this->userService->update($request, $id);
        if($user){
            return redirect()->route('accounts.index')->with('success', 'Cập nhật tài khoản thành công');
        } else {
            return redirect()->back()->with('error', 'Cập nhật tài khoản thất bại');
        }
    }

    public function delete($id)
    {
        $result = $this->userService->delete($id);
        if($result){
            return redirect()->route('accounts.index')->with('success', 'Xóa tài khoản thành công');
        } else {
            return redirect()->back()->with('error', 'Xóa tài khoản thất bại');
        }
    }


}
