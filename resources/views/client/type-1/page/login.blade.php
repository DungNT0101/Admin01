@extends('layouts.type-1')

@section('title', 'Thông tin cá nhân')

@section('description', 'Đăng nhập vào hệ thống quản trị của Sandat.net để quản lý thông tin cá nhân và các tin mua bán nhà đất.')


@section('content')
<div class="page-login">
    <div class="container">
        <div class="login-box">
            <h4>Sandat.net</h4>
            <p>
                Đăng nhập hệ thống quản lý và đăng tin nhà đất của Sandat.net
            </p>
            <form action="{{ route('user.login') }}" method="POST" class="mg-top-20" id="formLogin">
                @csrf
                <input type="text" class="form-control" name="userName" placeholder="Tên đăng nhập" required value="{{ old('userName') }}">
                <input type="password" class="form-control mg-top-20" name="password" placeholder="Mật khẩu" required>
                <button type="submit" class="btn form-control btn-primary mg-top-20">Đăng nhập </button>
            </form>

            @if($errors)
                @include('admin.elements.error', [$errors])
            @endif
        </div>
    </div>
</div>

@endsection

