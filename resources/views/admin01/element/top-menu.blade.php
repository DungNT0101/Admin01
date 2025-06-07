<div id="topMenu">
    <div class="container">
        <div class="row" id="pcMenu">
            <div class="col-md-1">
                <a href="{{ route('home') }}" class="pc-logo logo">
                    <img src="{{ asset('layout/type-1/images/logo.png') }}" alt="Logo" class="img-fluid">
                </a>
            </div>
            <div class="col-md-5">
                <ul class="nav-top-menu">
                    <li>
                        <a href="{{ route('my-properties') }}">Đất bán</a>
                    </li>
                    <li class="mg-left-10">
                        <a href="{{ route('sale.create') }}">Nhà bán</a>
                    </li>
                    @if (Auth::check())
                        <li class="mg-left-10">
                            <a href="{{ route('my-properties') }}" >Tin đã đăng</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="col-md-6 pd-top-15">
                <div class="Login-Register">
                    <ul class="top-menu-right">
                        @if (Auth::check())
                            <li class="mg-left-10">
                                <a href="{{ route('logout') }}" class="btn btn-primary">
                                    <i class="fas fa-sign-out-alt"></i> Đăng xuất
                                </a>
                            </li>
                        @endif

                        <li class="mg-left-10">
                            <a href="#" class="btn btn-register">
                                <span class="watching-properties-count">0</span> <i class="fas fa-heart"></i>
                            </a>
                        </li>

                        @if (Auth::check())
                            <li class="mg-left-10">
                                <a href="{{ route('my-profile') }}" class="user-info btn btn-register">
                                    <img src="{{ asset(Auth::user()->avatar) }}" alt="{{ Auth::user()->full_name }}" class="user-avatar">
                                    {{ Auth::user()->full_name }}
                                </a>
                            </li>
                        @else
                            <li class="mg-left-10">
                                <a href="{{ route('login') }}" class="btn btn-primary">
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
                        <div class="col-3">
                            <button id="mobile-menu-toggle" class="btn btn-toggle-menu">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('home') }}" class="mobile-logo">
                                <img src="{{ asset('layout/type-1/images/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="col-3">
                            <p class="btn mg-10">
                                <span class="watching-properties-count">0</span><i class="fas fa-heart"></i>
                            </p>
                        </div>
                        <div class="col-3 text-end">
                            @if (Auth::check())
                                <a href="{{ route('my-profile') }}" class="user-info">
                                    <img src="{{ asset(Auth::user()->avatar) }}" alt="{{ Auth::user()->full_name }}" class="user-avatar">
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn login-btn mg-10">
                                    <i class="fas fa-user"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <ul class="nav-top-menu" id="mobileTopMenu">
                    @if (Auth::check())
                        <li class="">
                            <a href="{{ route('sale.create') }}" >Tin đã đăng</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('sale.property') }}">Đất bán</a>
                    </li>
                    <li>
                        <a href="{{ route('rent.property') }}">Nhà bán</a>
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
