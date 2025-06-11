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
    <div class="container">
        <div class="row">
            <div class="col-md-12 mg-top-20">
                <h6 class="page-description">Danh sách bất động sản bạn đang theo dõi: <span style="color: #ff0000">{{ $properties->count() }}</span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if ($properties->isEmpty())
                    <p class="no-properties">Bạn chưa theo dõi bất động sản nào.</p>
                @endif
            </div>
        </div>
    </div>

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
