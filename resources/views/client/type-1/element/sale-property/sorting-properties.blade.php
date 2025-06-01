<div class="sorting-properties">
    <div class="container">
        <div class="line-shadow"></div>
        <div class="row section-header">
            <div class="col-md-12">
                <a href="{{ route('sale.property') }}">
                    <h1 class="section-title">Mua bán bất động sản trên toàn quốc</h1>
                </a>
                <p class="section-subtitle">Hiện có 16.668 bất động sản bán</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <a href="#">68 bất động sản đang theo dõi</a>
            </div>
            <div class="sorting-options col-md-3 text-right">
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
