@extends('layouts.admin01')

@section('title', 'Danh sách tài khoản')

@section('description', 'Danh sách tài khoản hiện có trong hệ thống.')
{{--  Start css  --}}
@push('css')

@endpush
{{--  End css  --}}

{{--  Start content  --}}
@section('content')
<div class="page-create-account">
    <div class="container">

        @include('admin01.element.show-alerts')

        <div class="box-content pd-bottom-20">
            <div class="row">
                <div class="col-md-9 mg-top-20">
                    <h6 class="page-description">Danh sách tài khoản hiện có trong hệ thống: <span style="color: #ff0000">{{ $accounts->count() }}</span></h6>
                </div>
                <div class="col-md-3 text-right mg-top-20">
                    <a href="{{ route('accounts.create') }}" class="btn btn-register"><i class="fas fa-plus"></i> Tạo tài khoản mới</a>
                </div>
            </div>
            @if ($accounts->isEmpty())
                <div class="row">
                    <div class="col-md-12">
                        <p class="no-properties">Bạn chưa có tài khoản nào.</p>
                    </div>
                </div>
            @else
                @include('admin01.accounts.listing-accounts')
            @endif

        </div>
    </div>
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


