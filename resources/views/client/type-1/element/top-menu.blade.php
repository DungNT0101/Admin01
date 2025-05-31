<div id="topMenu">
    <div class="container">
        <div class="row" id="pcMenu">
            <div class="col-md-1">
                <a href="{{ route('home') }}" class="pc-logo logo">
                    <img src="{{ asset('layout/type-1/images/logo.png') }}" alt="Logo" class="img-fluid">
                </a>
            </div>
            <div class="col-md-6">
                <ul class="nav-top-menu">
                    <li>
                        <a href="{{ route('home') }}">Nhà đất bán</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Nhà đất cho thuê</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Dự án</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Tin tức</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 pd-top-15">
                <div class="Login-Register">
                    <ul class="top-menu-right">
                        <li class="mg-left-10">
                            <a href="#" class="btn btn-register">Đăng tin</a>
                        </li>

                        @if (Auth::check())
                            <li class="mg-left-10">
                                <a href="#" class="user-info">
                                    <i class="fas fa-user"></i> Xin chào! Admin
                                    <img src="{{ asset('layout/type-1/images/user-avatar.png') }}" alt="User Avatar" class="user-avatar">
                                </a>
                            </li>
                        @else
                            <li class="mg-left-10">
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-sign-in-alt"></i> Đăng nhập
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="mobileMenu">
            <div class="col-md-12">
                <div class="mobile-menu-header">
                    <div class="row">
                        <div class="col-4">
                            <button id="mobile-menu-toggle" class="btn btn-toggle-menu">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('home') }}" class="mobile-logo">
                                <img src="{{ asset('layout/type-1/images/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="col-4 text-end">
                            @if (Auth::check())
                                <a href="#" class="user-info">
                                    {{--  <i class="fas fa-user"></i> Xin chào! Admin  --}}
                                    <img src="{{ asset('layout/type-1/images/user-avatar.png') }}" alt="User Avatar" class="user-avatar">
                                </a>
                            @else
                                <a href="#" class="btn login-btn mg-10">
                                    <i class="fas fa-user"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <ul class="nav-top-menu" id="mobileTopMenu">
                    <li>
                        <a href="{{ route('home') }}">Nhà đất bán</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Nhà đất cho thuê</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Dự án</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Tin tức</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@push('css')
<style>


</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobileTopMenu');
    if (toggleBtn && mobileMenu) {
        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('open');
        });
        // Optional: close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('open');
            }
        });
    }

    var topMenu = document.getElementById('topMenu');
    var lastScroll = 0;
    var menuHeight = topMenu.offsetHeight;
    window.addEventListener('scroll', function () {
        if (window.scrollY > menuHeight) {
            if (!topMenu.classList.contains('fixed')) {
                topMenu.classList.add('fixed');
                document.body.classList.add('menu-fixed');
            }
        } else {
            if (topMenu.classList.contains('fixed')) {
                topMenu.classList.remove('fixed');
                document.body.classList.remove('menu-fixed');
            }
        }
    });
});
</script>
@endpush
