<div class="sorting-properties">
    <div class="container">
        <div class="line-shadow"></div>

        <div class="row">
            <div class="col-md-9">
                <h3 class="section-title">Quản lý bất động sản</h3>
            </div>
            <div class="sorting-options col-md-3 text-right mg-top-20">
                <select class="form-control sort-select">
                    <option value="newest" {{ request('sort', 'newest') == 'newest' ? 'selected' : '' }}>Mới nhất</option>
                    <option value="price-asc" {{ request('sort') == 'price-asc' ? 'selected' : '' }}>Giá thấp đến cao</option>
                    <option value="price-desc" {{ request('sort') == 'price-desc' ? 'selected' : '' }}>Giá cao đến thấp</option>
                    <option value="area-asc" {{ request('sort') == 'area-asc' ? 'selected' : '' }}>Diện tích nhỏ đến lớn</option>
                    <option value="area-desc" {{ request('sort') == 'area-desc' ? 'selected' : '' }}>Diện tích lớn đến nhỏ</option>
                    <option value="price-m2-asc" {{ request('sort') == 'price-m2-asc' ? 'selected' : '' }}>Giá/m² thấp đến cao</option>
                    <option value="price-m2-desc" {{ request('sort') == 'price-m2-desc' ? 'selected' : '' }}>Giá/m² cao đến thấp</option>
                </select>
            </div>
        </div>
    </div>

</div>
@push('scripts')
<script>
    document.querySelector('.sort-select')?.addEventListener('change', function() {
        const url = new URL(window.location.href);
        url.searchParams.set('sort', this.value);
        window.location.href = url.toString();
    });
</script>
@endpush
