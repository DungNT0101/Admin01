<div class="listing-properties">
    <div class="container">
        <div class="row">
            @if ($properties->isEmpty())
                <div class="col-md-12 text-center">
                    <h3 class="no-properties mg-top-12">Không có bất động sản nào được hiển thị.</h3>
                </div>
            @else
                @foreach ($properties as $item)
                    <div class="col-md-4 pd-20">
                        <div class="property-item">
                            @if(!empty($item->images->first()->path))
                                <div class="property-image position-relative">
                                    @if($item->status == $onSale)
                                        <span class="property-on-sale">Chưa bán</span>
                                    @else
                                        <span class="property-sold">Đã bán</span>
                                    @endif
                                    <a href="{{ route('show.property', ['slug' => $item->slug]) }}">
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
                            <div class="property-details">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{ route('show.property', ['slug' => $item->slug]) }}">
                                            <h3 class="property-title">{{ $item->title }}</h3>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <p class="property-location"><i class="fa fa-map-marker"></i> {{ $item->address }} </p>
                                    </div>
                                    <div class="col-12">
                                        <p class="property-code"><i class="fa fa-hashtag"></i> {{ $item->property_code }} </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="square-meters"><i class="fa fa-ruler-combined"></i>{{ $item->area }} m²</p>
                                    </div>
                                    <div class="col-6">
                                        <a class="direction" href="{{ $item->maps }}" target="_blank"><i class="fa fa-map-marker"></i> Google Map</a>
                                    </div>
                                    <div class="col-6">
                                        <p class="price"><i class="fa fa-dollar-sign"></i> {{ number_format((float) $item->price, 0, ',', '.') }} tỷ</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="price">~ &nbsp; {{ $item->area ? number_format((float) $item->price / (float) $item->area, 0, ',', '.') : '0' }} VNĐ/m²</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="property-user"><i class="fa fa-user"></i> {{ $item->user->full_name}}</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="property-icon fa fa-heart favorited" data-id="{{ $item->id }}"></i>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('show.property', ['slug' => $item->slug])) }}&display=popup">
                                            <i class="property-icon fa fa-share-alt"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 pd-top-10 text-center top-line">
                                        @auth
                                            <a href="tel:{{ $item->phone }}" class="property-phone">{{ $item->phone }}</a>
                                        @else
                                            <p class="property-phone">098********</p>
                                        @endauth
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
