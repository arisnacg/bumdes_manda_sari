@extends('dashboard.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Edit'])
			<li><a href="{{ route("dashboard") }}">Dashboard</a></li>
			<li><a href="{{ route("jenis_unit_usaha.index") }}">Jenis Usaha</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-8">
                            @include('dashboard.inc.alert')
							<form class="form-horizontal" method="POST" action="{{ route('jenis_unit_usaha.update', ['id' => $row->id]) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
								<div class="panel panel-default">
										<div class="panel-heading text-muted">Jenis Usaha <span class="label label-info m-l-5">Edit</span></div>
										<div class="panel-wrapper collapse in">
												<div class="panel-body">
													<div class="form-group row {{ $errors->has('nama') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Nama</label>
														<div class="col-sm-12 col-md-10">
															<input name="nama" type="text" class="form-control" value="{{ $row->nama }}">
															@if($errors->has('nama'))
																<div class="form-control-feedback">{{ $errors->first('nama') }}</div>
															@endif
														</div>
                                                    </div>
												</div>
												<div class="panel-footer text-right">
														<a href="{{ route('jenis_unit_usaha.index') }}" type="submit" class="btn btn-default waves-effect waves-light m-r-5" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Kembali</a>
														<button type="submit" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Simpan</button>
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