@extends('layouts.client')

@section('title', $page->title)
@section('keywords', $page->keywords)
@section('description', $page->description)

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
                <a href="{{ route('home') }}">Trang chủ</a> &nbsp; / &nbsp; <a href="#">{{ $page->title }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mg-top-40 mg-bottom-40">
        {!! $page->content !!}
    </div>

    @if ($page->title == 'Liên Hệ')
        <div class="mg-bottom-40">
            <h5>Bản đồ</h5>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3996191695023!2d105.7766812!3d20.9766124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134532c2cf698df%3A0x509e8603b7f0a778!2zMTIgUC4gQ-G6p3UgQW0sIFbhuqFuIFBow7pjLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWk!5e0!3m2!1sen!2s!4v1718508172114!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    @endif
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
