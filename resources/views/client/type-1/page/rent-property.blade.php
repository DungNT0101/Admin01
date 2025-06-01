@extends('layouts.type-1')

@section('title', 'Sandat.net - Bất động sản cho thuê')
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Sandat.net cung cấp danh sách nhà đất cho thuê đa dạng trên toàn quốc, bao gồm căn hộ cho thuê, nhà phố cho thuê, biệt thự cho thuê và nhiều loại hình bất động sản cho thuê khác. Người dùng dễ dàng tìm kiếm, so sánh và lựa chọn bất động sản cho thuê phù hợp với nhu cầu an cư hoặc đầu tư.')

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
            ['name' => 'Bất động sản cho thuê', 'url' => route('rent.property')]
        ]
    ])
    {{--  Top search section  --}}
    @include('client.type-1.element.rent-property.listing-top-search')

    {{--  Sorting options  --}}
    @include('client.type-1.element.rent-property.sorting-properties')

    {{--  Listing properties  --}}
    @include('client.type-1.element.rent-property.listing-properties')

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
