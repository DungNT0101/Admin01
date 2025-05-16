<!-- resources/views/clients/elements/top-header.blade.php -->

<div class="top-header display-block" id="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="{{ $homeConfig->title }}" class="w-60">
                </a>
            </div>
            <div class="col-md-4 top-box">
                <form>
                    <div class="input-group">
                      <input type="text" class="form-control" >
                      {{--  <span class="input-group-text">Tìm kiếm</span>  --}}
                      <i class="material-icons icon-search">search</i>
                    </div>
                  </form>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-3 top-box text-center">
                <div class="top-hotline" >
                    <i class="material-icons icon-phone middle">phone</i>
                    <span class="middle">Hotline: {{ $homeConfig->hotline }} (Hỗ trợ 24/7)</span>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-1 top-box">
                <a href="#">
                    <i class="material-icons shopping-cart middle">shopping_cart</i>
                </a>
            </div>
        </div>
    </div>
</div>
