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
			<li><a href="{{ route("program.index") }}">Program</a></li>
			<li><a href="{{ route("anggota_program.show", ["id_program" => $row->id_program]) }}">Anggota</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-10">
                            @include('dashboard.inc.alert')
							<form class="form-horizontal" method="POST" action="{{ route('anggota_program.update', ['id' => $row->id]) }}" enctype="multipart/form-data">
								@csrf
								@method("PUT")
								<div class="panel panel-default">
										<div class="panel-heading text-muted">{{ $row->program->nama }} <span class="label label-info m-l-5">Edit Anggota</span></div>
										<div class="panel-wrapper collapse in">
												<div class="panel-body">
													<input type="hidden" name="id_program" value="{{ $row->id_program }}">
													<div class="form-group row {{ $errors->has('nama') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Nama </label>
														<div class="col-sm-12 col-md-10">
															<input name="nama" type="text" class="form-control" value="{{ $row->nama }}">
															@if($errors->has('nama'))
																<div class="form-control-feedback">{{ $errors->first('nama') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('umur') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Umur</label>
														<div class="col-sm-12 col-md-3">
															<div class="input-group">
																<input name="umur" type="number" class="form-control" value="{{ $row->umur }}">
																<span class="input-group-addon">Tahun</span>
															</div>
															@if($errors->has('umur'))
																<div class="form-control-feedback">{{ $errors->first('umur') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('pekerjaan') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Pekerjaan </label>
														<div class="col-sm-12 col-md-5">
															<input name="pekerjaan" type="text" class="form-control" value="{{ $row->pekerjaan }}">
															@if($errors->has('pekerjaan'))
																<div class="form-control-feedback">{{ $errors->first('pekerjaan') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('alamat') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Alamat</label>
														<div class="col-sm-12 col-md-10">
															<textarea name="alamat" type="number" rows="2" class="form-control">{{ $row->alamat }}</textarea> 
															@if($errors->has('alamat'))
																<div class="form-control-feedback">{{ $errors->first('alamat') }}</div>
															@endif
														</div>
                                                    </div>
                                                    <div class="form-group row {{ $errors->has('informasi') ? 'has-danger' : '' }}">
														<label class="col-sm-12 col-md-2">Informasi Tambahan</label>
														<div class="col-sm-12 col-md-10">
															 <textarea id="editor" name="informasi" class="summernote">{!! $row->informasi !!}</textarea>
															 @if($errors->has('informasi'))
																<div class="form-control-feedback">{{ $errors->first('informasi') }}</div>
															@endif
														</div>
                                                    </div>
												</div>
												<div class="panel-footer text-right">
														<a href="{{ route('anggota_program.show', ['id_program' => $row->program->id]) }}" type="submit" class="btn btn-default waves-effect waves-light m-r-5" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Kembali</a>
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