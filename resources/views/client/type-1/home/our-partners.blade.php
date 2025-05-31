<div class="our-partners">
    <div class="container">
        <div class="row mg-top-30">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Đối tác của chúng tôi</h2>
                <p class="section-subtitle">Khám phá những đối tác chiến lược của chúng tôi trong lĩnh vực bất động sản</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="partners-slider position-relative">
                    <div class="partners-wrapper d-flex align-items-center" id="partnersWrapper">
                        <!-- Partner items -->
                        <div class="partner-item text-center mx-3">
                            <img src="{{ asset('layout/type-1/images/home/partners/partner-1.jpg') }}" alt="Nguyễn Văn A" class="img-fluid mb-2">
                            <h6>Nguyễn Văn A</h6>
                            <div class="social">
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/zalo.png') }}" alt="Zalo" class="social-icon"></a>
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/facebook.png') }}" alt="Facebook" class="social-icon"></a>
                            </div>
                        </div>
                        <div class="partner-item text-center mx-3">
                            <img src="{{ asset('layout/type-1/images/home/partners/partner-2.jpg') }}" alt="Nguyễn Văn B" class="img-fluid mb-2">
                            <h6>Nguyễn Văn B</h6>
                            <div class="social">
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/zalo.png') }}" alt="Zalo" class="social-icon"></a>
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/facebook.png') }}" alt="Facebook" class="social-icon"></a>
                            </div>
                        </div>
                        <div class="partner-item text-center mx-3">
                            <img src="{{ asset('layout/type-1/images/home/partners/partner-3.jpg') }}" alt="Nguyễn Văn C" class="img-fluid mb-2">
                            <h6>Nguyễn Văn C</h6>
                            <div class="social">
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/zalo.png') }}" alt="Zalo" class="social-icon"></a>
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/facebook.png') }}" alt="Facebook" class="social-icon"></a>
                            </div>
                        </div>
                        <div class="partner-item text-center mx-3">
                            <img src="{{ asset('layout/type-1/images/home/partners/partner-1.jpg') }}" alt="Nguyễn Văn D" class="img-fluid mb-2">
                            <h6>Nguyễn Văn D</h6>
                            <div class="social">
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/zalo.png') }}" alt="Zalo" class="social-icon"></a>
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/facebook.png') }}" alt="Facebook" class="social-icon"></a>
                            </div>
                        </div>
                        <div class="partner-item text-center mx-3">
                            <img src="{{ asset('layout/type-1/images/home/partners/partner-2.jpg') }}" alt="Nguyễn Văn E" class="img-fluid mb-2">
                            <h6>Nguyễn Văn E</h6>
                            <div class="social">
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/zalo.png') }}" alt="Zalo" class="social-icon"></a>
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/facebook.png') }}" alt="Facebook" class="social-icon"></a>
                            </div>
                        </div>
                        <div class="partner-item text-center mx-3">
                            <img src="{{ asset('layout/type-1/images/home/partners/partner-3.jpg') }}" alt="Nguyễn Văn F" class="img-fluid mb-2">
                            <h6>Nguyễn Văn F</h6>
                            <div class="social">
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/zalo.png') }}" alt="Zalo" class="social-icon"></a>
                                <a href="#"><img src="{{ asset('layout/type-1/images/icon/facebook.png') }}" alt="Facebook" class="social-icon"></a>
                            </div>
                        </div>
                    </div>
                    <button class="partners-btn prev" id="partnersPrev">&#10094;</button>
                    <button class="partners-btn next" id="partnersNext">&#10095;</button>
                </div>
            </div>
        </div>
        <div class="row text-center mg-top-40">
            <a href="#" class="read-more btn btn-register">Xem thêm &nbsp;<i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>

@push('css')
<style>

</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.getElementById('partnersWrapper');
    const prevBtn = document.getElementById('partnersPrev');
    const nextBtn = document.getElementById('partnersNext');
    const items = wrapper.querySelectorAll('.partner-item');
    let currentIndex = 0;
    function showSlide(index) {
        if (index < 0) index = items.length - 1;
        if (index >= items.length) index = 0;
        wrapper.style.transform = `translateX(-${index * (items[0].offsetWidth + 20)}px)`;
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
