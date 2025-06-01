<!-- resources/views/clients/elements/main-menu.blade.php -->

<div class="top-menu display-block" id="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-2 mg-top-10">
                <a href="{{ route('home') }}" class="">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="{{ $homeConfig->title }}" class="w-80">
                </a>
            </div>
            <div class="col-md-6 main-menu mg-top-20">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sale.property') }}">Nhà đất bán</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Nhà đất cho thuê</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dự án</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mg-top-20">
                <div class="row">
                    <div class="col-md-2">
                        <div class="img-box text-right">
                            <img src="{{ asset('images/icons/user_default.png') }}" alt="" class="img-avatar w-60">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="user-info mg-top-10">
                            <span class="user-name">Xin chào, Admin</span>
                            <ul class="nav nav-user-info d-none">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Thông tin cá nhân</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="create-listing">
                            <a href="" class="btn btn-create">Đăng tin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const userInfo = document.querySelector('.user-info');
        const nav = document.querySelector('.nav-user-info');
        if (userInfo && nav) {
            nav.classList.add('d-none'); // Hide nav by default
            userInfo.addEventListener('click', function () {
                nav.classList.toggle('d-none');
            });
        }
    });
</script>
@endpush
