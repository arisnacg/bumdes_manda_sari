@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Blog'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <div class="text-right">
                            <a href="{{ route('blog.create') }}" class="btn btn-success waves-effect waves-light"
                                type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Tambah Baru</a>
                        </div>
                        <div class="m-t-20">
                            <table class="table table-hover" id="tableTour">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Terbit</th>
                                        <th class="text-center">Dikunjungi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td class="text-center">{{ $i +1 }}</td>
                                        <td><a target="_blank" href="{{ route("page.blog", ["url" => $row->url]) }}">{{ $row->judul }}</a></td>
                                        <td>{{ $row->kategori->nama }}</td>
                                        <td>{{ $row->created_at->format("d/m/Y") }}</td>
                                        <td class="text-center">{{ $row->dikunjungi }}</td>
                                        <td class="text-center">   
                                            <a href="{{ '/website/images/usaha/'.$row->gambar }}" target="_blank" class="btn btn-info waves-effect waves-light">
                                                <i class="zmdi zmdi-image"></i>
                                            </a>
                                            <a href="{{ route('blog.edit', ['id' => $row->id]) }}" class="btn btn-warning waves-effect waves-light">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-blog btn-danger waves-effect waves-light"
                                                type="button"><i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('blog.destroy', ['id' => $row->id]) }}">
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
            $(".btn-delete-blog").click(function () {
                let button = $(this)
                Swal({
                    title: "Anda Yakin?",
                    text: "Blog ini akan terhapus secara permanen",
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