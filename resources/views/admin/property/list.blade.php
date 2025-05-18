@extends('layouts.admin')

@section('title', 'Sản Phẩm')

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head">
    <h4>
        <a href={{route('product.index')}}>Danh Sách Sản phẩm</a>
    </h4>
</div>

<div class="box-content">

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('product.create') }}" class="btn btn-primary mg-right-20">Tạo mới</a>
        </div>
    </div>

    <div class="row">
        {{--  List categories  --}}
        <div class="col-md-12 border-bottom">
            <div class="row mg-none mg-top-20">
                <div class="col-md-3 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Tiêu đề</h6>
                </div>
                <div class="col-md-1 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">SP Hot</h6>
                </div>
                <div class="col-md-2 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Giá sản phẩm</h6>
                </div>
                <div class="col-md-2 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Giá sale</h6>
                </div>
                <div class="col-md-2 border-top border-left border-bottom pd-5">
                    <h6 class="mg-none text-center">Ngày cập nhật</h6>
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
                        <div class="col-md-3 border-left border-bottom pd-5">
                            <a href="{{ route('product.edit', $data->id) }}" class="display-block pd-5">{{ $data->title }}</a>
                        </div>
                        <div class="col-md-1 border-left border-bottom pd-5 text-center">
                            @if ($data->hot == 1)
                                <input type="checkbox" class="checkbox" id="hot" name="hot" value="1" checked>
                            @else
                                <input type="checkbox" class="checkbox" id="hot" name="hot" value="1">
                            @endif
                        </div>
                        <div class="col-md-2 border-left border-bottom pd-5 text-center">
                            {{ $data->price }}
                        </div>
                        <div class="col-md-2 border-left border-bottom pd-5 text-center">
                            {{ $data->sale_price }}
                        </div>
                        <div class="col-md-2 border-left border-bottom pd-5 text-center">
                            {{ $data->updated_at }}
                        </div>
                        <div class="col-md-2 border-left border-right border-bottom pd-5 text-center">
                            <a href="{{ route('product.edit', $data->id) }}" class="btn btn-primary mg-right-20">&#9998;</a>
                            <a href="{{ route('product.delete', $data->id) }}" class="btn btn-danger">&#10006;</a>
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
