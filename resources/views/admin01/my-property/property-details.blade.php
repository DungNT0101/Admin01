<div class="property-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="property-images">
                    <div class="main-image mb-3 text-center mg-top-15">
                        <img id="mainPropertyImage" src="{{ asset(optional($property->images->first())->path) }}" alt="{{ $property->title }}" class="img-fluid">
                    </div>
                    <div class="thumb-list d-flex justify-content-center gap-2" id="thumbSlider" style="overflow-x:auto; white-space:nowrap; max-width:100%;">
                        <button type="button" class="btn btn-light btn-sm me-2" id="thumbPrev" style="height:60px;"><i class="fa fa-chevron-left"></i></button>
                        <div class="thumbs-wrapper d-flex" style="overflow-x:auto;scroll-behavior:smooth;">
                            @foreach($property->images as $key => $image)
                                <img src="{{ asset($image->path) }}" alt="{{ $property->title }}" class="img-thumbnail property-thumb" style="width:80px;height:60px;object-fit:cover;cursor:pointer; @if($key==0) border:2px solid #007bff; @endif margin-right:8px;" onclick="showMainImage(this)">
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-light btn-sm ms-2" id="thumbNext" style="height:60px;"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="property-video mb-3">
                    @if($property->video)
                        <h5 class="mg-top-20">Video giới thiệu</h5>
                        <iframe width="100%" height="350" src="{{ asset($property->video) }}" frameborder="0" allowfullscreen></iframe>
                    @else
                        <p class="text-muted">Không có video cho bất động sản này.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="property-title">{{ $property->title }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="property-address"><i class="fa fa-map-marker"></i> {{ $property->address }}</p>
            </div>
            <div class="col-md-2 col-12">
                <p class="property-code"><i class="fa fa-hashtag"></i> Mã: {{ $property->code }}</p>

            </div>
            <div class="col-md-2 col-6">
                <p class="property-area"><i class="fa fa-ruler-combined"></i> Diện tích: {{ $property->area }} m²</p>
            </div>
            <div class="col-md-2 col-6">
                <p class="property-price"><i class="fa fa-dollar-sign"></i> Giá: {{ number_format((float) $property->price, 0, ',', '.') }} tỷ</p>
            </div>
            <div class="col-md-2 col-6">
                <p class="property-price-per-sqm">~ {{ $property->area ? number_format((float) $property->price / (float) $property->area, 0, ',', '.') : '0' }} VNĐ/m²</p>
            </div>
            <div class="col-md-2 col-6">
                <p class="google-map"><i class="fa fa-map"></i> Google Map</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="property-description">{{ $property->content }}</p>
            </div>

        </div>
    </div>
</div>
@push('scripts')
<script>
function showMainImage(thumb) {
    document.getElementById('mainPropertyImage').src = thumb.src;
    document.querySelectorAll('.property-thumb').forEach(function(img) {
        img.style.border = '';
    });
    thumb.style.border = '2px solid #007bff';
}
// Slide logic for thumb-list
const thumbsWrapper = document.querySelector('.thumbs-wrapper');
const thumbPrev = document.getElementById('thumbPrev');
const thumbNext = document.getElementById('thumbNext');
if (thumbPrev && thumbNext && thumbsWrapper) {
    thumbPrev.onclick = function() {
        thumbsWrapper.scrollBy({ left: -120, behavior: 'smooth' });
    };
    thumbNext.onclick = function() {
        thumbsWrapper.scrollBy({ left: 120, behavior: 'smooth' });
    };
}
</script>
@endpush
