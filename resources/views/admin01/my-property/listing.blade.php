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
                            @if(@isset($item->images->first()->path))
                                <a href="#" class="property-image">
                                    <img src="{{ asset($item->images->first()->path) }}" alt="Bất động sản 1" class="img-fluid">
                                </a>
                            @endisset
                            <div class="property-details pd-20">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#">
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
                                        <p class="property-code"><i class="fa fa-hashtag"></i>{{ $item->code }} </p>
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
                                        <p class="property-user"><i class="fa fa-user"></i> OneOne</p>
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
                                        <p class="property-user"> 098****</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif

        </div>
    </div>
</div>
