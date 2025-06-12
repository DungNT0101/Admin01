<table style="border-collapse: collapse; width: 100%; text-align: center;" class="mg-top-30">
    <tr>
        <th style="width: 10%; min-width: 80px; border: 1px solid #ccc; text-align: center;" class="pd-5">ID</th>
        <th style="width: 40%; min-width: 180px; border: 1px solid #ccc; text-align: center;" class="pd-5">Tên đăng nhập</th>
        <th style="width: 30%; border: 1px solid #ccc; text-align: center;" class="pd-5">Actions</th>
    </tr>
    @foreach ($accounts as $account)
        <tr>
            <td style="border: 1px solid #ccc; text-align: center;" class="pd-5">{{ $account->id }}</td>
            <td style="border: 1px solid #ccc; text-align: center;" class="pd-5">{{ $account->user_name }}</td>
            <td style="border: 1px solid #ccc; text-align: center;" class="pd-5">
                <a href="{{ route('accounts.edit', ['id' => $account->id]) }}" class="btn btn-primary mg-5"><i class="fas fa-edit"></i></a>
                <a href="{{ route('accounts.delete', ['id' => $account->id]) }}" class="btn btn-danger mg-5"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
    @endforeach
</table>

{{--  <div class="row">
    <div class="col-2">
        ID
    </div>
    <div class="col-4">
        Tên đăng nhập
    </div>
</div>
@foreach ($accounts as $account)
    <div class="row">
        <div class="col-2">
            {{ $account->id }}
        </div>
        <div class="col-4">
            {{ $account->user_name }}
        </div>
        <div class="col-4">
            <a href="{{ route('accounts.edit', ['id' => $account->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('accounts.delete', ['id' => $account->id]) }}" class="btn btn-danger">Delete</a>
        </div>
    </div>
@endforeach  --}}
