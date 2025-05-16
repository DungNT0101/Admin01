@extends('layouts.client')

@section('title', $product->title)
@section('keywords', $product->keywords)
@section('description', $product->description)

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('home') }}">Trang chủ</a> &nbsp; / &nbsp; <a href="#">Sản phẩm &nbsp; /&nbsp; <a href="#">{{ $product->title }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mg-top-40 mg-bottom-40 product-overview">
        <div class="col-md-4">
            <div class="product-img">
                <img src="{{ asset($product->avatar) }}" alt="{{ $product->title }}">
            </div>
        </div>
        <div class="col-md-5">
            <div class="product-summary">
                <h2 class="product-title">{{ $product->title }}</h2>
                <div class="product-price">
                    @if($product->sale_price > 0)
                        <span class="price-2"> {{ $product->price }} đ</span> - <span class="sale-price">{{ $product->sale_price }} đ</span>
                    @else
                        <span class="price"> {{ $product->price }} đ</span>
                    @endif
                </div>
                <div class="product-hotline">
                    <span class="middle">Hotline: {{ $homeConfig->hotline }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-policy">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('images/icons/star.png') }}" alt="Giao hàng">
                    </div>
                    <div class="col-md-9">
                        <h6>
                            Miễn phí giao hàng toàn quốc.
                        </h6>
                        Áp dụng với đơn hàng trên 500.000đ.
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-3">
                        <img src="{{ asset('images/icons/payment.png') }}" alt="Thanh toán">
                    </div>
                    <div class="col-md-9">
                        <h6>
                            Thanh toán đơn giản.
                        </h6>
                        Qua phương thức chuyển khoản hoặc trực tiếp khi nhận hàng.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row product-menu">
        <div class="col-md-12">
            <a href="#product-info" class="product-menu-active">Giới thiệu sản phẩm</a>
            <a href="#product-image">Hình ảnh sản phẩm</a>
        </div>
    </div>
    <div class="row" id="product-info">
        <div class="col-md-12">
            {!! $product->content !!}
        </div>
    </div>

    <div class="row product-menu">
        <div class="col-md-12">
            <a href="#product-info">Giới thiệu sản phẩm</a>
            <a href="#product-image" class="product-menu-active">Hình ảnh sản phẩm</a>
        </div>
    </div>
    <div class="row" id="product-images">
        <div class="col-md-12">
            {!! $product->images !!}
        </div>
    </div>
</div>

@endsection
{{--  End content  --}}

{{--  Start modals  --}}
@section('modals')

@endsection
{{--  End modals  --}}

{{--  Start scripts  --}}
@push('scripts')

@endpush
{{--  End scripts  --}}
