@extends('app')

@section("title")
	{{ $blog->judul }} -
@endsection

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Beranda 
				</a>
				<a href="{{ route("page.daftar_blog") }}" class="breadcrumb-item f1-s-3 cl9">
					Blog 
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $blog->judul }}
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				@include("inc.search_bar")
			</div>
		</div>
	</div>
	<!-- Content -->
	<section class="bg0 p-b-70 p-t-5">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url({{ asset("website/images/blog/".$blog->gambar) }});">
			<div class="container h-full flex-col-e-c p-b-58">
				<a href="#" class="f1-s-10 cl0 hov-cl10 trans-03 text-uppercase txt-center m-b-33">
					{{ $blog->kategori->nama }}
				</a>

				<h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">
					{{ $blog->judul }}
				</h3>

				<div class="flex-wr-c-s">
					<span class="f1-s-3 cl0 m-r-15">
						<a href="#" class="f1-s-4 cl0 hov-cl10 trans-03">
							oleh {{ $blog->penulis->nama }}
						</a>
						<span class="m-rl-3">-</span>
						<span>
							Terbit {{ $blog->created_at->format("d M, Y") }}
						</span>
						<span class="m-l-10">
							Update {{ $blog->updated_at->format("d M, Y") }}
						</span>
					</span>
					<span class="f1-s-3 cl0 m-r-15">
						Dikunjungi {{ $blog->dikunjungi }}
					</span>
				</div>
			</div>
		</div>
		@if(!Auth::guest())
			@if(Auth::user()->id_jenis == 1)
				<div class="text-center m-t-40">
					<a href="{{ route("blog.edit", ["id" => $blog->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
						Edit Blog
					</a>
					<a href="{{ route("blog.gambar", ["id" => $blog->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
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
								{!! $blog->isi !!}
							</div>

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
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
				
				<div class="col-md-10 col-lg-4 p-b-100">
					<div class="p-l-10 p-rl-0-sr991">
						@include("inc.sidebar")
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection