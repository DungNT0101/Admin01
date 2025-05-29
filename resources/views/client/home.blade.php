@extends('layouts.client')

@section('title', 'Đất Phổ Yên - Trang chủ')

{{--  Start breadcrumb  --}}
@section('keywords', $homeConfig->keywords)
@section('description', $homeConfig->description)

{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<!-- Slider HTML Example -->
        <div class="slider">
            <div class="slider-wrapper">
                <!-- Example images, replace src with your dynamic image paths -->
                <img src="/images/banner/banner_1.jpg" class="slider-image" alt="Slide 1">
                <img src="/images/banner/banner_1.jpg" class="slider-image" alt="Slide 2">
                <img src="/images/banner/banner_1.jpg" class="slider-image" alt="Slide 3">
            </div>
            <button class="slider-btn prev">&#10094;</button>
            <button class="slider-btn next">&#10095;</button>
        </div>

<div class="container home-page">
    {{--  Bất động sản theo địa điểm  --}}
    <div class="row mg-top-20">
        <div class="col-md-12">
            <h3 class="title-home">Bất động sản theo địa điểm</h3>
        </div>
        <div class="col-md-6 addr-box">
            <div class="addr-img-box">
                <img src="/images/home/HCM-web-1.jpg" alt="Bất động sản Hồ Chí Minh">
            </div>
            <div class="addr-text-box">
                <a href="#">
                    <h5 class="title">TP. Hồ Chí Minh</h5>
                    <p class="size">1.000.000 tin đăng</p>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 addr-box">
                    <div class="addr-img-box">
                        <img src="/images/home/HN-web-1.jpg" alt="Bất động sản Hà Nội">
                    </div>
                    <div class="addr-text-box">
                        <a href="#">
                            <h5 class="title">TP. Hà Nội</h5>
                            <p class="size">900.000 tin đăng</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 addr-box">
                    <div class="addr-img-box">
                        <img src="/images/home/DDN-web-1.jpg" alt="Bất động sản Đà Nẵng">
                    </div>
                    <div class="addr-text-box">
                        <a href="#">
                            <h5 class="title">TP. Đà Nẵng</h5>
                            <p class="size">900.000 tin đăng</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mg-top-15">
                <div class="col-md-6 addr-box">
                    <div class="addr-img-box">
                        <img src="/images/home/HN-web-1.jpg" alt="Bất động sản Hà Nội">
                    </div>
                    <div class="addr-text-box">
                        <a href="#">
                            <h5 class="title">TP. Bình Dương</h5>
                            <p class="size">900.000 tin đăng</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 addr-box">
                    <div class="addr-img-box">
                        <img src="/images/home/DNA-web-1.jpg" alt="Bất động sản Đà Nẵng">
                    </div>
                    <div class="addr-text-box">
                        <a href="#">
                            <h5 class="title">TP. Đồng Nai</h5>
                            <p class="size">900.000 tin đăng</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Dự án nổi bật  --}}
    <div class="row mg-top-20">
        <div class="col-md-12">
            <h3 class="title-home">Dự án nổi bật</h3>
        </div>
        <div class="col-md-4 project-box">
            <div class="addr-img-box">
                <a href="#">
                    <img src="/images/home/HCM-web-1.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="project-text-box">
                <a href="#">
                    <h5 class="title">Vinhomes Grand Park</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4 project-box">
            <div class="addr-img-box">
                <a href="#">
                    <img src="/images/home/HCM-web-1.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="project-text-box">
                <a href="#">
                    <h5 class="title">Vinhomes Grand Park</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4 project-box">
            <div class="addr-img-box">
                <a href="#">
                    <img src="/images/home/HCM-web-1.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="project-text-box">
                <a href="#">
                    <h5 class="title">Vinhomes Grand Park</h5>
                </a>
            </div>
        </div>

        <div class="col-md-4 project-box">
            <div class="addr-img-box">
                <a href="#">
                    <img src="/images/home/HCM-web-1.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="project-text-box">
                <a href="#">
                    <h5 class="title">Vinhomes Grand Park</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4 project-box">
            <div class="addr-img-box">
                <a href="#">
                    <img src="/images/home/HCM-web-1.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="project-text-box">
                <a href="#">
                    <h5 class="title">Vinhomes Grand Park</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4 project-box">
            <div class="addr-img-box">
                <a href="#">
                    <img src="/images/home/HCM-web-1.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="project-text-box">
                <a href="#">
                    <h5 class="title">Vinhomes Grand Park</h5>
                </a>
            </div>
        </div>
    </div>

    {{--  Bất động sản nổi bật  --}}
    <div class="row mg-top-20">
        <div class="col-md-12">
            <h3 class="title-home">Bất động sản nổi bật</h3>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 property-box mg-top-20">
            <div class="property-img-box">
                <a href="#">
                    <img src="/images/home/sakura-3.jpg" alt="Vinhomes Grand Park">
                </a>
            </div>
            <div class="property-text-box">
                <a href="#">
                    <p class="title">Vinhomes Grand Park</p>
                    <p class="price">Giá: 2 tỷ    88m2</p>
                    <p class="address">Quận 9, TP. Hồ Chí Minh</p>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
{{--  End content  --}}

{{--  Start modals  --}}
@section('modals')

@endsection
{{--  End modals  --}}

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.querySelector('.slider');
            if (!slider) return;
            const wrapper = slider.querySelector('.slider-wrapper');
            const images = wrapper.querySelectorAll('.slider-image');
            const prevBtn = slider.querySelector('.slider-btn.prev');
            const nextBtn = slider.querySelector('.slider-btn.next');
            let currentIndex = 0;
            function showSlide(index) {
                if (index < 0) index = images.length - 1;
                if (index >= images.length) index = 0;
                wrapper.style.transform = `translateX(-${index * 100}%)`;
                currentIndex = index;
            }
            prevBtn.addEventListener('click', function () {
                showSlide(currentIndex - 1);
            });
            nextBtn.addEventListener('click', function () {
                showSlide(currentIndex + 1);
            });
            showSlide(0);
        });
    </script>
@endpush
{{--  Start scripts  --}}
@push('scripts')

@endpush
{{--  End scripts  --}}
