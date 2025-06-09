@extends('layouts.admin01')

@section('title', 'Sandat.net - Bất động sản bán của tôi')
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Danh sách bất động sản bán của tôi. Quản lý và theo dõi các bất động sản đã đăng bán trên nền tảng sandat.net.')

{{--  Start css  --}}
@push('css')
<style>

</style>
@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<div class="page-listing">
    {{--  Breadcrumb  --}}
    @include('admin01.element.breadcrumb', [
        'breadcrumbs' => [
            ['name' => 'Bất động sản của tôi', 'url' => route('my-properties')]
        ]
    ])

    {{--  Show alerts  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('admin01.element.show-alerts')
            </div>
        </div>
    </div>


    {{--  Top search section  --}}
    @include('admin01.my-property.top-search')

    {{--  Sorting options  --}}
    @include('admin01.my-property.sorting')

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
