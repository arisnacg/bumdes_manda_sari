@extends('layouts.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Edit'])
			<li><a href="{{ route("home") }}">Dashboard</a></li>
			<li><a href="{{ route("price_type.index") }}">Price Types</a></li>
			@endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">@include('dashboard.inc.alert')</div>
            </div>
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-6">
                            @include('dashboard.inc.alert')
                            <form class="form-horizontal" method="POST" action="{{ route('price_type.update', ['id' => $row->id]) }}">
                                @method("PUT")
								@csrf
								<div class="panel panel-default">
										<div class="panel-heading text-muted">Price Type <span class="label label-info m-l-5">Edit</span></div>
										<div class="panel-wrapper collapse in">
												<div class="panel-body">
													<div class="form-group row {{ $errors->has('name') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Name</label>
														<div class="col-sm-12 col-md-10">
															<input name="name" type="text" class="form-control" value="{{ $row->name }}">
															@if($errors->has('name'))
																<div class="form-control-feedback">{{ $errors->first('name') }}</div>
															@endif
														</div>
													</div>
													<div class="form-group row {{ $errors->has('color') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Color</label>
														<div class="col-sm-12 col-md-10">
															<input name="color" type="text" class="colorpicker form-control" value="{{ $row->color }}" />
															@if($errors->has('color'))
																<div class="form-control-feedback">{{ $errors->first('color') }}</div>
															@endif
														</div>
													</div>
												</div>
												<div class="panel-footer text-right">
                                                        <a href="{{ route('price_type.index') }}" type="submit" class="btn btn-default waves-effect waves-light" type="button">
                                                            <span class="btn-label">
                                                                <i class="zmdi zmdi-long-arrow-return"></i>
                                                            </span> Back
                                                        </a>
														<button type="submit" class="btn btn-success waves-effect waves-light" type="button">
                                                            <span class="btn-label">
                                                                <i class="zmdi zmdi-refresh"></i>
                                                            </span> Update
                                                        </button>
												</div>
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
	<link href="{{ plugins('bower_components/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
@endsection

@section('js')
	<script src="{{ plugins('bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script>
	<script src="{{ plugins('bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script>
	<script src="{{ plugins('bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script>
	<script>
		// Colorpicker
		$(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
	</script>
	<script src="{{ plugins('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection