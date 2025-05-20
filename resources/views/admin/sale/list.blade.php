@extends('layouts.admin')

@section('title', 'Nhà Đất Bán')

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head row">
    <div class="col-md-5">
        <h1>
            Nhà Đất Bán
        </h1>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('sale.create') }}" class="btn btn-create mg-right-20 right">Tạo mới</a>
    </div>
</div>

<div class="box-content">



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
