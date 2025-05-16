@extends('layouts.client')

@section('title', $homeConfig->title)
@section('keywords', $homeConfig->keywords)
@section('description', $homeConfig->description)

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="banner">
                <img src="{{ asset('images/banner/banner.jpg') }}" alt="Banner 1">
            </div>
        </div>
    </div>

    <div class="row mg-top-40 mg-bottom-40">
        <div class="col-md-12 border-bottom">
            <h3 class="home-title">
                Sản phẩm bán chạy
            </h3>
        </div>
        @foreach ($hotProducts as $item)
            @include('client.elements.product-item', ['item' => $item])
        @endforeach
    </div>

    @foreach ($categories as $category)
        <div class="row mg-top-40 mg-bottom-40">
            <div class="col-md-12 border-bottom">
                <h3 class="home-title">
                    {{ $category->title }}
                </h3>
            </div>
            @foreach ($products as $key => $item)
                @if($item->category_id == $category->id)
                    @include('client.elements.product-item', ['item' => $item])

                    @php
                        unset($products[$key]);
                    @endphp
                @endif
            @endforeach
        </div>
    @endforeach

    <div class="row mg-top-40 mg-bottom-40">
        <div class="col-md-12 border-bottom">
            <h3 class="home-title">
                Tin Tức
            </h3>
        </div>
        @foreach ($news as $item)
            @include('client.elements.news-item', ['item' => $item])
        @endforeach
    </div>

    <div class="row mg-top-40 mg-bottom-40">
        <div class="col-md-12 border-bottom">
            <h3 class="home-title">
                Kiến Thức
            </h3>
        </div>
        @foreach ($posts as $item)
            @include('client.elements.post-item', ['item' => $item])
        @endforeach
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
