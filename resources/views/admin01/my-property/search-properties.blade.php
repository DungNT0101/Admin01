@extends('layouts.type-1')

@section('title', 'Sandat.net - Tìm kiếm bất động sản')
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Kết quả tìm kiếm bất động sản trên Sandat.net. Tìm kiếm nhanh chóng và hiệu quả với các tiêu chí phù hợp nhu cầu của bạn.')

{{--  Start css  --}}
@push('css')
<style>

</style>
@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<div class="line-shadow"></div>

<div class="page-listing">

    {{--  Top search section  --}}
    @include('admin01.my-property.top-search')

    {{--  Sorting options  --}}
    {{--  @include('client.type-1.element.sale-property.sorting-properties')  --}}

    {{--  Listing properties  --}}
    @include('admin01.my-property.listing')

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
