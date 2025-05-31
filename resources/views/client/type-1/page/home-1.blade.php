@extends('layouts.type-1')

@section('title', 'Sandat.net - Trang chủ')

{{--  Start breadcrumb  --}}
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')

{{--  Start css  --}}
@push('css')
<style>

</style>
@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

@include('client.type-1.home.banner')

@include('client.type-1.home.popular-places')

@include('client.type-1.home.featured-properties')

{{--  @include('client.type-1.home.rent-properties')  --}}

@include('client.type-1.home.why-choose-us')

@include('client.type-1.home.clients-testimonials')

@include('client.type-1.home.our-partners')


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
