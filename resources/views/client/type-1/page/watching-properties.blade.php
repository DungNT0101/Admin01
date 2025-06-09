@extends('layouts.type-1')
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Bất động sản đang theo dõi</h2>
    @if($properties->isEmpty())
        <div class="alert alert-info">Bạn chưa theo dõi bất động sản nào.</div>
    @else
        <div class="row">
            @foreach($properties as $property)
                <div class="col-md-4 mb-4">
                    <div class="card property-card">
                        <a href="{{ route('show.property', $property->slug) }}">
                            <img src="{{ $property->images->first() ? asset($property->images->first()->url) : asset('layout/type-1/images/no-image.png') }}" class="card-img-top" alt="{{ $property->title }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('show.property', $property->slug) }}">{{ $property->title }}</a>
                            </h5>
                            <p class="card-text">{{ number_format($property->price) }} đ</p>
                            <p class="card-text"><small class="text-muted">{{ $property->address }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
