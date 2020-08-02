@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Unit Usaha'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <div class="text-right">
                            <a href="{{ route('unit_usaha.create') }}" class="btn btn-success waves-effect waves-light"
                                type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Tambah Baru</a>
                        </div>
                        <div class="m-t-20">
                            <table class="table table-hover" id="tableTour">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td class="text-center">{{ $i +1 }}</td>
                                        <td><a target="_blank" href="{{ route("page.unit_usaha", ["url" => $row->url]) }}">{{ $row->nama }}</a></td>
                                        <td>{{ $row->jenis->nama }}</td>
                                        <td class="text-center">
                                            <a href="{{ '/website/images/usaha/'.$row->gambar }}" target="_blank" class="btn btn-info waves-effect waves-light">
                                                <i class="zmdi zmdi-image"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            {{-- <a href="{{ route('unit_usaha.manage', ['id' => $row->id]) }}" class="btn btn-primary waves-effect waves-light">
                                                <i class="zmdi zmdi-settings"></i></span>
                                            </a> --}}
                                            <div class="btn-group">
                                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button">
                                                    <i class="zmdi zmdi-settings"></i> <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="{{ route("unit_usaha.deskripsi", ["id" => $row->id]) }}">Deskripsi</a></li>
                                                    <li><a href="{{ route("unit_usaha.gambar", ["id" => $row->id]) }}">Gambar</a></li>
                                                    <li><a href="{{ route("gallery_usaha.gallery", ["id_unit_usaha" => $row->id]) }}">Gallery</a></li>
                                                </ul>
                                            </div>            
                                            <a href="{{ route('unit_usaha.edit', ['id' => $row->id]) }}" class="btn btn-warning waves-effect waves-light">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-unit-usaha btn-danger waves-effect waves-light"
                                                type="button"><i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('unit_usaha.destroy', ['id' => $row->id]) }}">
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
    <link href="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
<script>
    $("#tableTour").DataTable({
        "fnDrawCallback": function (oSettings) {
            //Unit Usaha
            $(".btn-delete-unit-usaha").click(function () {
                let button = $(this)
                Swal({
                    title: "Anda Yakin?",
                    text: "Unit usaha ini akan terhapus secara permanen",
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