@extends('app')

@section("title")
	@if($req->search)
		Hasil pencarian untuk "{{ $req->search }}"
	@elseif($kerjasama)
		{{ $kerjasama->nama }}
	@else
		Kerja Sama
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
					Kerja Sama
				</span>
			</div>
			
			<form method="GET" action="{{ route("page.kerjasama") }}">
				<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
					<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search" value="{{ $req->search }}">
					<button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		@if($req->search)
			<h5 class="f1-l-1 cl2" style="font-size: 24px"> Hasil pencarian untuk <span class="text-success">{{ $req->search }}</span></h5>
		@elseif($kerjasama)
			<h5 class="f1-l-1 cl2" style="font-size: 24px"> <span class="text-success">{{ $kerjasama->nama }}</span></h5>
		@else
			<h2 class="f1-l-1 cl2">Usaha</h2>
		@endif
	</div>

	<!-- Post -->
	<section class="bg0 p-t-40 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
						@foreach($daftar_program as $program)
							<div class="col-sm-6 p-r-25 p-r-15-sr991">
								<!-- Item latest -->	
								<div class="m-b-45">
									<a href="{{ route("page.unit_usaha", ["url" => $program->url]) }}" class="wrap-pic-w hov1 trans-03">
										<img src="{{ asset("website/images/program/".$program->gambar) }}" alt="IMG">
									</a>

									<div class="p-t-16">
										<h5 class="p-b-5">
											<a href="{{ route("page.program", ["url" => $program->url]) }}" class="f1-m-3 cl2 hov-cl10 trans-03">
												{{ $program->judul }}
											</a>
										</h5>

										<div class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												oleh {{ $program->penulis->nama }}
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Terbit {{ $program->created_at->format("d M, Y") }}
											</span>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>

					{{ $daftar_program->links() }}
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