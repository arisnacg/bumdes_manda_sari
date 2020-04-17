@extends('layouts.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Upload New'])
			<li><a href="{{ route("home") }}">Dashboard</a></li>
            <li><a href="{{ route("tour.index") }}">Tour</a></li>
            <li><a href="{{ route("tour.manage.pictures", ['id' => $tour->id]) }}">Pictures</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                        @include('dashboard.inc.alert')
                        <form class="form-horizontal" method="POST" action="{{ route('tour.manage.pictures', ['id' => $tour->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading text-muted">Upload <span class="label label-info m-l-5">New</span></div>
                                <div class="panel-wrapper collapse in">
                                    <form>
                                        <div class="panel-body">
                                            <div class="form-group {{ $errors->has('image') ? 'has-danger' : '' }}">
                                                <input name="image" type="file" id="input-file-now" class="dropify" value="{{ old('image') }}"/>
                                                @if($errors->has('image'))
                                                    <div class="form-control-feedback">{{ $errors->first('image') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="panel-footer text-right">
                                            <a href="{{ route('tour.manage.pictures', ['id' => $tour->id]) }}" class="btn btn-default waves-effect waves-light" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Back</a>
                                            <button type="submit" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class=" zmdi zmdi-upload"></i></span> Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                </div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
	@include('dashboard.inc.footer')
</div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ plugins('bower_components/dropify/dist/css/dropify.min.css') }}">
@endsection

@section('js')
	<script src="{{ plugins('bower_components/dropify/dist/js/dropify.min.js') }}"></script>
	<script>
        //Dropify
        $('.dropify').dropify();

	</script>
	<script src="{{ plugins('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection