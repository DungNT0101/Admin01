<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mg-top-20">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    @foreach ($breadcrumbs as $breadcrumb)
                        <li> &nbsp;/&nbsp; <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 mg-top-20">
                <a href="{{ route('my-properties.show', ['id' => $property->id]) }}" class="btn btn-register"><i class="fas fa-backward"></i> Quay lại</a>
            </div>
        </div>
    </div>
</div>
