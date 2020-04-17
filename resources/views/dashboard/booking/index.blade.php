@extends('layouts.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Bookings'])
            <li><a href="{{ route("home") }}">Dashboard</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <h3 class="box-title">Bookings</h3>
                        <div class="m-t-20">
                            <table class="table" id="tableTour">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Tour</th>
                                        <th class="text-center">Time</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr @if($row->status == 0) class="new-booking" @endif>
                                        <td class="text-center">{{ $i +1 }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td><a href="#">{{ $row->tour->name }}</a></td>
                                        <td class="text-center">{{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('booking.show', ['id' => $row->id]) }}" class="btn btn-primary waves-effect waves-light">
                                                <i class="zmdi zmdi-eye"></i>
                                            </a>
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-booking btn-danger waves-effect waves-light"
                                                type="button"><i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('booking.destroy', ['id' => $row->id]) }}">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
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
    <link href="{{ plugins('bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ plugins('bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    $("#tableTour").DataTable()
</script>
@endsection