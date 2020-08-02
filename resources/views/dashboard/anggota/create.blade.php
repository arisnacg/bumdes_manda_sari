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
			<li><a href="{{ route("anggota.index") }}">Anggota</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-10">
                            @include('dashboard.inc.alert')
							<form class="form-horizontal" method="POST" action="{{ route('anggota.store') }}" enctype="multipart/form-data">
								@csrf
								<div class="panel panel-default">
										<div class="panel-heading text-muted">Anggota <span class="label label-info m-l-5">Baru</span></div>
										<div class="panel-wrapper collapse in">
												<div class="panel-body">
													<div class="form-group row {{ $errors->has('nama') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Nama </label>
														<div class="col-sm-12 col-md-10">
															<input name="nama" type="text" class="form-control" value="{{ old('nama') }}">
															@if($errors->has('nama'))
																<div class="form-control-feedback">{{ $errors->first('nama') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('jabatan') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Jabatan</label>
														<div class="col-sm-12 col-md-5">
															<input name="jabatan" type="text" class="form-control" value="{{ old('jabatan') }}">
															@if($errors->has('jabatan'))
																<div class="form-control-feedback">{{ $errors->first('jabatan') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('pendidikan') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Pendidikan</label>
														<div class="col-sm-12 col-md-5">
															<input name="pendidikan" type="text" class="form-control" value="{{ old('pendidikan') }}">
															@if($errors->has('pendidikan'))
																<div class="form-control-feedback">{{ $errors->first('pendidikan') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('no_hp') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">No Telepon</label>
														<div class="col-sm-12 col-md-5">
															<input name="no_hp" type="text" class="form-control" value="{{ old('no_hp') }}">
															@if($errors->has('no_hp'))
																<div class="form-control-feedback">{{ $errors->first('no_hp') }}</div>
															@endif
														</div>
                                                    </div>
												</div>
												<div class="panel-footer text-right">
														<a href="{{ route('anggota.index') }}" type="submit" class="btn btn-default waves-effect waves-light m-r-5" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Kembali</a>
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


@section('css')
    <link href="{{ asset('admin/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
@endsection

@section('js')
<script src="{{ asset('admin/plugins/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script>
    $('.summernote').summernote({
        toolbar: [
            ['style', ['style']],
            ['fontsize', ['fontsize']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['picture', 'hr']],
            ['table', ['table']]
        ],
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36', '48' , '64', '82', '150'],
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false, // set focus to editable area after initializing summernote
        fontNames: ['Poppins', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New']
    });
</script>
@endsection