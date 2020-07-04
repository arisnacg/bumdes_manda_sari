@extends('layouts.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Crop Image'])
			<li><a href="{{ route("home") }}">Dashboard</a></li>
			<li><a href="{{ route("tour_type.index") }}">Tour Types</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
					<div class="col-sm-12 col-md-8">
                            @include('dashboard.inc.alert')
                            <div class="panel panel-default">
                                    <div class="panel-heading text-muted">Crop Image</div>
                                    <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <div id="main-cropper"></div>
                                            </div>
                                            <div class="panel-footer text-right">
                                                    <a href="{{ route('tour_type.index') }}" type="submit" class="btn btn-default waves-effect waves-light" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Back</a>
                                                    <button type="button" id="btnUploadCrop" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Crop</button>
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
</div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ plugins('bower_components/croppie/croppie.css') }}">
@endsection

@section('js')
	<script src="{{ plugins('bower_components/croppie/croppie.min.js') }}"></script>
	<script>
        //Dropify
        let basic = $('#main-cropper').croppie({
            viewport: { width: 300, height: 300, 
            type: "square" },
            boundary: { width: 360, height: 360 },
            showZoomer: true,
            url: "{{ images('tour_types/'.$row->image) }}"
        });
        $("#btnUploadCrop").click(function(){
            basic.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "/tour_type/upload/crop/{{ $row->id }}",
                    method: "POST",
                    data: {
                        "id": {{ $row->id }},
                        "image": response
                    },
                    beforeSend: function(){
                        
                    },
                    success: function(res){
                        console.log(res)
                        //window.location.href = "/tour_type";
                    }
                });
            });
        });
	</script>
	<script src="{{ plugins('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection