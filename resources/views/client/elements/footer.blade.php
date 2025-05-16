<!-- resources/views/clients/elements/top-header.blade.php -->

<div class="footer display-block" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-logo">
                <h4>Ginny Shop</h4>
                <ul>
                    <li>
                        Địa chỉ: Phường Vạn Phúc, quận Hà Đông, TP. Hà Nội
                    </li>
                    <li>
                        Điện thoại: {{ $homeConfig->hotline }}
                    </li>
                    <li>
                        Email: Ginnyshop@gmail.com
                    </li>
                    <li>
                        Website: GinnyShop.com.vn
                    </li>
                </ul>
            </div>

            <div class="col-md-4 footer-logo">
                <h4>Về Chúng Tôi</h4>
                <ul>
                    <li>
                        <a href="{{ route('client.introduction') }}" >
                            Giới thiệu
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('client.khuyenMai') }}" >
                            Khuyến mãi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('client.contact') }}" >
                            Liên hệ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Hướng dẫn mua hàng
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('client.news') }}">
                            Tin tức
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('client.kienThuc') }}">
                            Kiến thức
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 footer-logo">
                <h4>Hỗ Trợ Khách Hàng</h4>
                <ul>
                    <li>
                        <a href="#">
                            Vận chuyển và giao nhận
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Bảo hành
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Hoàn tiền
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row bottom-footer text-center">
        <div class="col-md-12">
            &#169; Copyright 2024 - GinnyShop.com.vn
        </div>
    </div>
</div>

