@extends('layouts.type-1')

@section('title', 'Sandat.net - Nhà bán')
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Sandat.net cung cấp danh sách nhà đất bán đa dạng trên toàn quốc, bao gồm căn hộ, nhà phố, biệt thự, đất nền, dự án và nhiều loại hình bất động sản khác. Người dùng dễ dàng tìm kiếm, so sánh và lựa chọn bất động sản phù hợp với nhu cầu an cư hoặc đầu tư.')

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
            ['name' => 'Đất bán', 'url' => route('sale.lands')]
        ]
    ])
    {{--  Top search section  --}}
    @include('client.type-1.element.sale-property.listing-top-search', [
        'type' => $type ?? 'Nhà bán',
    ])

    {{--  Sorting options  --}}
    @include('client.type-1.element.sale-property.sorting-properties')

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
