<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserService
{
    public function login($userName, $password)
    {
        $user = User::where('user_name', $userName)->first();

        if(!$user){
            return false;
        }

        if(Hash::check($password, $user->password)){
            return $user;
        } else {
            return false;
        }
    }

    public function loginFails()
    {
        $errors = [
            'userName' => 'Tên đăng nhập hoặc mật khẩu không đúng.'
        ];

        return view('admin.user.login', [
            'errors' => collect($errors)
        ]);
    }

    public function loginSuccess($user)
    {
        Auth::login($user);

        return redirect(route('dashboard'));
    }
}
