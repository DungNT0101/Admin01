@extends('layouts.type-1')

@section('title', 'Sandat.net - Trang chủ')
@section('keywords', 'Sandat, bất động sản, nhà đất, mua bán nhà, cho thuê nhà, dự án bất động sản')
@section('description', 'Sandat.net là nền tảng bất động sản hàng đầu tại Việt Nam, được xây dựng với mục tiêu kết nối người mua, người bán và các nhà đầu tư bất động sản một cách nhanh chóng, minh bạch và hiệu quả. Chúng tôi cung cấp hệ thống đăng tin mua bán, cho thuê nhà đất, căn hộ, biệt thự, đất nền, văn phòng và nhiều loại hình bất động sản khác trên khắp các tỉnh thành.')

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
