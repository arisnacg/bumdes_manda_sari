@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Gallery Usaha'])
            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            <li><a href="{{ route("unit_usaha.index") }}">Usaha</a></li>
            @endcomponent
            <!-- .row -->
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    @include('dashboard.inc.alert')
                    <div class="white-box">
                        <h5>{{ $unit_usaha->nama }}</h5>
                        <hr>
                        <div class="text-right">
                            <a target="_blank" href="{{ route("page.unit_usaha", ['url' => $unit_usaha->url]) }}" class="btn btn-primary waves-effect waves-light" type="button">
                                <span class="btn-label"><i class=" zmdi zmdi-eye"></i></span> Preview Halaman
                            </a>
                            <a href="{{ route('gallery_usaha.add', ['id_unit_usaha' => $unit_usaha->id]) }}" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class=" zmdi zmdi-plus-circle"></i></span>Tambah Baru</a>
                        </div>
                        <hr>
                        <div class="row">
                            @foreach ($data as $i => $row)
                                <div class="col-sm-12 col-md-3 p-b-40">
                                    <img src="{{ '/website/images/gallery_usaha/'.$row->gambar }}" width="100%">
                                     <div class="text-center m-t-10">
                                        <button data-id="{{ $row->id }}" class="btn btn-delete-jenis-unit-usaha btn-danger waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="zmdi zmdi-delete"></i></span>Hapus</button>
                                        <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('gallery_usaha.destroy', ['id' => $row->id]) }}">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="table-responsive m-t-20">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Urutan</th>
                                        <th>Gambar</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data))
                                    @foreach ($data as $i => $row)
                                    <tr>
                                        <td>{{ $i +1 }}</td>
                                        <td>
                                            <a href="{{ '/website/images/gallery_usaha/'.$row->gambar }}" target="_blank" class="btn btn-info waves-effect waves-light">
                                                <span class="btn-label">
                                                    <i class="zmdi zmdi-image"></i>
                                                </span>
                                                Lihat Gambar
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <button data-id="{{ $row->id }}" class="btn btn-delete-jenis-unit-usaha btn-danger waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="zmdi zmdi-delete"></i></span>Hapus</button>
                                            <form id="formDelete{{ $row->id }}" method="POST" action="{{ route('gallery_usaha.destroy', ['id' => $row->id]) }}">
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
                        </div> --}}
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