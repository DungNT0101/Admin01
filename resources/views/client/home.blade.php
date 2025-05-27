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

        <style>
        .slider {
            position: relative;
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
        }
        .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease;
        }
        .slider-image {
            min-width: 100%;
            height: 500px;
            object-fit: cover;
        }
        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 2;
        }
        .slider-btn.prev { left: 10px; }
        .slider-btn.next { right: 10px; }
        </style>

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

<div class="container">

</div>

@endsection
{{--  End content  --}}

{{--  Start modals  --}}
@section('modals')

@endsection
{{--  End modals  --}}

{{--  Start scripts  --}}
@push('scripts')

@endpush
{{--  End scripts  --}}
