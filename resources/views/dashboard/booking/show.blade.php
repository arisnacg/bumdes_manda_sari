@extends('layouts.app')

@section('body')

<div id="wrapper">
	@include('dashboard.inc.navbar')
	@include('dashboard.inc.sidebar')
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			@component('dashboard.components.breadcrumb', ['pagename' => 'Detail'])
			<li><a href="{{ route("home") }}">Dashboard</a></li>
            <li><a href="{{ route("booking.index") }}">Bookings</a></li>
			@endcomponent
            <!-- .row -->
			<div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="ti-car m-r-10"></i>Tour</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        <a href="#">{{ $booking->tour->name }}</a>
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="ti-user m-r-10"></i>Name</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ $booking->name }}
                                    </p>
                                </div> 
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="ti-email m-r-10"></i>Email</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ $booking->email }}
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="ti-mobile m-r-10"></i>Phone</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ $booking->phone }}
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="ti-calendar m-r-10"></i>Date of Service</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ date("l, d F Y", strtotime($booking->service_date)) }}  
                                        @if($num_day > 0)
                                            ({{ $num_day }} Day Left)
                                        @else
                                            (Passed)
                                        @endif
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="ti-alarm-clock m-r-10"></i>Time of Service</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ date("h:i A",strtotime($booking->service_time)) }}
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="icon-people m-r-10"></i>Adult</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ $booking->adult_num}}
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <label class="col-md-4 col-sm-12"><i class="icon-people m-r-10"></i>Children</label>
                                    <p class="col-md-8 col-sm-12 text-muted">
                                        <span class="m-r-10">:</span>
                                        {{ $booking->children_num }}
                                    </p>
                                </div>
                                @if($booking->request)
                                <hr>
                                <div class="row">
                                    <blockquote style="width: 100%">{{ $booking->request }}</blockquote>
                                </div>
                                @endif
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


@section('js')
	<script src="{{ plugins('bower_components/autonumeric/autonumeric.min.js') }}"></script>
	<script>
        new AutoNumeric('#inputNominal', {
            decimalCharacter : ',',
            digitGroupSeparator : '.',
        });

	</script>
	<script src="{{ plugins('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection