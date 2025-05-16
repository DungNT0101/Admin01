<!-- resources/views/clients/elements/post-item.blade.php -->

<div class="col-md-4 mg-bottom-20">
    <div class="post-item">
        <a href="{{ route('client.newsDetails', $item->slug) }}">
            <img src="{{ asset($item->avatar) }}" alt="{{ $item->title }}" class="item-img">
        </a>
        <a href="{{ route('client.newsDetails', $item->slug) }}" class="item-title">{{ $item->title }}</a>
    </div>
</div>
