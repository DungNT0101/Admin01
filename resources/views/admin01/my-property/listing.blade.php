<div class="listing-properties">
    <div class="container">
        <div class="row">
            @if ($properties->isEmpty())
                <div class="col-md-12 text-center">
                    <h3 class="no-properties">Bạn chưa có bất động sản nào được đăng bán.</h3>
                </div>
            @else
                @foreach ($properties as $item)
                    <div class="col-md-4 pd-10">
                        <div class="property-item">
                            @if(!empty($item->images->first()->path))
                                <div class="property-image position-relative">
                                    @if($item->status == $sold)
                                        <span class="property-sold">Đã bán</span>
                                    @else
                                        <span class="property-on-sale">Chưa bán</span>
                                    @endif
                                    <a href="{{ route('my-properties.show', ['id' => $item->id]) }}">
                                        <img src="{{ asset($item->images->first()->path) }}" alt="{{ $item->title }}" class="img-fluid">
                                    </a>
                                </div>
                            @else
                                <div class="property-image position-relative">
                                    <a href="{{ route('show.property', ['slug' => $item->slug]) }}">
                                        <img src="{{ asset('layout/type-1/images/no-image.png') }}" alt="No Image" class="img-fluid">
                                    </a>
                                </div>
                            @endif
                            <div class="property-details pd-20">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{ route('my-properties.show', ['id' => $item->id]) }}" class="property-link">
                                            <h3 class="property-title">{{ $item->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="property-location"><i class="fa fa-map-marker"></i> {{ $item->address }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="property-code"><i class="fa fa-hashtag"></i>{{ $item->property_code }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mg-top-10">
                                        <p class="square-meters"><i class="fa fa-ruler-combined"></i>{{ $item->area }} m²</p>
                                    </div>
                                    <div class="col-6 mg-top-10">
                                        <a class="direction" href="{{ $item->maps }}" target="_blank"><i class="fa fa-map-marker"></i> Google Map</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mg-top-10">
                                        <p class="price mg-top-10"><i class="fa fa-dollar-sign"></i> {{ number_format((float) $item->price, 0, ',', '.') }} tỷ</p>
                                    </div>
                                    <div class="col-6 mg-top-10">
                                        <p class="price mg-top-10">~ &nbsp; {{ $item->area ? number_format((float) $item->price / (float) $item->area, 0, ',', '.') : '0' }} VNĐ/m²</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 mg-top-10 top-line pd-top-10">
                                        <p class="property-user"><i class="fa fa-user"></i> {{ Auth::user()->full_name }}</p>
                                    </div>
                                    <div class="col-4 mg-top-10 top-line pd-top-10">
                                        <i class="property-icon fa fa-heart favorited" data-id="1"></i>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://sandat.net/&display=popup">
                                            <i class="property-icon fa fa-share-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pd-top-10 text-center top-line">
                                        <p class="property-phone"><i class="fa fa-phone"></i> {{ $item->phone }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pd-top-10 text-center top-line">
                                        <a href="{{ route('my-properties.edit', ['id' => $item->id]) }}" class="property-edit btn btn-register"><i class="fa fa-pencil-alt"></i> Chỉnh sửa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>
        <div class="row mg-top-20">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <nav aria-label="Page navigation">
                    {{ $properties->links('vendor.pagination.bootstrap-4') }}
                </nav>
            </div>
        </div>
    </div>
</div>
