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

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('home') }}">Trang chủ</a> &nbsp; / &nbsp; <a href="#">{{ $category->title }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mg-top-40 mg-bottom-40">
        @foreach ($products as $item)
            @include('client.elements.product-item', ['item' => $item])
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
