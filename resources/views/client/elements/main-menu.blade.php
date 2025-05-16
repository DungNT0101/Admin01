<!-- resources/views/clients/elements/main-menu.blade.php -->

<div class="top-menu display-block" id="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="menu-product" id="menu-product">
                    <i class="material-icons middle icon-menu">menu</i>
                    Danh mục sản phẩm
                    <i class="material-icons icon-expand">expand_more</i>
                </a>
                <ul id="sub-menu-product">
                    @foreach ($productCategory as $category)
                        <li>
                            <a href="{{ route('client.category', $category->slug) }}" class="">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
                <ul class="" id="main-menu">
                    <li>
                        <a href="{{ route('home') }}" >Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ route('client.introduction') }}" >Giới thiệu</a>
                    </li>
                    <li>
                        <a href="{{ route('client.news') }}" >Tin tức</a>
                    </li>
                    <li>
                        <a href="{{ route('client.kienThuc') }}" >Kiến thức</a>
                    </li>
                    <li>
                        <a href="{{ route('client.khuyenMai') }}" >Khuyến mãi</a>
                    </li>
                    <li>
                        <a href="{{ route('client.contact') }}" >Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
