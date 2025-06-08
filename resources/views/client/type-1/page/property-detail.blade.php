@extends('layouts.admin01')

@section('title', 'Sandat.net - '. $property->title)
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', $property->description)

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
    @include('client.type-1.element.property-detail.breadcrumb', [
        'breadcrumbs' => [
            ['name' => $property->title, 'url' => route('my-properties.show', ['id' => $property->id])]
        ]
    ])
    {{--  Property details section  --}}
    @include('client.type-1.element.property-detail.property-details')


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
