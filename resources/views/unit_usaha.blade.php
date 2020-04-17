@extends('app')

@section("title")
	{{ $unit_usaha->nama }} -
@endsection

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Beranda 
				</a>
				<a href="#" class="breadcrumb-item f1-s-3 cl9">
					Usaha 
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $unit_usaha->nama }}
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				@include("inc.search_bar")
			</div>
		</div>
	</div>
	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Usaha Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								{{ $unit_usaha->jenis->nama }}
							</a>
							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								{{ $unit_usaha->nama }}
							</h3>
							@if(!Auth::guest())
								@if(Auth::user()->id_jenis == 1)
									<div class="text-left m-b-20">
										<a href="{{ route("unit_usaha.deskripsi", ["id" => $unit_usaha->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
											Edit Deskripsi
										</a>
										<a href="{{ route("unit_usaha.gambar", ["id" => $unit_usaha->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
											Ganti Gambar
										</a>
									</div>
								@endif
							@endif
							<div class="wrap-pic-max-w p-b-30">
								<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
							</div>
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										oleh {{ $unit_usaha->penulis->nama }}
									</a>
									<span class="m-rl-3">-</span>
									<span>
										Terbit {{ $unit_usaha->created_at->format("d M, Y") }}
									</span>
									<span class="m-l-10">
										Update {{ $unit_usaha->updated_at->format("d M, Y") }}
									</span>
								</span>
								<span class="f1-s-3 cl8 m-r-15">
									Dikunjungi {{ $unit_usaha->dikunjungi }}
								</span>
							</div>
							<!-- Deskripsi -->
							<div class="deskripsi">
								{!! $unit_usaha->deskripsi !!}
							</div>

							<!-- Share -->
							<div class="flex-s-s">
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
							</div>
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				@include("inc.sidebar")
			</div>
		</div>
	</section>
@endsection