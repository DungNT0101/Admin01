@extends('layouts.admin')

@section('title', 'Thông tin cá nhân')

{{--  Start breadcrumb  --}}

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head row">
    <div class="col-md-6">
        <h1>
            Thông tin cá nhân
        </h1>
    </div>
</div>

<div class="box-content">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('my-profile.update') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3">
                @if(@empty($data->avatar))
                    <img src="{{ asset('images/icons/user_default.png') }}" alt="{{ $data->user_name }}" class="img-avatar">
                @else
                    <img src="{{ asset($data->avatar) }}" alt="{{ $data->user_name }}" class="img-avatar">
                @endif
                <label for="avatar" class="mg-top-20">Ảnh đại diện (Tỉ lệ 1:1, 500x500, 600x600 px)</label>
                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $data->user_name }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" disabled>
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="fullname">Họ tên</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $data->full_name }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-12">
                        <label for="bio">Giới thiệu</label>
                        <textarea class="form-control" id="bio" name="bio" rows="6">{{ $data->bio }}</textarea>
                    </div>

                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6">
                        <label for="zalo">Zalo</label>
                        <input type="text" class="form-control" id="zalo" name="zalo" value="{{ $data->zalo }}">
                    </div>
                    <div class="col-md-6">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $data->facebook }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6">
                        <label for="youtube">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $data->youtube }}">
                    </div>
                    <div class="col-md-6">
                        <label for="tiktok">TikTok</label>
                        <input type="text" class="form-control" id="tiktok" name="tiktok" value="{{ $data->tiktok }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mg-top-40">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
            </div>
        </div>
    </form>
</div>

<div class="box-content">
    <form action="{{ route('my-profile.update-password') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <h5 class="pd-10">Đổi Mật Khẩu</h5>
            </div>
            <div class="col-md-9">
                <div class="row mg-top-20">
                    <div class="col-md-6">
                        <label for="old_password">Nhập khẩu cũ</label>
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Nhập mật khẩu cũ">
                    </div>
                    <div class="col-md-6">
                        <label for="new_password">Nhập khẩu mới</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nhập mật khẩu mới">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mg-top-40">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">Lưu Mật Khẩu</button>
            </div>
        </div>
    </form>
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
