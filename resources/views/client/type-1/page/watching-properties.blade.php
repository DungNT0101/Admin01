@extends('layouts.type-1')

@section('title', 'Sandat.net - Theo dõi bất động sản')
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Sandat.net  Theo dõi bất động sản - Cập nhật thông tin bất động sản bạn quan tâm')

{{--  Start meta tags  --}}

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
