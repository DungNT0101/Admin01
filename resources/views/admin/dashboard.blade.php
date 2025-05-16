@extends('layouts.admin')

@section('title', 'Dashboard')

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head">
    <h4>
        <a href={{route('dashboard')}}>Home</a>
    </h4>
</div>

<div class="box-content">
    <form action="{{ route('dashboard.update') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="keywords">Từ khóa SEO</label>
                        <input type="text" class="form-control" id="keywords" name="keywords" value="{{ $data->keywords }}">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="description">Mô tả</label>
                        <textarea name="description" id="description" rows="3" class="form-control">{!! $data->description !!}</textarea>
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="keywords">Logo (Ảnh png tỉ lệ 1:1, 500x500)</label>
                        <input type="file" class="form-control" id="logo" name="logo" accept="image/png">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="Ginny Shop">
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11">
                        <label for="hotline">Hotline</label>
                        <input type="text" class="form-control" id="hotline" name="hotline" value="{{ $data->hotline }}">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="zalo">Zalo</label>
                        <input type="text" class="form-control" id="zalo" name="zalo" value="{{ $data->zalo }}">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="Facebook">Facebook</label>
                        <input type="text" class="form-control" id="Facebook" name="facebook" value="{{ $data->facebook }}">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="Google">Google</label>
                        <input type="text" class="form-control" id="Google" name="foogle" value="{{ $data->facebook }}">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="keywords">Banner (Ảnh jpg tỉ lệ 3:1, 1500:500, 1800x600)</label>
                        <input type="file" class="form-control" id="banner" name="banner" accept="image/jpg">
                    </div>
                    <div class="col-md-9 mg-top-10">
                        <img src="{{ asset('images/banner/banner.jpg') }}" alt="Banner Ginny Shop">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mg-top-40">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
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
