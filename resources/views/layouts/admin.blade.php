<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>@yield('title')</title>

        @include('admin.elements.head')

        @stack('css')
    </head>
    <body>
        <div class="sidebar" id="sidebar">
            @include('admin.elements.sidebar')
        </div>

        <div class="page-container" id="mainContent">
            <div class="main-content">
                @yield('content')
            </div>
            
            <div class="footer" id="footer">
                @include('admin.elements.footer')
            </div>
        </div>

        

        @yield('modals')

        <script>
            var sWidth = document.getElementById("sidebar").offsetWidth ;
            var mainContent = document.getElementById("mainContent");
            mainContent.style.marginLeft = sWidth+'px';
        </script>
        @stack('scripts')
    </body>
</html>
