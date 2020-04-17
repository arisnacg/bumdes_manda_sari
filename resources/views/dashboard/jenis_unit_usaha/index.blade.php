@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Jenis Usaha'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-9">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <div class="text-right">
                            <a href="{{ route('jenis_unit_usaha.create') }}" class="btn btn-success waves-effect waves-light"
                                type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Tambah Baru</a>
                        </div>
                        <div class="table-responsive m-t-20">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td>{{ $i +1 }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('jenis_unit_usaha.edit', ['id' => $row->id]) }}" class="btn btn-primary waves-effect waves-light"><span
                                                    class="btn-label"><i class="zmdi zmdi-edit"></i></span>Edit</a>
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-jenis-unit-usaha btn-danger waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="zmdi zmdi-delete"></i></span>Hapus</button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('jenis_unit_usaha.destroy', ['id' => $row->id]) }}">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="text-center" colspan="4">Data Kosong</td>
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
<script src="{{ asset('admin/js/custom.js') }}"></script>
@endsection