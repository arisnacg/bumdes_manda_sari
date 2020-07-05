@extends('app')

@section("title")
	@if($req->search)
		Hasil pencarian untuk "{{ $req->search }}"
	@elseif($anggota)
		{{ $anggota->nama }}
	@endif
	 - 
@endsection

@section('content')
		
	<!-- Breadcrumb -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="/" class="breadcrumb-item f1-s-3 cl9">
					Beranda
				</a>
				<a href="{{ route("page.program", ["url" => $anggota->program->url]) }}" class="breadcrumb-item f1-s-3 cl9">
					{{ $anggota->program->judul }}
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $anggota->nama }}
				</span>
			</div>
			
			<form method="GET" action="{{ route("page.daftar_usaha") }}">
				<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
					<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search" value="{{ $req->search }}">
					<button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Post -->
	<section class="bg0 p-t-20 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80" style="padding: 0 30px 40px">
					<div class="text-center">
						<span class="text-success f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">ANGGOTA</span>
						<h4 style="font-size: 20px" class="f1-l-3 cl2 p-b-16 p-t-16 respon2">
							{{ $anggota->program->judul }}
						</h4>
						<img class="m-t-20" width="150" src="{{ asset("website/images/anggota_program/".$anggota->foto) }}" alt="IMG">
					</div>
					<ul class="list-group m-t-20">
						 <li class="list-group-item row justify-content-start d-flex">
						 	<div class="col-sm-12 col-md-2"><b>Nama</b></div>
						 	<div class="col-sm-12 col-md-9">{{ $anggota->nama }}</div>
						 </li>
						 <li class="list-group-item row justify-content-start d-flex">
						 	<div class="col-sm-12 col-md-2"><b>Umur</b></div>
						 	<div class="col-sm-12 col-md-9">{{ $anggota->umur }} Tahun</div>
						 </li>
						 <li class="list-group-item row justify-content-start d-flex">
						 	<div class="col-sm-12 col-md-2"><b>Pekerjaan</b></div>
						 	<div class="col-sm-12 col-md-9">{{ $anggota->pekerjaan }}</div>
						 </li>
						 <li class="list-group-item row justify-content-start d-flex">
						 	<div class="col-sm-12 col-md-2"><b>Alamat</b></div>
						 	<div class="col-sm-12 col-md-9">{{ $anggota->alamat }}</div>
						 </li>
					</ul>
					<div class="deskripsi m-t-20">
						<h2 class="text-success"><b>Informasi Tambahan :</b></h2>
						{!! $anggota->informasi !!}
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						@include("inc.sidebar")
					</div>
				</div>
			</div>
		</div>
	</section>
		
	
@endsection

@section("css")

<style type="text/css">
	
/* tab program */

.nav-program .nav-item .nav-link {
  padding: 10px 20px;
  border-radius: 0;
  color: #555;
  border: none;
  font-weight: bold;
}

.nav-program .nav-item .nav-link.active {
	background: #1a976c;
	color: #fff;
}

.nav-program {
    border-bottom: 2px solid #1a976c;
}

</style>

@endsection