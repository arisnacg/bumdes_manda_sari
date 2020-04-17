@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Dashboard'])
            @endcomponent
        </div>
        <!-- /.container-fluid -->
        @include('dashboard.inc.footer')
    </div>
</div>
@endsection

@section('css')
<link href="{{ asset('admin/template/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{  asset('admin/template/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{  asset('admin/template/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{  asset('admin/template/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{  asset('admin/template/bower_components/morrisjs/morris.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{  asset('admin/template/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
@endsection