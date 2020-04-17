@extends('layouts.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Prices'])
            <li><a href="{{ route("home") }}">Dashboard</a></li>
            <li><a href="{{ route("tour.index") }}">Tours</a></a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10">
                    @include('dashboard.inc.alert')
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $tour->name }}</div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="text-right">
                                    <a href="{{ route('tour.manage.prices.create', ['id' => $tour->id]) }}" class="btn btn-success waves-effect waves-light"
                                        type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Add
                                        New</a>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nominal</th>
                                                <th class="text-center">Per</th>
                                                <th class="text-center">Currency</th>
                                                <th class="text-center">Type</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($data))
                                            @foreach ($data as $i => $row)
                                            <tr>
                                                <td>{{ $i +1 }}</td>
                                                <td>{{  number_format($row->nominal,2,",",".") }}</td>
                                                <td class="text-center">{{  $row->per }}</td>
                                                <td class="text-center">{{ $row->currency }}</td>
                                                <td class="text-center"><span class="label" style="background: {{ $row->price_type->color }}">{{ $row->price_type->name }}</span></td>
                                                <td class="text-center">
                                                    <form method="POST" action="{{ route('tour.manage.prices', ['id' => $row->id]) }}">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-delete-price btn-danger waves-effect waves-light"
                                                        type="button"><i class="zmdi zmdi-delete"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td class="text-center" colspan="10">Data Empty</td>
                                            </tr>
                                            @endif
        
                                        </tbody>
                                    </table>
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

@section('js')
<script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection