<div class="clients-testimonials">
    <div class="container">
        <div class="row mg-top-30">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Phản hồi của khách hàng</h2>
                <p class="section-subtitle">Chúng tôi thu thập đánh giá của khách hàng</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="testimonial-slider position-relative">
                    <div class="testimonial-wrapper d-flex transition" id="testimonialWrapper">
                        <div class="testimonial-item p-4 text-center">
                            <div class="testimonial-avatar mb-3">
                                <img src="{{ asset('layout/type-1/images/home/why-choose-us/ts-3.jpg') }}" alt="Khách hàng 1" class="rounded-circle" width="80">
                            </div>
                            <p class="testimonial-content">"Dịch vụ tuyệt vời, tôi đã tìm được căn nhà mơ ước rất nhanh chóng!"</p>
                            <h6 class="testimonial-name mt-3 mb-0">Nguyễn Văn A</h6>
                            <span class="testimonial-job">Doanh nhân</span>
                        </div>
                        <div class="testimonial-item p-4 text-center">
                            <div class="testimonial-avatar mb-3">
                                <img src="{{ asset('layout/type-1/images/home/why-choose-us/ts-4.jpg') }}" alt="Khách hàng 2" class="rounded-circle" width="80">
                            </div>
                            <p class="testimonial-content">"Trang web rất dễ sử dụng, đội ngũ hỗ trợ nhiệt tình và chuyên nghiệp."</p>
                            <h6 class="testimonial-name mt-3 mb-0">Trần Thị B</h6>
                            <span class="testimonial-job">Nhân viên văn phòng</span>
                        </div>
                        <div class="testimonial-item p-4 text-center">
                            <div class="testimonial-avatar mb-3">
                                <img src="{{ asset('layout/type-1/images/home/why-choose-us/ts-5.jpg') }}" alt="Khách hàng 3" class="rounded-circle" width="80">
                            </div>
                            <p class="testimonial-content">"Tôi đã bán được nhà nhanh chóng nhờ Sandat.net, cảm ơn rất nhiều!"</p>
                            <h6 class="testimonial-name mt-3 mb-0">Lê Văn C</h6>
                            <span class="testimonial-job">Chủ nhà</span>
                        </div>
                    </div>
                    <button class="testimonial-btn prev" id="testimonialPrev">&#10094;</button>
                    <button class="testimonial-btn next" id="testimonialNext">&#10095;</button>
                </div>
            </div>
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
    const wrapper = document.getElementById('testimonialWrapper');
    const prevBtn = document.getElementById('testimonialPrev');
    const nextBtn = document.getElementById('testimonialNext');
    const items = wrapper.querySelectorAll('.testimonial-item');
    let currentIndex = 0;
    function showSlide(index) {
        if (index < 0) index = items.length - 1;
        if (index >= items.length) index = 0;
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
