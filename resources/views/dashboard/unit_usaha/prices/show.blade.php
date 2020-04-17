@extends('layouts.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Add New'])
			<li><a href="{{ route("home") }}">Dashboard</a></li>
            <li><a href="{{ route("tour.index") }}">Tours</a></li>
            <li><a href="{{ route("tour.manage.prices", ['id' => $tour->id]) }}">Prices</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-6">
                            @include('dashboard.inc.alert')
							<form class="form-horizontal" method="POST" action="{{ route('tour.manage.prices', ['id' => $tour->id]) }}" enctype="multipart/form-data">
								@csrf
								<div class="panel panel-default">
										<div class="panel-heading text-muted">{{ $tour->name }}</div>
										<div class="panel-wrapper collapse in">
												<div class="panel-body">
                                                    <div class="form-group row {{ $errors->has('price_type_id') ? 'has-danger' : '' }}">
                                                        <label class="col-sm-12 col-md-2">Type</label>
                                                        <div class="col-sm-12 col-md-10">
                                                            <select name="price_type_id" class="form-control">
                                                                @foreach($price_types as $price_type)
                                                                    <option value="{{ $price_type->id }}">
                                                                        {{ $price_type->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('price_type_id'))
                                                                <div class="form-control-feedback">{{ $errors->first('price_type_id') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
													<div class="form-group row {{ $errors->has('nominal') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Nominal</label>
														<div class="col-sm-12 col-md-10">
															<input name="nominal" id="inputNominal" type="text" class="form-control" value="{{ old('name') }}">
															@if($errors->has('nominal'))
																<div class="form-control-feedback">{{ $errors->first('nominal') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('per') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Per</label>
														<div class="col-sm-12 col-md-10">
															<input name="per" type="text" class="form-control" value="{{ old('per') }}">
															@if($errors->has('per'))
																<div class="form-control-feedback">{{ $errors->first('per') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('currency') ? 'has-danger' : '' }}">
                                                        <label class="col-sm-12 col-md-2">Currency</label>
                                                        <div class="col-sm-12 col-md-5">
                                                            <select name="currency" class="form-control">
                                                                <option>IDR</option>
                                                                <option>USD</option>
                                                            </select>
                                                            @if($errors->has('currency'))
                                                                <div class="form-control-feedback">{{ $errors->first('currency') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
												</div>
												<div class="panel-footer text-right">
														<a href="{{ route('tour_type.index') }}" type="submit" class="btn btn-default waves-effect waves-light" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Back</a>
														<button type="submit" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Save</button>
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


@section('js')
	<script src="{{ plugins('bower_components/autonumeric/autonumeric.min.js') }}"></script>
	<script>
        new AutoNumeric('#inputNominal', {
            decimalCharacter : ',',
            digitGroupSeparator : '.',
        });

	</script>
	<script src="{{ plugins('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection