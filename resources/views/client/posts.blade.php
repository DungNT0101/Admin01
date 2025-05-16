@extends('layouts.client')

@section('title', $title)
@section('keywords', $keywords)
@section('description', $description)

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
                <a href="{{ route('home') }}">Trang chủ</a> &nbsp; / &nbsp; <a href="#">{{ $title }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mg-top-40 mg-bottom-40">
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
