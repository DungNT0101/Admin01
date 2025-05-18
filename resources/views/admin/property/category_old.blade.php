@extends('layouts.admin')

@section('title', 'Danh Mục Sản Phẩm')

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head">
    <h4>
        <a href={{route('product.categories')}}>Danh Mục Sản phẩm</a>
    </h4>
</div>

<div class="box-content">
    <form action="{{ route('product.category.store') }}" method="POST">
        @csrf
        <div class="row">

            {{--  List categories  --}}
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title-2">Danh sách</h5>
                    </div>
                </div>

                <div class="row mg-none mg-top-20">
                    <div class="col-md-2 border-top border-left border-bottom pd-5">
                        <h6 class="mg-none text-center">STT</h6>
                    </div>
                    <div class="col-md-6 border-top border-left border-bottom pd-5">
                        <h6 class="mg-none text-center">Tiêu đề</h6>
                    </div>
                    <div class="col-md-4 border-top border-left border-bottom border-right pd-5">
                        <h6 class="mg-none text-center">Chỉnh Sửa</h6>
                    </div>
                </div>

                @php
                    $i = 0;
                @endphp
                @foreach ($data as $data)
                    @php
                        $i++
                    @endphp
                    <div class="row mg-none">
                        <div class="col-md-2 border-left border-bottom pd-5">
                            <p class="mg-none text-center">{{ $i }}</p>
                        </div>
                        <div class="col-md-6 border-left border-bottom pd-5">
                            <a href="#" class="mg-none ">{{ $data->title }}</a>
                        </div>
                        <div class="col-md-4 border-left border-bottom border-right pd-5 text-center">
                            <a href="#" class="btn btn-primary">&#9998;</a>
                            <a href="#" class="btn btn-danger">&#10006;</a>
                        </div>
                    </div>
                @endforeach

            </div>

            {{--  Add category  --}}
            <div class="col-md-6 border-left">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title-2">Thêm Mới</h5>
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="keywords">Từ khóa SEO</label>
                        <input type="text" class="form-control" id="keywords" name="keywords" >
                    </div>
                </div>

                <div class="row mg-top-20">
                    <div class="col-md-11">
                        <label for="description">Mô tả</label>
                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row mg-top-40">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </div>
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
