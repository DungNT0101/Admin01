<!DOCTYPE html>
<html lang="vi">
    <head>
        @include('admin.elements.head')

        <link rel="stylesheet" href={{asset('css/admin/login.css') }}>
    </head>
    <body id="loginPage">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-box">
                        <h4>Ginny.Shop</h4>
                        <p>
                            Đăng nhập hệ thống quản trị website
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
        </div>
    </body>
</html>
