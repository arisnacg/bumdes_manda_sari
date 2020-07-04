@extends('app')

@section("title")
	@if($req->search)
		Hasil pencarian untuk "{{ $req->search }}"
	@elseif($kategori_blog)
		{{ $kategori_blog->nama }}
	@else
		Blog
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
					Blog
				</span>
			</div>
			
			<form method="GET" action="{{ route("page.daftar_blog") }}">
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
		@elseif($kategori_blog)
			<h5 class="f1-l-1 cl2" style="font-size: 24px"><span class="text-success">{{ $kategori_blog->nama }}</span></h5>
		@else
			<h2 class="f1-l-1 cl2">Blog</h2>
		@endif
	</div>

	<!-- Post -->
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--40 p-b-40">
							<!-- Item post -->
							@if(count($daftar_blog))
								@foreach($daftar_blog as $blog)
									<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
										<a href="{{ route("page.blog", ["url" => $blog->url]) }}" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
											<img src="{{ asset("website/images/blog/".$blog->gambar) }}" alt="IMG">
										</a>

										<div class="size-w-9 w-full-sr575 m-b-25">
											<h5 class="p-b-12">
												<a href="{{ route("page.blog", ["url" => $blog->url]) }}" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
													{{ $blog->judul }}
												</a>
											</h5>

											<div class="cl8 p-b-18">
												<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
													oleh {{ $blog->penulis->nama }}
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Terbit {{ $blog->created_at->format("d M, Y") }}
												</span>
											</div>

											<p class="f1-s-1 cl6 p-b-24">
												{!! substr($blog->isi, 0, 100)."..." !!}
											</p>

											<a href="{{ route("page.blog", ["url" => $blog->url]) }}" class="f1-s-1 cl9 hov-cl10 trans-03">
												Baca Selengkapnya
												<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
											</a>
										</div>
									</div>
								@endforeach
							@endif
						</div>

						{{ $daftar_blog->links() }}
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