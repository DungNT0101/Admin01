<div class="listing-top-search">
    <div class="container">
        <form action="{{ route('my-properties.search') }}" method="GET" class="search-form">
            <div class="row pd-top-30">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <select name="type" class="form-control" style="max-width: 180px;">
                            <option value="">Loại hình</option>
                            <option value="Đất bán" {{ request('type') == 'Đất bán' ? 'selected' : '' }}>Đất bán</option>
                            <option value="Nhà bán" {{ request('type') == 'Nhà bán' ? 'selected' : '' }}>Nhà bán</option>
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
