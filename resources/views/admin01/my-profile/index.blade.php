@extends('layouts.admin01')

@section('title', 'Thông tin cá nhân')

@section('keywords', 'Thông tin cá nhân, quản lý tài khoản, thay đổi mật khẩu')
{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<div class="page-my-profile">
    <div class="container">
        @include('admin01.my-profile.top-menu')

        @include('admin01.my-profile.show-alert')

        @include('admin01.my-profile.info')

        @include('admin01.my-profile.change-password')
    </div>
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
