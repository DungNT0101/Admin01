@extends('layouts.admin01')

@section('title', 'Thêm Mới Nhà Đất Bán')
@section('description', 'Sandat.net - Đăng tin nhà đất bán mới nhất. Cung cấp thông tin chi tiết về nhà đất, giá cả, vị trí và các tiện ích đi kèm.')

{{--  Start breadcrumb  --}}

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')

<div class="page-body">
    <div class="container">
        @include('admin01.element.breadcrumb', [
            'breadcrumbs' => [
                ['name' => 'Thêm mới nhà đất bán', 'url' => route('sale.create')]
            ]
        ])
        <div class="page-head row">
            <div class="col-md-12">
                <h1>
                    Thêm mới nhà đất bán
                </h1>
            </div>
        </div>
        <div class="row show-alerts">
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
        <form action="{{ route('sale.store') }}" enctype="multipart/form-data" method="POST" name="formSale">
            @csrf
            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
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
                    <label for="type_property">Loại hình</label>
                    <select name="type_property" id="type_property" class="form-control">
                        <option value="">Chọn loại hình</option>
                        <option value="Nhà đất">Nhà đất</option>
                        <option value="Chung cư">Chung cư</option>
                        <option value="Biệt thự">Biệt thự</option>
                        <option value="Đất nền">Đất nền</option>
                    </select>
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
                    <div class="col-md-4 pd-10">
                        <label for="province">Tỉnh / Thành phố</label>
                        <select name="province" id="province" class="form-control">
                            <option value="">Chọn tỉnh / thành phố</option>
                            @foreach($cities as $city)
                                <option value="{{ $city }}">{{ $city }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="price">Mức giá (bằng chữ)</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="equivalent_value">Mức giá (bằng số)</label>
                        <input type="number" class="form-control" id="equivalent_value" name="equivalent_value" value="{{ old('equivalent_value') }}">
                    </div>

                </div>
                <div class="row mg-top-20">
                    <div class="col-md-4 pd-10">
                        <label for="area">Diện tích (m2)</label>
                        <input type="text" class="form-control" id="area" name="area" value="{{ old('area') }}">
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="price_per_sqm">Giá / (m2)</label>
                        <input type="number" class="form-control" id="price_per_sqm" name="price_per_sqm" value="{{ old('price_per_sqm') }}">
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="maps">Google Maps</label>
                        <input type="text" class="form-control" id="maps" name="maps" value="{{ old('maps') }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-4 pd-10">
                        <label for="law">Pháp lý</label>
                        <select name="law" id="law" class="form-control">
                            <option value="">Chọn pháp lý</option>
                            @foreach($laws as $law)
                                <option value="{{ $law->id }}">{{ $law->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="bedroom">Số phòng ngủ</label>
                        <input type="text" class="form-control" id="bedroom" name="bedroom" value="{{ old('bedroom') }}">
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="bathroom">Số phòng tắm / Vệ sinh</label>
                        <input type="text" class="form-control" id="bathroom" name="bathroom" value="{{ old('bathroom') }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-4 pd-10">
                        <label for="direction">Hướng</label>
                        <select name="direction" id="direction" class="form-control">
                            <option value="">Chọn hướng</option>
                            <option value="Bắc">Bắc</option>
                            <option value="Nam">Nam</option>
                            <option value="Đông">Đông</option>
                            <option value="Tây">Tây</option>
                            <option value="Đông Bắc">Đông Bắc</option>
                            <option value="Tây Bắc">Tây Bắc</option>
                            <option value="Đông Nam">Đông Nam</option>
                            <option value="Tây Nam">Tây Nam</option>
                        </select>
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="front">Mặt tiền (m)</label>
                        <input type="text" class="form-control" id="front" name="front" value="{{ old('front') }}">
                    </div>
                    <div class="col-md-4 pd-10">
                        <label for="road">Đường vào (m)</label>
                        <input type="text" class="form-control" id="road" name="road" value="{{ old('road') }}">
                    </div>
                </div>
                {{--  <div class="row mg-top-20">
                    <div class="col-md-12 mg-top-10 text-center">
                        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
                    </div>
                </div>  --}}
            </div>

            <div class="box-content mg-top-20">
                <h4 class="border-bottom mg-top-20 pd-bottom-20">
                    Thư viện hình ảnh (Gallery)
                </h4>
                <div class="row mg-top-20">
                    <div class="col-md-12">
                        <label for="gallery_images">Thêm hình ảnh vào thư viện</label>
                        <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple accept="image/*" onchange="handleGalleryFiles(event)">
                        <div id="gallery-preview-container" class="row mt-3"></div>
                    </div>
                </div>
                {{--  <div class="row mg-top-20">
                    <div class="col-md-12 mg-top-10 text-center">
                        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
                    </div>
                </div>  --}}
            </div>

            <div class="box-content mg-top-20">
                <h4 class="border-bottom mg-top-20 pd-bottom-20">
                    Video
                </h4>
                <div class="row mg-top-20">
                    <div class="col-md-12">
                        <label for="video">Thêm video</label>
                        <input type="file" class="form-control" id="video" name="video" accept="video/*">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-12 mg-top-10 text-center">
                        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
                    </div>
                </div>
            </div>
        </form>
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
<script>
function previewImages(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('preview-container');
    previewContainer.innerHTML = '';
    if (files) {
        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.className = 'col-md-2 mb-2';
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-thumbnail';
                    img.style.maxWidth = '100%';
                    img.style.height = '100px';
                    col.appendChild(img);
                    previewContainer.appendChild(col);
                };
                reader.readAsDataURL(file);
            }
        });
    }
}
let galleryFiles = [];

function handleGalleryFiles(event) {
    const files = Array.from(event.target.files);
    galleryFiles = galleryFiles.concat(files);
    renderGalleryPreview();
}

function removeGalleryImage(index) {
    galleryFiles.splice(index, 1);
    renderGalleryPreview();
}

function renderGalleryPreview() {
    const previewContainer = document.getElementById('gallery-preview-container');
    previewContainer.innerHTML = '';
    galleryFiles.forEach((file, idx) => {
        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const col = document.createElement('div');
                col.className = 'col-md-2 mb-2 position-relative';
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-thumbnail';
                img.style.maxWidth = '100%';
                img.style.height = '100px';
                // Remove button
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'btn btn-danger btn-sm position-absolute';
                btn.style.top = '5px';
                btn.style.right = '10px';
                btn.innerHTML = '&times;';
                btn.onclick = function() { removeGalleryImage(idx); };
                col.appendChild(img);
                col.appendChild(btn);
                previewContainer.appendChild(col);
            };
            reader.readAsDataURL(file);
        }
    });
    updateGalleryInput();
}

function updateGalleryInput() {
    // Remove the old input
    const oldInput = document.getElementById('gallery_images');
    const parent = oldInput.parentNode;
    const newInput = oldInput.cloneNode();
    newInput.value = '';
    newInput.files = null;
    newInput.onchange = handleGalleryFiles;
    parent.replaceChild(newInput, oldInput);
    // Create a DataTransfer to update the input's files
    const dataTransfer = new DataTransfer();
    galleryFiles.forEach(file => dataTransfer.items.add(file));
    newInput.files = dataTransfer.files;
}
</script>
@endpush
{{--  End scripts  --}}
