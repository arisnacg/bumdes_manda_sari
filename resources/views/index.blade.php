@extends('app')
@section('content')
	<!-- Headline -->
	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					<b>Postingan Terbaru</b>:
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					@foreach($blog_terbaru as $blog)
						<span class="dis-inline-block slide100-txt-item animated visible-false">
							{{ (strlen($blog->judul) > 100)? substr($blog->judul, 0, 100)."...": $blog->judul }}
						</span>
					@endforeach
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

	<!-- Feature post -->
	@if(count($blog_terbaru) >= 3)
		<section class="bg0">
			<div class="container">
				<div class="row m-rl--1">
					@foreach($blog_terbaru as $i => $blog)
						<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url({{ asset("website/images/blog/".$blog->gambar) }});">
								<a href="{{ route("page.blog", ["url" => $blog->url]) }}" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										{{ $blog->kategori->nama }}
									</a>

									<h3 class="how1-child2 m-t-10">
										<a href="{{ route("page.blog", ["url" => $blog->url]) }}" class="f1-m-1 cl0 hov-cl10 trans-03">
											{{ $blog->judul }}
										</a>
									</h3>
								</div>
							</div>
						</div>
						@if($i == 2 && count($blog_terbaru) < 6)
							@php break @endphp
						@endif
					@endforeach
				</div>
			</div>
		</section>
	@endif

	<!-- Usaha -->
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8">
					@php $ganjil = count($data["jenis_unit_usaha"]) % 2 @endphp
					<!-- Jenis Usaha -->
					@if(!$ganjil) 
						{{-- GENAP --}}
						@if(count($data["jenis_unit_usaha"]))
							@foreach($data["jenis_unit_usaha"] as $i => $jenis_unit_usaha)
								@if(count($jenis_unit_usaha->unit_usaha))
									@if($i % 2 == 0)
										<div class="row">  <!-- {{ $i }} -->
									@endif
									<div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
										<div class="how2 how2-cl{{ $i % 3 + 1 }} flex-sb-c m-b-35">
											<h3 class="f1-m-2 cl1{{ $i % 3 + 2 }} tab01-title">
												{{ $jenis_unit_usaha->nama }}
											</h3>
											{{-- <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
												Lihat Selengkapnya
												<i class="fs-12 m-l-5 fa fa-caret-right"></i>
											</a> --}}
										</div>
										@foreach($jenis_unit_usaha->unit_usaha as $j => $unit_usaha)
											@if($j == 0)
												<div class="m-b-30">
													<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="wrap-pic-w hov1 trans-03">
														<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
													</a>
													<div class="p-t-20">
														<h5 class="p-b-5">
															<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-m-3 cl2 hov-cl10 trans-03">
																{{ $unit_usaha->nama }}
															</a>
														</h5>
														<span class="cl8">
															<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
																Baca Selengkapnya <i class="zmdi zmdi-arrow-right m-l-5"></i>
															</a>
														</span>
													</div>
												</div>
											@else
												<div class="flex-wr-sb-s m-b-30">
													<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="size-w-1 wrap-pic-w hov1 trans-03">
														<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMGDonec metus orci, malesuada et lectus vitae">
													</a>

													<div class="size-w-2">
														<h5 class="p-b-5">
															<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
																{{ $unit_usaha->nama }}
															</a>
														</h5>

														<span class="cl8">
															<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
																Baca Selengkapnya <i class="zmdi zmdi-arrow-right m-l-5"></i>
															</a>
														</span>
													</div>
												</div>
											@endif
										@endforeach
									</div>
									@if($i % 2 == 1 || $i == count($data["jenis_unit_usaha"]) - 1)
										</div> <!-- /row {{ $i }} -->
									@endif
								@endif
							@endforeach
						@endif
					@else
						{{-- GANJIL --}}
						@if(count($data["jenis_unit_usaha"]))
							@foreach($data["jenis_unit_usaha"] as $i => $jenis_unit_usaha)
								@if(count($jenis_unit_usaha->unit_usaha))
									@if($i == 0)
										<div class="row">
											<div class="col-sm-12">
												<div class="how2 how2-cl{{ $i % 3 + 1 }} flex-sb-c m-b-35">
													<h3 class="f1-m-2 cl1{{ $i % 3 + 2 }} tab01-title">
														{{ $jenis_unit_usaha->nama }}
													</h3>
													{{-- <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
														Lihat Selengkapnya
														<i class="fs-12 m-l-5 fa fa-caret-right"></i>
													</a> --}}
												</div>
												<div class="row">
													@foreach($jenis_unit_usaha->unit_usaha as $j => $unit_usaha)
														@if($j == 0)
															<div class="col-sm-6">
																<div class="m-b-30">
																	<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="wrap-pic-w hov1 trans-03">
																		<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
																	</a>
																	<div class="p-t-20">
																		<h5 class="p-b-5">
																			<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-m-3 cl2 hov-cl10 trans-03">
																				{{ $unit_usaha->nama }}
																			</a>
																		</h5>
																		<span class="cl8">
																			<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
																				Baca Selengkapnya <i class="zmdi zmdi-arrow-right m-l-5"></i>
																			</a>
																		</span>
																	</div>
																</div>
															</div>
														@else
															@if($j == 1) <div class="col-sm-6">@endif
															<div class="flex-wr-sb-s m-b-30">
																<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="size-w-1 wrap-pic-w hov1 trans-03">
																	<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMGDonec metus orci, malesuada et lectus vitae">
																</a>

																<div class="size-w-2">
																	<h5 class="p-b-5">
																		<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
																			{{ $unit_usaha->nama }}
																		</a>
																	</h5>

																	<span class="cl8">
																		<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
																			Baca Selengkapnya <i class="zmdi zmdi-arrow-right m-l-5"></i>
																		</a>
																	</span>
																</div>
															</div>
															@if($j == count($jenis_unit_usaha->unit_usaha)-1) </div> @endif
														@endif
													@endforeach
												</div>
											</div>
										</div>
									@else
										@if($i % 2 == 1)
											<div class="row">  <!-- {{ $i }} -->
										@endif
										<div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
											<div class="how2 how2-cl2 flex-sb-c m-b-35">
												<h3 class="f1-m-2 cl13 tab01-title">
													{{ $jenis_unit_usaha->nama }}
												</h3>
												{{-- <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
													Lihat Selengkapnya
													<i class="fs-12 m-l-5 fa fa-caret-right"></i>
												</a> --}}
											</div>
											@foreach($jenis_unit_usaha->unit_usaha as $j => $unit_usaha)
												@if($j == 0)
													<div class="m-b-30">
														<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="wrap-pic-w hov1 trans-03">
															<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
														</a>
														<div class="p-t-20">
															<h5 class="p-b-5">
																<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-m-3 cl2 hov-cl10 trans-03">
																	{{ $unit_usaha->nama }}
																</a>
															</h5>
															<span class="cl8">
																<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Baca Selengkapnya <i class="zmdi zmdi-arrow-right m-l-5"></i>
																</a>
															</span>
														</div>
													</div>
												@else
													<div class="flex-wr-sb-s m-b-30">
														<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="size-w-1 wrap-pic-w hov1 trans-03">
															<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMGDonec metus orci, malesuada et lectus vitae">
														</a>

														<div class="size-w-2">
															<h5 class="p-b-5">
																<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
																	{{ $unit_usaha->nama }}
																</a>
															</h5>

															<span class="cl8">
																<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Baca Selengkapnya <i class="zmdi zmdi-arrow-right m-l-5"></i>
																</a>
															</span>
														</div>
													</div>
												@endif
											@endforeach
										</div>
										@if($i % 2 == 0 || $i == count($data["jenis_unit_usaha"]) - 1)
											</div> <!-- /row {{ $i }} -->
										@endif
									@endif
								@endif
							@endforeach
						@endif
					@endif

					<div class="how2 how2-cl4 flex-s-c">
						<h3 class="f1-m-2 cl3 tab01-title">
							Blog Terbitan Terbaru
						</h3>
					</div>
					<!-- Blo Terbaru -->
					@if(count($blog_terbaru))
						@foreach($blog_terbaru as $i => $blog)
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
							@if($i == 2) @php break @endphp @endif
						@endforeach
					@endif
					<a href="{{ route("page.daftar_blog") }}" class="m-b-60 flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
						Lihat Blog Lainnya
					</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					@include("inc.sidebar")
				</div>
			</div>
		</div>
	</section>

@endsection