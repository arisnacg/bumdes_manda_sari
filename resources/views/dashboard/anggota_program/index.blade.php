@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Anggota'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            <li><a href="{{ route("program.index") }}">Program</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <h5><b>{{ $program->judul }}</b></h5>
                        <hr>
                        <div class="text-right">
                            <a href="{{ route('anggota_program.add', ['id_program' => $program->id]) }}" class="btn btn-success waves-effect waves-light"
                                type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Tambah Baru</a>
                        </div>
                        <div class="table-responsive m-t-20">
                            <table class="table" id="tableTour">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td>{{ $i +1 }}</td>
                                        <td>
                                             <a href="{{ asset("website/images/anggota_program/".$row->foto) }}" target="_blank">
                                                <img class="img-circle img-thumbnail" width="50" src="{{ asset("website/images/anggota_program/".$row->foto) }}" alt="IMG">
                                            </a>
                                        </td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->umur }} Tahun</td>
                                        <td class="text-center">
                                            <a href="{{ route('anggota_program.ganti_foto', ['id' => $row->id]) }}" class="btn btn-info waves-effect waves-light"><span
                                                    class="btn-label"><i class="zmdi zmdi-photo-size-select-large"></i></span>Ganti foto</a>
                                            <a href="{{ route('anggota_program.edit', ['id' => $row->id]) }}" class="btn btn-primary waves-effect waves-light"><span
                                                    class="btn-label"><i class="zmdi zmdi-edit"></i></span>Edit</a>
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-aanggota-program btn-danger waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="zmdi zmdi-delete"></i></span>Hapus</button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('anggota_program.destroy', ['id' => $row->id]) }}">
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

@section('css')
    <link href="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
<script>
    $("#tableTour").DataTable()
</script>
@endsection