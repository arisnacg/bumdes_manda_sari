@extends('app')

@section("title")
	@if($req->search)
		Hasil pencarian untuk "{{ $req->search }}"
	@elseif($program)
		{{ $program->nama }}
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
				<span class="breadcrumb-item f1-s-3 cl9">
					Program
				</span>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $program->nama }}
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
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="f1-l-1 cl2 p-b-30" style="font-size: 24px"> <span class="text-success">{{ $program->nama }}</span></h5>
							<div class="program-deskripsi">
								{!! $program->deskripsi !!}
							</div>
						</div>
					</div>
					<ul class="nav nav-program nav-tabs m-t-20">
					  <li class="nav-item">
					    <a class="nav-link" href="{{ route("page.program.artikel", ["id" => $program->id]) }}">ARTIKEL</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" href="{{ route("page.program.anggota", ["id" => $program->id]) }}">ANGGOTA</a>
					  </li>
					</ul>
					{{-- Artikel --}}
					<div class="row m-t-40 anggota-program">
						@foreach($daftar_anggota as $anggota_program)
							<div class="d-flex align-items-start p-t-20 p-b-15 how-bor2" style="padding: 20px">
								<a href="#">
									<img width="120" src="{{ asset("website/images/anggota_program/".$anggota_program->foto) }}" alt="IMG">
								</a>

								<div class="tentang" style="padding: 20px">
									<h4 class="p-b-12" style="font-weight: bold;">
										{{ $anggota_program->nama }}
									</h4>
									<div class="informasi">
										{!! $anggota_program->informasi !!}
									</div>
								</div>
							</div>
						@endforeach
					</div>

					{{ $daftar_anggota->links() }}
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