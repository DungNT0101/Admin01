<div class="listing-top-search">
    <div class="container">
        <form action="#" method="GET" class="search-form">
            <div class="row">
                <div class="col-md-3 pd-5">
                    <select name="property_type" class="form-control">
                        <option value="all" selected>Chọn loại bất động sản</option>
                        <option value="land">Đất bán</option>
                        <option value="house">Nhà bán</option>
                    </select>
                </div>
                <div class="col-md-3 pd-5">
                    <select name="location" class="form-control">
                        <option value="all" selected>Tỉnh / Thành Phố</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="hochiminh">TP. Hồ Chí Minh</option>
                        <option value="danang">Đà Nẵng</option>
                        <option value="haiphong">Hải Phòng</option>
                        <!-- Add more locations as needed -->
                    </select>
                </div>
                <div class="col-md-3 pd-5">
                    <select name="price_range" class="form-control">
                        <option value="all" selected>Khoảng giá</option>
                        <option value="3000000000">Dưới 3 tỷ</option>
                        <option value="3000000000-5000000000">3 tỷ - 5 tỷ</option>
                        <option value="5000000000-8000000000">5 tỷ - 8 tỷ</option>
                        <option value="8000000000-10000000000">8 tỷ - 10 tỷ</option>
                        <option value="10000000000-12000000000">10 tỷ - 12 tỷ</option>
                        <option value="12000000000-15000000000">12 tỷ - 15 tỷ</option>
                        <option value="15000000000">Trên 15 tỷ</option>
                    </select>
                </div>
                <div class="col-md-3 pd-5">
                    <select name="area_range" class="form-control">
                        <option value="all" selected>Diện tích</option>
                        <option value="100">Dưới 50 m²</option>
                        <option value="100-200">50 m² - 80 m²</option>
                        <option value="200-300">80 m² - 100 m²</option>
                        <option value="300-400">100 m² - 120 m²</option>
                        <option value="400-500">120 m² - 150 m²</option>
                        <option value="500-600">150 m² - 200 m²</option>
                        <option value="600">Trên 200 m²</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pd-5">
                    <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm bất động sản theo tiêu đề, mã, ..." />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mg-top-15">
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i> Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</div>
@push('scripts')

@endpush
