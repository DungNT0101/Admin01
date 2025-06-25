<div class="top-menu row">
    <div class="col-md-12 text-end">
        <ul class="nav nav-tabs">
            @if(Auth::user()->admin_type == 1)
                <li class="nav-item">
                    <a href="{{ route('accounts.index') }}" class="btn btn-primary"> <i class="fa fa-list"></i> Danh sách tài khoản</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('partner.create') }}" class="btn btn-primary"> <i class="fa fa-list"></i> Danh sách đối tác</a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link btn btn-register" href="{{ route('my-properties.create') }}" ><i class="fa fa-plus"></i> Đăng tin</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="btn btn-success"> <i class="fa fa-sign-out-alt"></i> Đăng xuất</a>
            </li>
        </ul>
    </div>
</div>
