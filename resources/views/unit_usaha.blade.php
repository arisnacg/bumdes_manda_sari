@extends('app')

@section("title")
	{{ $unit_usaha->nama }} -
@endsection

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="/" class="breadcrumb-item f1-s-3 cl9">
					Beranda 
				</a>
				<a href="{{ route("page.daftar_usaha") }}" class="breadcrumb-item f1-s-3 cl9">
					Usaha 
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $unit_usaha->nama }}
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
							@if(count($unit_usaha->gallery) == 0)
								<div class="wrap-pic-max-w p-b-10">
									<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
								</div>
							@else
								<!-- Gallery -->
								<div class="gallery-usaha">
									 <!-- Flickity HTML init -->
									<div class="carousel carousel-main" data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>
										<div class="carousel-cell">
										  	<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
										 </div>
									  @foreach($unit_usaha->gallery as $e)
									  	<div class="carousel-cell">
										  	<img src="{{ asset("website/images/gallery_usaha/".$e->gambar) }}" />
										 </div>
									  @endforeach
									</div>

									<div class="carousel carousel-nav"
									  data-flickity='{ "prevNextButtons": false, "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
									  <div class="carousel-cell">
									  	<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
									 </div>
									  @foreach($unit_usaha->gallery as $e)
									  	<div class="carousel-cell">
									  		<img src="{{ asset("website/images/gallery_usaha/".$e->gambar) }}" />
									  	</div>
									  @endforeach
									</div>
								</div>
							@endif
							<div class="flex-wr-s-s p-b-40 p-t-20">
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
							<div class="flex-s-s p-t-40">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								{!! Share::currentPage($unit_usaha->nama, [], '', '')->facebook()->twitter()->whatsapp()->telegram() !!}
							</div>
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">
						@include("inc.sidebar")
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section("js")
<script src="{{ asset("website/vendor/flickity/flickity.pkgd.min.js") }}"></script>
<script src="{{ asset("website/js/gallery.js") }}"></script>

@endsection
@section("css")
<link rel="stylesheet" type="text/css" href="{{  asset("website/vendor/flickity/flickity.min.css") }}">
<link rel="stylesheet" type="text/css" href="{{  asset("website/css/gallery.css") }}">
@endsection