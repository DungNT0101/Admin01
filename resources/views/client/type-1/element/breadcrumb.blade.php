<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mg-top-20">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    @foreach ($breadcrumbs as $breadcrumb)
                        <li> &nbsp;/&nbsp; <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
