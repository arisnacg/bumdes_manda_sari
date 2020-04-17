@extends('layouts.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Gallery'])
            <li><a href="{{ route("home") }}">Dashboard</a></li>
            <li><a href="{{ route("tour.index") }}">Tours</a></a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $tour->name }}</div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="text-left m-b-20">
                                    <a href="{{ route('tour.manage.pictures.create', ['id' => $tour->id]) }}" class="btn btn-success waves-effect waves-light"
                                        type="button"><span class="btn-label"><i class=" zmdi zmdi-upload"></i></span>Upload New Picture</a>
                                </div>
                                <hr>
                                <div class="row el-element-overlay">
                                    @foreach($data as $row)
                                        <div class="col-sm-12 col-md-3">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1">
                                                    <img src="{{ images('tour/'.$row->tour_id.'/'.$row->name) }}" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{ images('tour/'.$row->tour_id.'/'.$row->name) }}"><i class="icon-magnifier"></i></a>
                                                            {{-- <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-crop"></i></a></li> --}}
                                                            <li><a class="btn btn-delete-tour-picture default btn-outline" data-id="{{ $row->id }}"><i class="icon-trash"></i></a></li>
                                                            <form id="formDelete{{ $row->id }}" action="{{ route('tour.manage.pictures', ['id' => $row->id]) }}" method="POST" style="display: none;">
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>            
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    @include('dashboard.inc.footer')
<!-- /#page-wrapper -->
</div>


@endsection

@section('css')
<link href="{{ plugins('bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ plugins('bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ plugins('bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>

@endsection