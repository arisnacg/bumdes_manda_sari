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
            <li><a href="{{ route("blog.index") }}">Blog</a></a></li>
            @endcomponent
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $row->judul }} <span class="label label-info m-l-5">Edit</span></div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <form method="POST" action="{{ route("blog.update", ["id" => $row->id]) }}">
                                        @csrf
                                        @method("PUT")
                                        <div class="text-right m-b-40">
                                            <a target="_blank" href="{{ route("page.blog", ['url' => $row->url]) }}" class="btn btn-primary waves-effect waves-light" type="button">
                                                <span class="btn-label"><i class=" zmdi zmdi-eye"></i></span> Preview Halaman
                                            </a>
                                            <a href="{{ route("blog.gambar", ["id" => $row->id]) }}" class="btn btn-info waves-effect waves-light" type="button">
                                                <span class="btn-label"><i class=" zmdi zmdi-image"></i></span> Ganti Gambar
                                            </a>
                                            <button type="submit" class="btn btn-success waves-effect waves-light" type="button">
                                                <span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Update Blog
                                            </button>
                                        </div>
                                        <div class="form-group row {{ $errors->has('judul') ? 'has-danger' : '' }}">
                                            <label class="col-sm-12 col-md-2">Judul Blog</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input name="judul" type="text" class="form-control" value="{{ $row->judul }}">
                                                @if($errors->has('judul'))
                                                    <div class="form-control-feedback">{{ $errors->first('judul') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row {{ $errors->has('id_kategori') ? 'has-danger' : '' }}">
                                            <label class="col-sm-12 col-md-2">Kategori Blog</label>
                                            <div class="col-sm-12 col-md-5">
                                                <select name="id_kategori" class="form-control">
                                                    @foreach($kategori_blog as $e)
                                                        <option value="{{ $e->id }}"
                                                            @if($row->id_kategori == $e->id) selected @endif
                                                            >{{ $e->nama }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('id_kategori'))
                                                    <div class="form-control-feedback">{{ $errors->first('id_kategori') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <label class="m-b-10">Isi Konten Blog</label>
                                        @if ($errors->has('isi'))
                                            <div class="form-control-feedback m-b-10 text-danger"> {{ $errors->first('isi') }} </div>
                                            </span>
                                        @endif
                                        <textarea id="editor" name="isi" class="summernote">{!! $row->isi !!}</textarea>
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