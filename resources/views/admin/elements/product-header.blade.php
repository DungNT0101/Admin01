<div class="header">
    <ul>
        <li>
            <a href="{{ route('admin.products') }}" class="module-title">
                <i class="fa fa-cogs fa-x3" aria-hidden="true"></i>
                &nbsp;
                Sản phẩm
            </a>
        </li>
        <li>
            <a href="{{ route('product.create') }}">
                <i class="fa fa-plus fa-x3" aria-hidden="true"></i>
                Tạo mới
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-list fa-x3" aria-hidden="true"></i>
                Danh sách
            </a>
        </li>
        <li class="header-search">
            <form action="">
                <input type="text" placeholder="Tên sản phẩm" class="form-control keywords">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form>
        </li>
    </ul>
</div>