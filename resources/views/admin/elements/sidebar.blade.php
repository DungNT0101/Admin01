<h2 class="admin-name">
    {{ Auth::user()->user_name }}
</h2>
<div class="box-menu">
    <h6 class="title-1">
        <a href="{{route('dashboard')}}">Home</a>
    </h6>
</div>
<div class="box-menu">
    <h6 class="title-1">
        Sản Phẩm
    </h6>
    <ul class="">
        <li>
            <a href="{{ route('product.index') }}">Danh sách</a>
        </li>
        <li>
            <a href="{{ route('product.create') }}">Thêm mới</a>
        </li>
        <li>
            <a href="{{ route('product.hot') }}">Sản phẩm bán chạy</a>
        </li>
        <li>
            <a href="#">Phụ kiện</a>
        </li>
        <li>
            <a href="{{ route('product.categories') }}">Danh mục</a>
        </li>
    </ul>
</div>

<div class="box-menu">
    <h6 class="title-1">
        Bài viết
    </h6>
    <ul class="">
        <li>
            <a href="{{ route('page.view', 'gioi-thieu') }}">Giới thiệu</a>
        </li>
        <li>
            <a href="{{ route('page.view', 'khuyen-mai') }}">Khuyến mãi</a>
        </li>
        <li>
            <a href="{{ route('page.view', 'lien-he') }}">Liên hệ</a>
        </li>
        <li>
            <a href="{{ route('page.view', 'huong-dan-mua-hang') }}">Hướng dẫn mua hàng</a>
        </li>
    </ul>
</div>

<div class="box-menu">
    <h6 class="title-1">
        Tin tức
    </h6>
    <ul class="">
        <li>
            <a href="{{ route('news.index') }}">Danh sách</a>
        </li>
        <li>
            <a href="{{ route('news.create') }}">Thêm mới</a>
        </li>
    </ul>
</div>

<div class="box-menu">
    <h6 class="title-1">
        Kiến thức
    </h6>
    <ul class="">
        <li>
            <a href="{{ route('kienThuc.index') }}">Danh sách</a>
        </li>
        <li>
            <a href="{{ route('kienThuc.create') }}">Thêm mới</a>
        </li>
    </ul>
</div>

<div class="box-menu">
    <h6 class="title-1">
        Chính sách
    </h6>
    <ul class="">
        <li>
            <a href="{{ route('page.view', 'van-chuyen-va-giao-nhan') }}">Vận chuyển và giao nhận</a>
        </li>
        <li>
            <a href="{{ route('page.view', 'bao-hanh') }}">Bảo hành</a>
        </li>
        <li>
            <a href="{{ route('page.view', 'hoan-tien') }}">Hoàn tiền</a>
        </li>
    </ul>
</div>

<div class="box-menu">
    <h6 class="title-1">
        Pages
    </h6>
    <ul class="">
        <li>
            <a href="{{ route('page.index') }}">Danh sách</a>
        </li>
        <li>
            <a href="{{ route('page.create') }}">Thêm mới</a>
        </li>
    </ul>
</div>

