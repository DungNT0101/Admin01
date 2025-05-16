<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use App\Models\Dashboard;

class DashboardService
{
    public function login($userName, $password)
    {
        $user = User::where('name', $userName)->first();

        if(!$user){
            return false;
        }

        if(Hash::check($password, $user->password)){
            return $user;
        } else {
            return false;
        }
    }

    public function loginFails(){
        $errors = [
            'userName' => 'Tên đăng nhập hoặc mật khẩu không đúng'
        ];

        return view('admin.user.login', [
            'errors' => collect($errors)
        ]);
    }

    public function loginSuccess($user){
        Auth::login($user);

        return redirect(route('admin.products'));
    }

    public function getInfo(){
        return Dashboard::find(1);
    }

    public function update($request){
        $dashboard = self::getInfo();
        $data = [
            'title' => $request->title ? $request->title : $dashboard->title,
            'keywords' => $request->keywords ? $request->keywords : $dashboard->keywords,
            'description' => $request->description ? $request->description : $dashboard->description,
            'hotline' => $request->hotline ? $request->hotline : $dashboard->hotline,
            'zalo' => $request->zalo ? $request->zalo : $dashboard->zalo,
            'facebook' => $request->facebook ? $request->facebook : $dashboard->facebook,
            'google' => $request->google ? $request->google : $dashboard->google,
        ];

        $logo = $request->logo;

        if($logo){
            $logoName = 'logo.'.$logo->guessExtension();
            $logo->move(config('image.logo'), $logoName);
        }

        $banner = $request->banner;

        if($banner){
            $bannerName = 'banner.'.$banner->guessExtension();
            $banner->move(config('image.banner'), $bannerName);
        }

        return $dashboard->update($data);
    }
}
