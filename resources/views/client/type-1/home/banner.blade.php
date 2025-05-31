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
                    <form action="#" method="GET" class="search-form">
                        <div class="input-group mb-2">
                            <select name="type" class="form-select" style="max-width:150px;">
                                <option value="">Loại hình</option>
                                <option value="ban">Nhà đất bán</option>
                                <option value="chothue">Nhà đất cho thuê</option>
                            </select>
                            <select name="city" class="form-select" style="max-width:180px;">
                                <option value="">Tỉnh/Thành phố</option>
                                <option value="hcm">Hồ Chí Minh</option>
                                <option value="hn">Hà Nội</option>
                                <option value="dn">Đà Nẵng</option>
                                <option value="bd">Bình Dương</option>
                                <option value="dna">Đồng Nai</option>
                                <option value="ph">Hải Phòng</option>
                                <option value="th">Thanh Hóa</option>
                                <option value="tn">Thái Nguyên</option>
                                <!-- Thêm các tỉnh/thành khác nếu cần -->
                            </select>
                            <input type="text" name="query" class="form-control" placeholder="Tìm kiếm bất động sản theo tên, mã, ..." required>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
