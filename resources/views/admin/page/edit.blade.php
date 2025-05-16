@extends('layouts.admin')

@section('title', $data->title)

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head">
    <h4>
        <a href={{ route('page.index') }}>Pages</a>
    </h4>
</div>

<div class="box-content">
    <form action="{{ route('page.update') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
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
                    <div class="col-md-6">
                        <label for="keywords">Ảnh đại diện (Tỉ lệ 1:1, 500x500, 600x600 px)</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                    </div>
                </div>

                @if (!empty($data->avatar))
                    <div class="row mg-top-20">
                        <div class="col-md-3">
                            <img src="{{ asset($data->avatar) }}" alt="{{ $data->title }}">
                        </div>
                    </div>
                @endif
            </div>

            <div class="col-md-6">
                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="content">Nội dung (Ảnh tỉ lệ 2:1, 1500:750, 1200:600)</label>
                        <textarea name="content" id="content" cols="100%" rows="5" class="form-control">{!! $data->content !!}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mg-top-40">
            <div class="col-md-12 text-center">
                <a href="{{ route('page.index') }}" class="btn btn-primary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
    @include('admin.elements.tinymce')
@endpush
{{--  End scripts  --}}
