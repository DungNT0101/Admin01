@extends('layouts.admin01')

@section('title', 'Thông tin cá nhân')

@section('keywords', 'Thông tin cá nhân, quản lý tài khoản, thay đổi mật khẩu')
{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<div class="page-partner-create">
    <div class="container">
        <div class="row box-top-menu">
            <div class="col-md-12">
                @include('admin01.my-profile.top-menu')
            </div>
        </div>

        <h1 class="page-title">Tạo đối tác mới</h1>
        <p class="page-description">Vui lòng điền đầy đủ thông tin để tạo đối tác mới.</p>
        <form action="{{ route('partner.store') }}" method="POST" class="form-create-partner">
            @csrf
            <div class="form-group">
                <label for="name">Tên đối tác:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
        </form>
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


