<div class="home-banner">
    <div class="row banner-content">
        <div class="col-md-12">
            <img src="{{ asset('layout/type-1/images/home/bg-h-1.jpg') }}" alt="Home Banner 1" class="img-fluid">
        </div>
        <div class="container">
            <div class="row home-search">
                <div class="col-md-12 text-center">
                    <h1 class="banner-title">Chào mừng bạn đến với Sandat.net</h1>
                    <p class="banner-subtitle">Nơi kết nối những giấc mơ về nhà đất</p>
                </div>
                <div class="col-md-12">
                    <form action="{{ route('search.property') }}" method="GET" class="search-form">
                        <div class="input-group mb-2">
                            <select name="type" class="form-select" style="max-width:150px;">
                                <option value="">Loại hình</option>
                                <option value="Đất bán">Đất bán</option>
                                <option value="Nhà bán">Nhà bán</option>
                            </select>
                            <select name="price" class="form-select" style="max-width:180px;">
                                <option value="">Khoảng giá</option>
                                <option value="1">Dưới 1 tỷ</option>
                                <option value="2">Từ 1 tỷ đến 2 tỷ</option>
                                <option value="3">Từ 2 tỷ đến 3 tỷ</option>
                                <option value="4">Trên 3 tỷ</option>
                            </select>
                            <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm bất động sản theo tên, mã, ...">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
