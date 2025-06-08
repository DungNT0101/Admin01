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
    {{--  Breadcrumb  --}}
    @include('client.type-1.element.breadcrumb', [
        'breadcrumbs' => [
            ['name' => 'Tìm kiếm', 'url' => route('search.property')]
        ]
    ])
    {{--  Top search section  --}}
    @include('client.type-1.element.sale-property.listing-top-search')

    {{--  Sorting options  --}}
    {{--  @include('client.type-1.element.sale-property.sorting-properties')  --}}

    {{--  Listing properties  --}}
    @include('client.type-1.element.sale-property.listing-properties')

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
