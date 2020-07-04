@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Gambar'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            <li><a href="{{ route("unit_usaha.index") }}">Unit Usaha</a></a></li>
            @endcomponent
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $row->nama }}</div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="text-left m-b-20">
                                    <a target="_blank" href="{{ route("page.unit_usaha", ['url' => $row->url]) }}" class="btn btn-primary waves-effect waves-light" type="button">
                                        <span class="btn-label"><i class=" zmdi zmdi-eye"></i></span> Preview Halaman
                                    </a>
                                    <button class="btn btn-info waves-effect waves-light" id="btnGambar" type="button">
                                        <span class="btn-label"><i class="zmdi zmdi-image"></i></span> Pilih Gambar
                                    </button>
                                    <button id="uploadGambar" class="btn btn-success waves-effect waves-light" type="button">
                                        <span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Simpan Gambar
                                    </button>
                                </div>
                                <hr>
                                <input id="inputGambar" type="file" name="image" class="image" style="display: none;">
                                <div class="img-container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 style="display: none;" class="text-muted info-cropper">Info: Anda dapat zoom-in/zoom-out gambar menggunakan <b>Mouse Scroll</b></h5>
                                            <img class="img-cropper" id="image" src="{{ '/website/images/usaha/'.$row->gambar }}">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <h4 class="muted">Hasil Crop :</h4>
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <link href="{{ asset('admin/plugins/bower_components/cropper/cropper.min.css') }}" rel="stylesheet" />
@endsection

@section('js')
<script>
    var ID_USAHA = {{ $row->id }};
</script>
<script src="{{ asset('admin/plugins/bower_components/cropper/cropper.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
<script src="{{ asset('admin/js/upload_gambar/usaha.js') }}"></script>
@endsection