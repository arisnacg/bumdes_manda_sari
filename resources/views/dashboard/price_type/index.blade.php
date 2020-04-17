@extends('layouts.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Price Types'])
            <li><a href="{{ route("home") }}">Dashboard</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <h3 class="box-title">Price Types</h3>
                        <div class="text-right">
                            <a href="{{ route('price_type.create') }}" class="btn btn-success waves-effect waves-light"
                                type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Add
                                New</a>
                        </div>
                        <div class="table-responsive m-t-20">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th class="text-center">Color</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td>{{ $i +1 }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td class="text-center"><span class="label" style="background: {{ $row->color }}">{{
                                                $row->color }}</span> </td>
                                        <td class="text-center">
                                            <a href="{{ route('price_type.edit', ['id' => $row->id]) }}" class="btn btn-primary waves-effect waves-light"><span
                                                    class="btn-label"><i class="zmdi zmdi-edit"></i></span>Edit</a>
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-price-type btn-danger waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="zmdi zmdi-delete"></i></span>Delete</button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('price_type.destroy', ['id' => $row->id]) }}">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="text-center" colspan="4">Data Empty</td>
                                    </tr>
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

@section('js')
<script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection