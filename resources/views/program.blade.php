@extends('app')

@section("title")
	{{$program->judul }} -
@endsection

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="/" class="breadcrumb-item f1-s-3 cl9">
					Beranda 
				</a>
				<a href="{{ route("page.daftar_blog") }}" class="breadcrumb-item f1-s-3 cl9">
					Artikel
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{$program->judul }}
				</span>
			</div>

			<form method="GET" action="{{ route("page.daftar_blog") }}">
				<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
					<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
					<button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Content -->
	<section class="bg0 p-b-70 p-t-5">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url({{ asset("website/images/program/".$program->gambar) }});">
			<div class="container h-full flex-col-e-c p-b-58">
				<a href="#" class="f1-s-10 cl0 hov-cl10 trans-03 text-uppercase txt-center m-b-33">
					{{$program->kerjasama->nama }}
				</a>

				<h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">
					{{$program->judul }}
				</h3>

				<div class="flex-wr-c-s">
					<span class="f1-s-3 cl0 m-r-15">
						<a href="#" class="f1-s-4 cl0 hov-cl10 trans-03">
							oleh {{$program->penulis->nama }}
						</a>
						<span class="m-rl-3">-</span>
						<span>
							Terbit {{$program->created_at->format("d M, Y") }}
						</span>
						<span class="m-l-10">
							Update {{$program->updated_at->format("d M, Y") }}
						</span>
					</span>
					<span class="f1-s-3 cl0 m-r-15">
						Dikunjungi {{$program->dikunjungi }}
					</span>
				</div>
			</div>
		</div>
		@if(!Auth::guest())
			@if(Auth::user()->id_jenis == 1)
				<div class="text-center m-t-40">
					<a href="{{ route("program.edit", ["id" =>$program->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
						Edit Artikel
					</a>
					<a href="{{ route("program.gambar", ["id" =>$program->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
						Ganti Gambar
					</a>
				</div>
			@endif
		@endif
		<!-- Detail -->
		<div class="container p-t-60">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-100">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<!-- Deskripsi -->
							<div class="deskripsi">
								{!!$program->isi !!}
							</div>

							<!-- Tag -->
							{{-- <div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Streetstyle
									</a>

									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Crafts
									</a>
								</div>
							</div> --}}

							<h1 class="text-center anggota-title">ANGGOTA</h1>
							<div class="daftar-anggota flex-wrap d-flex justify-content-around">
								@if(false)
									@foreach($program->anggota as $anggota)
										<div class="anggota">
											<a href="#">
		                                        <img class="img-circle img-thumbnail" width="80" src="{{ asset("website/images/anggota_program/".$anggota->foto) }}" alt="IMG">
		                                        <h4 class="nama-anggota">{{ $anggota->nama }}</h4>
		                                    </a>
										</div>
									@endforeach
								@else
									<h1 class="text-muted text-center">Belum Terdapat Anggota</h1>
								@endif
							</div>
							<!-- Share -->
							<div class="flex-s-s m-t-40">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								{!! Share::currentPage($program->judul, [], '', '')->facebook()->twitter()->whatsapp()->telegram() !!}
							</div>
							{{-- <div class="flex-s-s m-t-40">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
				
				<div class="col-md-10 col-lg-4 p-b-100">
					<div class="p-l-10 p-rl-0-sr991">
						@include("inc.sidebar")
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section("js")
	<script src="{{ asset('js/share.js') }}"></script>
@endsection