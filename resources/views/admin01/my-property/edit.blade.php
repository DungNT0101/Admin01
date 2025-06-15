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

<div class="page-body create-property">
    <div class="container">
        @include('admin01.my-property.breadcrumb-show', [
            'breadcrumbs' => [
                ['name' => $property->title, 'url' => route('my-properties.edit', ['id' => $property->id])]
            ]
        ])
        <div class="page-head row">
            <div class="col-md-12">
                <h1>
                    {{ $property->title }}
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
        <form action="{{ route('my-properties.update', ['id' => $property->id]) }}" enctype="multipart/form-data" method="POST" name="formSale">
            @csrf
            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
            <div class="row box-content">
                <div class="col-md-12 mg-top-20">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $property->address) }}" required>
                </div>
            </div>

            <div class="box-content mg-top-20">
                <h4 class="border-bottom mg-top-20 pd-bottom-20">
                    Thư viện hình ảnh (Gallery)
                </h4>
                <div class="row mg-top-20">
                    <div class="col-md-12">
                        <label for="gallery_images">Hình ảnh</label>
                        <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple accept="image/*" onchange="handleGalleryFiles(event)">
                        <div id="gallery-preview-container" class="row mt-3"></div>
                        <div class="row mt-2" id="property-images-list">
                            @if($property->images && count($property->images))
                                @foreach($property->images as $img)
                                    <div class="col-md-2 mb-2 position-relative property-thumb" id="property-image-{{ $img->id }}">
                                        <img src="/{{ $img->path }}" class="img-thumbnail" style="max-width:100%;height:100px;">
                                        <button type="button" class="btn btn-danger btn-sm position-absolute" style="top:5px;right:10px;z-index:2;" onclick="deletePropertyImage({{ $img->id }})">&times;</button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-content mg-top-20">
                <h4 class="border-bottom mg-top-20 pd-bottom-20">
                    Video
                </h4>
                <div class="row mg-top-20">
                    <div class="col-md-12">
                        <label for="video">Thêm video</label>
                        <input type="file" class="form-control" id="video" name="video" accept="video/*" onchange="previewVideo(event)">
                        <div id="video-preview" class="mt-3">
                            @if($property->video)
                                <div id="property-video-preview">
                                    <video src="/{{ $property->video }}" controls style="max-width:100%;max-height:350px;"></video>
                                    <button type="button" class="btn btn-danger btn-sm mt-2 d-block" onclick="deletePropertyVideo({{ $property->id }})">Xóa video</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row box-content mg-top-20">
                <div class="col-md-12 type">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="type_land" value="Đất bán" {{ old('type', $property->type) == 'Đất bán' ? 'checked' : '' }}>
                        <label class="form-check-label" for="type_land">Đất bán</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="type_house" value="Nhà bán" {{ old('type', $property->type) == 'Nhà bán' ? 'checked' : '' }}>
                        <label class="form-check-label" for="type_house">Nhà bán</label>
                    </div>
                </div>
            </div>

            <div class="row box-content mg-top-20">
                <div class="col-6 col-md-4 pd-10">
                    <label for="area">Diện tích (m2)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="area" name="area" value="{{ old('area', $property->area) }}" required>
                        <span class="input-group-text">m<sup>2</sup></span>
                    </div>
                </div>
                <div class="col-6 col-md-4 pd-10">
                    <label for="front">Chiều ngang (m)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="front" name="front" value="{{ old('front', $property->front) }}" required>
                        <span class="input-group-text">m</span>
                    </div>
                </div>
                <div class="col-md-4 pd-10 col-12">
                    <label for="price">Tổng giá bán nguyên lô (căn)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price', number_format((float) $property->price, 0, ',', '.')) }}" oninput="formatPriceInput(this)" required>
                        <span class="input-group-text">vnđ</span>
                    </div>
                </div>
            </div>

            <div class="row box-content mg-top-20">
                <div class="col-md-12">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $property->title) }}" required>
                </div>
            </div>

            <div class="row box-content">
                <div class="col-md-12 mg-top-20">
                    <label for="content">Thông tin mô tả</label>
                    <textarea name="content" id="content" cols="100%" class="form-control" rows="10" required>{{ old('content', $property->content) }}</textarea>
                </div>
            </div>

            <div class="row box-content mg-top-20">
                <div class="col-md-3 type mg-top-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="owner_type" id="type_sale" value="Môi giới" {{ old('owner_type', $property->owner_type) == 'Môi giới' ? 'checked' : '' }}>
                        <label class="form-check-label" for="type_sale">Môi giới</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="owner_type" id="type_landlord" value="Chủ nhà" {{ old('owner_type', $property->owner_type) == 'Chủ nhà' ? 'checked' : '' }}>
                        <label class="form-check-label" for="type_landlord">Chủ nhà</label>
                    </div>
                </div>
                <div class="col-md-3 type mg-top-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status_sale" value="on_sale" {{ old('status', $property->status) == 'on_sale' ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_sale">Chưa bán</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status_sold" value="sold" {{ old('status', $property->status) == 'sold' ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_sold">Đã bán</label>
                    </div>
                </div>
                <div class="col-md-3 type mg-top-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hot" id="hot" value="1" {{ old('hot', $property->hot) == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="hot">Bất động sản nổi bật</label>
                    </div>

                </div>
            </div>
            <div class="row box-content">
                <div class="col-md-12 mg-top-20">
                    <label for="content">Ghi chú</label>
                    <textarea name="my_note" id="myNote" cols="100%" class="form-control" rows="6" required>{{ old('my_note', $property->my_note) }}</textarea>
                </div>
            </div>
            <div class="row box-content mg-top-20">
                <div class="col-md-3 mg-top-10 pd-right-10">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $property->phone) }}" required>
                </div>
                <div class="col-md-3 mg-top-10 pd-right-10">
                    <label for="property_code">Mã tin</label>
                    <input type="text" class="form-control" id="property_code" name="property_code" value="{{ old('property_code', $property->property_code) }}" required>
                </div>
                <div class="col-md-6 mg-top-10 pd-right-10">
                    <label for="maps">Bản đồ</label>
                    <input type="text" class="form-control" id="maps" name="maps" value="{{ old('maps', $property->maps) }}"  required>
                </div>
            </div>

            <div class="row box-content mg-top-20">
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

function previewVideo(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('video-preview');
    previewContainer.innerHTML = '';
    // Remove old remove button if exists
    const oldBtn = document.getElementById('remove-video-btn');
    if (oldBtn) oldBtn.remove();
    if (file && file.type.startsWith('video/')) {
        const video = document.createElement('video');
        video.controls = true;
        video.style.maxWidth = '100%';
        video.style.maxHeight = '350px';
        video.src = URL.createObjectURL(file);
        previewContainer.appendChild(video);
        // Add remove button
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'btn btn-danger btn-sm mt-2';
        btn.id = 'remove-video-btn';
        btn.innerText = 'Xóa video';
        btn.onclick = function() { removeVideo(); };
        previewContainer.appendChild(btn);
    }
}

function removeVideo() {
    const videoInput = document.getElementById('video');
    videoInput.value = '';
    // Remove preview and button
    const previewContainer = document.getElementById('video-preview');
    previewContainer.innerHTML = '';
}

function formatPriceInput(input) {
    let value = input.value.replace(/\D/g, '');
    if (value) {
        value = parseInt(value, 10).toLocaleString('vi-VN');
    }
    input.value = value;
}

function deletePropertyImage(imageId) {
    //if (!confirm('Bạn có chắc muốn xóa ảnh này?')) return;
    fetch('/admin/my-properties/image/' + imageId + '/delete', {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json',
        },
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            const imgDiv = document.getElementById('property-image-' + imageId);
            if (imgDiv) imgDiv.remove();
        } else {
            alert('Xóa ảnh thất bại!');
        }
    })
    .catch(() => alert('Có lỗi xảy ra khi xóa ảnh!'));
}

function deletePropertyVideo(propertyId) {
    //if (!confirm('Bạn có chắc muốn xóa video này?')) return;
    fetch('/admin/my-properties/video/' + propertyId + '/delete', {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json',
        },
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            const videoDiv = document.getElementById('property-video-preview');
            if (videoDiv) videoDiv.remove();
        } else {
            alert('Xóa video thất bại!');
        }
    })
    .catch(() => alert('Có lỗi xảy ra khi xóa video!'));
}
</script>
@endpush
{{--  End scripts  --}}
