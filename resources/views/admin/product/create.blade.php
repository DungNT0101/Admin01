@extends('layouts.admin')

@section('title', 'Product')

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head">
    <h4>
        <a href={{route('product.index')}}>Sản Phẩm</a>
    </h4>
</div>

<div class="box-content">
    <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="keywords">Từ khóa SEO</label>
                        <input type="text" class="form-control" id="keywords" name="keywords">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="description">Mô tả</label>
                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="keywords">Ảnh đại diện (Tỉ lệ 1:1, 500x500, 600x600 px)</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="content">Giới thiệu sản phẩm</label>
                        <textarea name="content" id="content" cols="100%" rows="5" class="form-control"></textarea>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11">
                        <label for="price">Giá</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="sale-price">Giá sau giảm</label>
                        <input type="text" class="form-control" id="sale-price" name="sale_price">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="category">Danh mục sản phẩm</label>
                        <select name="category" id="category" class="form-control">
                            <option value=""></option>
                            @if(!empty($categories))
                                @foreach ($categories as $data)
                                    <option value="{{ $data->id }}">{{ $data->title }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-5">
                        <label for="home">Hiển thị trang chủ</label>
                        <input type="checkbox" class="checkbox" id="home" name="home" value="1">
                    </div>
                    <div class="col-md-5">
                        <label for="hot">Sản phẩm  bán chạy</label>
                        <input type="checkbox" class="checkbox" id="hot" name="hot" value="1">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="images">Hình ảnh (Ảnh tỉ lệ 2:1, 1500:750, 1200:600)</label>
                        <textarea name="images" id="images" cols="100%" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mg-top-40">
            <div class="col-md-12 text-center">
                <a href="{{ route('product.index') }}" class="btn btn-primary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Tạo mới</button>
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
