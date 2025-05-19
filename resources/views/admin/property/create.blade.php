@extends('layouts.admin')

@section('title', 'Thêm Mới Nhà Đất Bán')

{{--  Start breadcrumb  --}}

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-head row">
    <div class="col-md-5">
        <h1>
            Thêm mới nhà đất bán
        </h1>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('properties.list', 'sale') }}" class="btn btn-create mg-right-20 right">Danh Sách Nhà Đất Bán</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
<form action="{{ route('property.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="text" name="type" value="sale" hidden>
    <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
    <div class="row">
        <div class="col-md-10">
            <div class="row box-content">
                <div class="col-md-12">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="col-md-12 mg-top-20">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                </div>
                <div class="col-md-12 mg-top-20">
                    <label for="content">Thông tin mô tả</label>
                    <textarea name="content" id="content" cols="100%" class="form-control" rows="10"></textarea>
                </div>
            </div>

            <div class="box-content">
                <h4 class="border-bottom mg-top-20 pd-bottom-20">
                    Thông tin chi tiết
                </h4>
                <div class="row mg-top-20 pd-top-20">
                    <div class="col-md-4">
                        <label for="price">Mức giá (vnd/m2)</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="area">Diện tích (m2)</label>
                        <input type="text" class="form-control" id="area" name="area" value="{{ old('area') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="equivalent_value">Giá trị tương đương (vnd)</label>
                        <input type="text" class="form-control" id="equivalent_value" name="equivalent_value" value="{{ old('equivalent_value') }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6">
                        <label for="type_property">Loại hình</label>
                        <select name="type_property" id="type_property" class="form-control">
                            <option value="">Chọn loại hình</option>
                            @foreach($propertyTypes as $propertyType)
                                <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="law">Pháp lý</label>
                        <select name="law" id="law" class="form-control">
                            <option value="">Chọn pháp lý</option>
                            @foreach($laws as $law)
                                <option value="{{ $law->id }}">{{ $law->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-4">
                        <label for="bedroom">Số phòng ngủ</label>
                        <input type="text" class="form-control" id="bedroom" name="bedroom" value="{{ old('bedroom') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="bathroom">Số phòng tắm</label>
                        <input type="text" class="form-control" id="bathroom" name="bathroom" value="{{ old('bathroom') }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-4">
                        <label for="direction">Hướng</label>
                        <input type="text" class="form-control" id="direction" name="direction" value="{{ old('direction') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="front">Mặt tiền (m)</label>
                        <input type="text" class="form-control" id="front" name="front" value="{{ old('front') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="road">Đường vào (m)</label>
                        <input type="text" class="form-control" id="road" name="road" value="{{ old('road') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 text-center mg-top-20">
            @if(@empty(Auth::user()->avatar))
                <img src="{{ asset('images/icons/user_default.png') }}" alt="{{ Auth::user()->name }}" class="img-avatar center">
            @else
                <img src="{{ asset(Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}" class="img-avatar center">
            @endif
            <h6 class="mg-top-20 text-center">
                {{ Auth::user()->full_name }}
            </h6>
        </div>
    </div>
    <div class="row mg-top-20">
        <div class="col-md-12 mg-top-20 text-right">
            <button type="submit" class="btn btn-create">Thêm mới</button>
        </div>
    </div>
</form>



@endsection
{{--  End content  --}}

{{--  Start modals  --}}
@section('modals')

@endsection
{{--  End modals  --}}

{{--  Start scripts  --}}
{{--  @push('scripts')
    @include('admin.elements.tinymce')
@endpush  --}}
{{--  End scripts  --}}
