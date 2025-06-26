<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mg-top-20">
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    @foreach ($breadcrumbs as $breadcrumb)
                        <li> &nbsp;/&nbsp; <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 mg-top-20">
                @if($property->status == $onSale)
                    <p class="btn btn-success">Chưa bán</p>
                @else
                    <p class="btn btn-register">Đã bán</p>
                @endif
            </div>
        </div>
    </div>
</div>
