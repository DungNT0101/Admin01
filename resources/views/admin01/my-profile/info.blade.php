<div class="page-head row">
    <div class="col-md-6">
        <h1 class="mg-top-10">
            Thông tin cá nhân
        </h1>
    </div>
</div>

<div class="box-content">
    <form action="{{ route('my-profile.update') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-2 pd-10">
                @if(@empty($data->avatar))
                    <img src="{{ asset('images/icons/user_default.png') }}" alt="{{ $data->user_name }}" class="img-avatar">
                @else
                    <img src="{{ asset($data->avatar) }}" alt="{{ $data->user_name }}" class="img-avatar">
                @endif
                <input type="file" class="form-control mg-top-10" id="avatar" name="avatar" accept="image/*">
            </div>
            <div class="col-md-10 pd-10">
                <div class="row">
                    <div class="col-md-6 pd-10">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" name="user_name" value="{{ $data->user_name }}">
                    </div>
                    <div class="col-md-6 pd-10">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6 pd-10">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}">
                    </div>
                    <div class="col-md-6 pd-10">
                        <label for="fullname">Họ tên</label>
                        <input type="text" class="form-control" id="fullname" name="full_name" value="{{ $data->full_name }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-12">
                        <label for="bio">Giới thiệu</label>
                        <textarea class="form-control" id="bio" name="bio" rows="6">{{ $data->bio }}</textarea>
                    </div>

                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6 pd-10">
                        <label for="zalo">Zalo</label>
                        <input type="text" class="form-control" id="zalo" name="zalo" value="{{ $data->zalo }}">
                    </div>
                    <div class="col-md-6 pd-10">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $data->facebook }}">
                    </div>
                </div>
                <div class="row mg-top-20">
                    <div class="col-md-6 pd-10">
                        <label for="youtube">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $data->youtube }}">
                    </div>
                    <div class="col-md-6 pd-10">
                        <label for="tiktok">TikTok</label>
                        <input type="text" class="form-control" id="tiktok" name="tiktok" value="{{ $data->tiktok }}">
                    </div>
                </div>
                <div class="row mg-top-40">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
