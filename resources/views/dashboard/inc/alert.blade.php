@if(session('success'))
    <div class="alert alert-success">
        <i class="ti-check m-r-20"></i> {!! session('success') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="zmdi zmdi-close"></i>
        </button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <i class="ti-alert m-r-20"></i> {!! session('error') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="zmdi zmdi-close"></i>
        </button>
    </div>
@endif