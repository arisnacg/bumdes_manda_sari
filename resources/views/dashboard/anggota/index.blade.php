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
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <div class="text-right">
                            <a href="{{ route('anggota.create') }}" class="btn btn-success waves-effect waves-light"
                                type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Tambah Baru</a>
                        </div>
                        <div class="table-responsive m-t-20">
                            <table class="table" id="tableTour">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Pendidikan</th>
                                        <th>No Telp</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td>{{ $i +1 }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->jabatan }}</td>
                                        <td>{{ $row->pendidikan }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('anggota.edit', ['id' => $row->id]) }}" class="btn btn-primary waves-effect waves-light"><i class="zmdi zmdi-edit"></i></a>
                                            <button data-id="{{ $row->id }}" class="btn btn-hapus-anggota btn-danger waves-effect waves-light"
                                                type="button"><i class="zmdi zmdi-delete"></i></button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('anggota.destroy', ['id' => $row->id]) }}">
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
    $("#tableTour").DataTable({
        "fnDrawCallback": function (oSettings) {
            //Anggota Program
            $(".btn-hapus-anggota").click(function () {
                let button = $(this)
                Swal({
                    title: "Anda Yakin?",
                    text: "Data anggota ini akan terhapus secara permanen",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Tidak",
                    confirmButtonColor: "#ea6554",
                    confirmButtonText: "Ya, lanjutkan!"
                }).then(function (result) {
                    if (result.value) {
                        $("#formDelete" + button.data("id")).submit()
                    }
                });
            })
        }
    })
</script>
@endsection