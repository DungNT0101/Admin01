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

    <div class="row">
        {{--  List categories  --}}
        <div class="col-md-12 border-bottom">
            <div class="row mg-none mg-top-20">
                <div class="col-md-3 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Tiêu đề</h6>
                </div>
                <div class="col-md-3 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Từ khóa</h6>
                </div>
                <div class="col-md-4 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Mô tả</h6>
                </div>
                <div class="col-md-2 border-top border-left border-bottom border-right pd-5">
                    <h6 class="mg-none text-center">Chỉnh Sửa</h6>
                </div>
            </div>

            @foreach ($dataList as $data)
                <form action="{{ route('product.category.update') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $data->id }}" name="id">
                    <div class="row mg-none">
                        <div class="col-md-3 border-left  pd-5">
                            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                        </div>
                        <div class="col-md-3 border-left pd-5">
                            <input type="text" class="form-control" id="keywords" name="keywords" value="{{ $data->keywords }}">
                        </div>
                        <div class="col-md-4 border-left pd-5">
                            <textarea name="description" id="description" rows="2" class="form-control">{{ $data->description }}</textarea>
                        </div>
                        <div class="col-md-2 border-left border-right pd-5 text-center">
                            <button type="submit" class="btn btn-primary">&#10004;</button>
                            <a href="{{ route('product.category.delete', [$data->id]) }}" class="btn btn-danger">&#10006;</a>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center mg-top-20 main-paginate">
                {{ $dataList->links() }}
            </div>
        </div>

        <div class="col-md-12 border-top-2 mg-top-40"></div>


        {{--  Add category  --}}
        <div class="col-md-8">
            <form action="{{ route('product.category.store') }}" method="POST">
                @csrf
                <div class="row mg-top-20">
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
                        <textarea name="description" id="description" rows="2" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row mg-top-40">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
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
