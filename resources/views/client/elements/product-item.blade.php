<!-- resources/views/clients/elements/product-item.blade.php -->

<div class="col-md-3 mg-bottom-20">
    <div class="product-item">
        <a href="{{ route('client.productDetails', $item->slug) }}" class="img-box">
            <img src="{{ asset($item->avatar) }}" alt="{{ $item->title }}" class="item-img">
        </a>
        <a href="{{ route('client.productDetails', $item->slug) }}" class="item-title">{{ $item->title }}</a>
        <div class="item-price text-center mg-top-10">
            @if($item->sale_price > 0)
                <span class="price-2"> {{ $item->price }} đ</span> - <span class="sale-price">{{ $item->sale_price }} đ</span>
            @else
                <span class="price"> {{ $item->price }} đ</span>
            @endif
        </div>
    </div>
</div>
