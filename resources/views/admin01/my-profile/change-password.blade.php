<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <div class="box-content">
            <form action="{{ route('my-profile.update-password') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 mg-top-20">
                        <h5 class="pd-10">Đổi Mật Khẩu</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pd-10">
                        <label for="old_password">Nhập khẩu cũ *</label>
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Nhập mật khẩu cũ" required>
                    </div>
                    <div class="col-md-6 pd-10">
                        <label for="new_password">Nhập khẩu mới *</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nhập mật khẩu mới" required>
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Lưu Mật Khẩu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

