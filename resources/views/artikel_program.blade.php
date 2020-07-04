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
					    <a class="nav-link active" href="{{ route("page.program.artikel", ["id" => $program->id]) }}">ARTIKEL</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="{{ route("page.program.anggota", ["id" => $program->id]) }}">ANGGOTA</a>
					  </li>
					</ul>
					{{-- Artikel --}}
					<div class="row m-t-40">
						@foreach($daftar_artikel as $artikel_program)
							<div class="col-sm-6 p-r-25 p-r-15-sr991">
								<!-- Item latest -->	
								<div class="m-b-45">
									<a href="{{ route("page.artikel_program", ["url" => $artikel_program->url]) }}" class="wrap-pic-w hov1 trans-03">
										<img src="{{ asset("website/images/artikel_program/".$artikel_program->gambar) }}" alt="IMG">
									</a>

									<div class="p-t-16">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
												{{ $artikel_program->judul }}
											</a>
										</h5>

										<div class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												oleh {{ $artikel_program->penulis->nama }}
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Terbit {{ $artikel_program->created_at->format("d M, Y") }}
											</span>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>

					{{ $daftar_artikel->links() }}
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