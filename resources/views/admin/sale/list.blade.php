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
        {{--  List properties  --}}
        <div class="col-md-12 header-list">
            <div class="row">
                <div class="col-md-4">
                    <h6 class="">Tin Đăng</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-center">Mã Tin</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-center">Giá Bất Động Sản</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-center">Chỉnh Sửa</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-center">Ngày cập nhật</h6>
                </div>
            </div>
        </div>
    </div>
    @if ($dataList->count() > 0)
        @foreach ($dataList as $item)
            <div class="row property-item">
                <div class="col-md-1">
                    @if(isset($item->images[0]->path))
                        <a href="#">
                            <div class="property-image">
                                <img src="{{ asset($item->images[0]->path) }}" alt="{{ $item->title }}" class="img-fluid">
                            </div>
                        </a>
                    @endif
                </div>
                <div class="col-md-3">
                    <div class="property-info">
                        <a href="#">
                            <h5 class="property-title">{{ $item->title }}</h5>
                        </a>
                        <p class="property-address">{{ $item->address }}</p>
                        <p class="property-description">{{ Str::limit($item->description, 100) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="property-code text-center">
                        <a href="#">
                            <p class="property-code">B-000{{ $item->id }}</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <span class="property-price">{{ $item->price }}</span>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#" class="action-edit">Chỉnh sửa</a>
                </div>
                <div class="col-md-2 text-center">
                    <span class="property-updated-at">{{ $item->updated_at->format('d/m/Y H:i') }}</span>
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-md-12 text-center no-data">
                <p>Không có dữ liệu.</p>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 text-center mg-top-20 main-paginate">
            {{ $dataList->links() }}
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
