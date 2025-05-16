<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/logo.png') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <link rel="stylesheet" href={{asset('css/client/app.css') }}>

    </head>
    <body>
        @include('client.elements.top-header')

        @include('client.elements.main-menu')

        @yield('content')

        @include('client.elements.footer')

        {{--  @include('client.elements.footer')  --}}

        @yield('modals')

        @stack('scripts')
        <script>
            $(document).ready(function(){
                $("#menu-product").click(function(){
                    $("#sub-menu-product").toggle();
                });
            });

            $(document).mouseup(function(e){
                var container = $("#sub-menu-product");

                if (!container.is(e.target) && container.has(e.target).length === 0)
                {
                    container.hide();
                }
            });

        </script>
    </body>
</html>
