<!-- resources/views/clients/elements/home-product.blade.php -->
 
<div class="home-news display-block mg-top-40" id="home-news">
    <div class="container">
        <div class="row typical-news">
            <div class="col-md-12">
                <h4>Tin Tức</h4>
            </div>
            @foreach ($news as $data)
                <div class="col-md-3 mg-top-20">
                    <div class="home-item">
                        <img src="{{asset($data->features)}}" alt="{{$data->title}}" class="item-img">
                        <a href="#" class="item-title">{{$data->title}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>