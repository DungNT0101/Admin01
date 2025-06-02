<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sandat.net - Login</title>
        <meta name="description" content="Đăng nhập hệ thống quản trị website" />
        <link rel="icon" type="image/x-icon" href="{{ asset('layout/type-1/images/logo.png') }}">

        {{--  FAVICON  --}}
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        {{--  CSS  --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href={{asset('css/admin/app.css') }}>

        {{--  JS  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  --}}

        <link rel="stylesheet" href={{asset('css/admin/login.css') }}>
    </head>
    <body id="loginPage">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-box">
                        <h4>Sandat.net</h4>
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
