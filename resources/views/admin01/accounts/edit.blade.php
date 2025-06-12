@extends('layouts.admin01')

@section('title', 'Thay đổi tài khoản')

@section('description', 'Thay đổi thông tin tài khoản. Vui lòng điền đầy đủ thông tin cần thiết.')
{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<div class="page-create-account">
    <div class="container">
        <div class="page-head row">
            <div class="col-md-6">
                <h1 class="mg-top-10">
                    {{ $user->user_name }} - Thay đổi tài khoản
                </h1>
            </div>
        </div>

        <div class="box-content pd-bottom-20">
            <form action="{{ route('accounts.update') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="row">
                    <div class="col-md-6 pd-10">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" name="user_name" value="{{ old('user_name', $user->user_name) }}">
                    </div>
                    <div class="col-md-6 pd-10">
                        <label for="password">Đổi mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                    </div>
                </div>
                <div class="row mg-top-40">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
                    </div>
                </div>
            </form>
        </div>
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


