@extends('layouts.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Description'])
            <li><a href="{{ route("home") }}">Dashboard</a></li>
            <li><a href="{{ route("tour.index") }}">Tours</a></a></li>
            @endcomponent
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $tour->name }}</div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <form method="POST" action="{{ route("tour.manage.description", ["id"=> $tour->id]) }}">
                                        @csrf
                                        <div class="text-right m-b-20">
                                            <button type="submit" class="btn btn-success waves-effect waves-light" type="button">
                                                <span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Save Description
                                            </button>
                                            <a href="#" class="btn btn-primary waves-effect waves-light" type="button">
                                                <span class="btn-label"><i class=" zmdi zmdi-eye"></i></span> Preview Tour
                                            </a>
                                        </div>
                                        @if ($errors->has('description'))
                                            <div class="form-control-feedback m-b-10 text-danger"> {{ $errors->first('description') }} </div>
                                            </span>
                                        @endif
                                        <textarea id="editor" name="description" class="summernote">
                                            {!! $tour->description !!}
                                        </textarea>
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
    <link href="{{ plugins('bower_components/summernote/dist/summernote.css') }}" rel="stylesheet" />
    <link href="{{ plugins('bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ plugins('bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ plugins('bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
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