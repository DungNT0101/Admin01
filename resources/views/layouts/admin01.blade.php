<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        {{--  <meta name="keywords" content="@yield('keywords')" />  --}}
        <meta name="description" content="@yield('description')" />
        {{--  <meta name="description" content="Sandat.net là nền tảng bất động sản hàng đầu tại Việt Nam, được xây dựng với mục tiêu kết nối người mua, người bán và các nhà đầu tư bất động sản một cách nhanh chóng, minh bạch và hiệu quả. Chúng tôi cung cấp hệ thống đăng tin mua bán, cho thuê nhà đất, căn hộ, biệt thự, đất nền, văn phòng và nhiều loại hình bất động sản khác trên khắp các tỉnh thành." />  --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('layout/type-1/images/logo.png') }}">

        {{--  FAVICON  --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('layout/type-1/images/logo.png') }}">

        {{--  Bootstrap 5  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        {{--  GOOGLE FONTS  --}}
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">

        {{--  FONT AWESOME  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        {{--  Jquery 3.6  --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        {{--  Bootstrap 5 JS  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        {{--  Custom CSS  --}}
        <link rel="stylesheet" href={{asset('layout/admin01/css/admin01.css') }}?v=11>

    </head>
    <body class="">

        @include('admin01.element.top-menu')

        @yield('content')

        @include('admin01.element.footer')

        <script src="{{ asset('layout/admin01/js/admin01.js') }}?v=11"></script>

        {{--  Custom Scripts  --}}
        @stack('scripts')

    </body>
</html>
