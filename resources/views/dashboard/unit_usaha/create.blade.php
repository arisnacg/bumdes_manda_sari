@extends('dashboard.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Tambah Baru'])
			<li><a href="{{ route("dashboard") }}">Dashboard</a></li>
			<li><a href="{{ route("unit_usaha.index") }}">Unit Usaha</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-10">
                            @include('dashboard.inc.alert')
							<form class="form-horizontal" method="POST" action="{{ route('unit_usaha.store') }}" enctype="multipart/form-data">
								@csrf
								<div class="panel panel-default">
										<div class="panel-heading text-muted">Unit Usaha <span class="label label-info m-l-5">Baru</span></div>
										<div class="panel-wrapper collapse in">
												<div class="panel-body">
                                                    <div class="form-group row {{ $errors->has('id_jenis') ? 'has-danger' : '' }}">
                                                        <label class="col-sm-12 col-md-2">Jenis Usaha</label>
                                                        <div class="col-sm-12 col-md-10">
                                                            <select name="id_jenis" class="form-control">
                                                                @foreach($jenis_unit_usaha as $e)
                                                                    <option value="{{ $e->id }}"
                                                                        @if(old("id_jenis") == $e->id) selected @endif
                                                                        >{{ $e->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('id_jenis'))
                                                                <div class="form-control-feedback">{{ $errors->first('id_jenis') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
													<div class="form-group row {{ $errors->has('nama') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Nama Unit Usaha</label>
														<div class="col-sm-12 col-md-10">
															<input name="nama" type="text" class="form-control" value="{{ old('nama') }}">
															@if($errors->has('nama'))
																<div class="form-control-feedback">{{ $errors->first('nama') }}</div>
															@endif
														</div>
                                                    </div>
												</div>
												<div class="panel-footer text-right">
														<a href="{{ route('unit_usaha.index') }}" type="submit" class="btn btn-default waves-effect waves-light" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Back</a>
														<button type="submit" class="btn btn-success waves-effect waves-light m-r-5" type="button"><span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Simpan</button>
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