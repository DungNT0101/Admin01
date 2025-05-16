@extends('layouts.client')

@section('title', $news->title)
@section('keywords', $news->keywords)
@section('description', $news->description)

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
                <a href="{{ route('home') }}">Trang chủ</a> &nbsp; / &nbsp; <a href="{{ route('client.news') }}">Tin tức &nbsp; /&nbsp; <a href="#">{{ $news->title }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mg-top-40 mg-bottom-40">
        <div class="col-md-12">
            {!! $news->content !!}
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
