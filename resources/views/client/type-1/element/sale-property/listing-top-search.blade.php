<div class="listing-top-search">
    <div class="container">
        <form action="{{ route('search.property') }}" method="GET" class="search-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <select name="type" class="form-control" style="max-width: 180px;">
                            <option value="">Loại hình</option>
                            <option value="Đất bán" {{ (request('type') == 'Đất bán' ? 'selected' : '') }}>Đất bán</option>
                            <option value="Nhà bán" {{ (request('type') == 'Nhà bán' ? 'selected' : '') }}>Nhà bán</option>
                        </select>
                        <select name="price" class="form-select" style="max-width:180px;">
                            <option value="">Khoảng giá</option>
                            <option value="1" {{ (request('price') == 1 ? 'selected' : '') }}>Dưới 1 tỷ</option>
                            <option value="2" {{ (request('price') == 2 ? 'selected' : '') }}>Từ 1 tỷ đến 2 tỷ</option>
                            <option value="3" {{ (request('price') == 3 ? 'selected' : '') }}>Từ 2 tỷ đến 3 tỷ</option>
                            <option value="4" {{ (request('price') == 4 ? 'selected' : '') }}>Trên 3 tỷ</option>
                        </select>
                        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm bất động sản theo tên, mã, ..." value="{{ request('keyword') }}" />
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@push('scripts')

@endpush
