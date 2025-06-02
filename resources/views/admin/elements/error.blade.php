<div class="row errors-list">
    @foreach ($errors as $error)
        <div class="col-12 error-item">
            <i class="material-icons"></i> {!! $error !!}
        </div>
    @endforeach
</ul>
