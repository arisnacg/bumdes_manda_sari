@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Tambah'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            <li><a href="{{ route("program.index") }}">Program</a></a></li>
            @endcomponent
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="panel panel-default">
                        <div class="panel-heading">Program <span class="label label-info m-l-5">Baru</span></div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <form method="POST" action="{{ route("program.store") }}">
                                        @csrf
                                        <div class="text-right m-b-20">
                                            <button type="submit" class="btn btn-success waves-effect waves-light" type="button">
                                                <span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Simpan Program
                                            </button>
                                        </div>
                                        <div class="form-group row {{ $errors->has('judul') ? 'has-danger' : '' }}">
                                            <label class="col-sm-12 col-md-2">Nama Program</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input name="judul" type="text" class="form-control" value="{{ old('judul') }}">
                                                @if($errors->has('judul'))
                                                    <div class="form-control-feedback">{{ $errors->first('judul') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row {{ $errors->has('id_kerjasama') ? 'has-danger' : '' }}">
                                            <label class="col-sm-12 col-md-2">Kerja Sama</label>
                                            <div class="col-sm-12 col-md-5">
                                                <select name="id_kerjasama" class="form-control">
                                                    @foreach($kerjasama as $e)
                                                        <option value="{{ $e->id }}"
                                                            @if(old("id_kerjasama") == $e->id) selected @endif
                                                            >{{ $e->nama }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('id_kerjasama'))
                                                    <div class="form-control-feedback">{{ $errors->first('id_kerjasama') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <label class="m-b-10">Deskripsi Program</label>
                                        @if ($errors->has('isi'))
                                            <div class="form-control-feedback m-b-10 text-danger"> {{ $errors->first('isi') }} </div>
                                            </span>
                                        @endif
                                        <textarea id="editor" name="isi" class="summernote">{!! old("isi") !!}</textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container-fluid -->
    @include('dashboard.inc.footer')
</div>

@endsection

@section('css')
    <link href="{{ asset('admin/plugins/bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
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
        height: 800, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false, // set focus to editable area after initializing summernote
        fontNames: ['Poppins', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New']
    });
</script>
@endsection