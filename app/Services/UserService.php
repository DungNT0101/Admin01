<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserService
{
    public function login($userName, $password)
    {
        // dd(Hash::make('admin'));
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

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
    public function getUser()
    {
        return Auth::user();
    }
    public function getUserById($id)
    {
        return User::find($id);
    }
    public function updateProfile($request)
    {
        $user = User::find(Auth::id());
        if($request->hasFile('avatar')){
            $avatarName = Auth::user()->user_name.'.'.$request->avatar->guessExtension();
            $request->avatar->move(config('image.users'), $avatarName);
            $user->avatar = config('image.users').'/'.$avatarName;
        }

        // $user->user_name = $request->user_name;
        $user->full_name = $request->fullname;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        $user->bio = $request->bio;
        $user->zalo = $request->zalo;
        $user->facebook = $request->facebook;
        $user->youtube = $request->youtube;
        $user->tiktok = $request->tiktok;

        // if($request->password){
        //     $user->password = Hash::make($request->password);
        // }
        return $user->save();
    }

    public function updatePassword($request)
    {
        $user = User::find(Auth::id());
        if(Hash::check($request->old_password, $user->password)){
            $user->password = Hash::make($request->new_password);
            return $user->save();
        } else {
            return false;
        }
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        return $user->delete();
    }
    public function getAllUser()
    {
        return User::all();
    }
    public function createUser($request)
    {
        // Validate unique user_name
        if (User::where('user_name', $request->user_name)->exists()) {
            return [
                'success' => false,
                'message' => 'Tên đăng nhập đã tồn tại.'
            ];
        }
        $user = new User();
        $user->user_name = $request->user_name;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();
        return [
            'success' => true,
            'user' => $user
        ];
    }

}
