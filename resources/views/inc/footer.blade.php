<footer>
	<div class="bg2 p-t-40 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<a href="index.html">
							<img class="max-s-full" src="{{ asset("website/images/icons/logo-01.png") }}" alt="LOGO">
						</a>
					</div>
					<div>
						<p class="f1-s-1 cl11 p-b-16">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at, facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio
						</p>
						<p class="f1-s-1 cl11 p-b-16">
							{{ $data["informasi"]->no_telepon }}
						</p>
						<div class="p-t-15">
							<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
								<span class="fab fa-facebook-f"></span>
							</a>
							<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
								<span class="fab fa-twitter"></span>
							</a>
							<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
								<span class="fab fa-pinterest-p"></span>
							</a>
							<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
								<span class="fab fa-vimeo-v"></span>
							</a>
							<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
								<span class="fab fa-youtube"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Postingan Popular
						</h5>
					</div>
					<ul>
						@if(count($data["blog_populer"]))
							@foreach($data["blog_populer"] as $e)
								<li class="flex-wr-sb-s p-b-20">
									<a href="{{ route("page.blog", ["url" => $e->url]) }}" class="size-w-4 wrap-pic-w hov1 trans-03">
										<img src="{{ asset("website/images/blog/".$e->gambar) }}" alt="IMG">
									</a>

									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="{{ route("page.blog", ["url" => $e->url]) }}" class="f1-s-5 cl11 hov-cl10 trans-03">
												{{ $e->judul }}
											</a>
										</h6>

										<span class="f1-s-3 cl6">
											Terbit {{ $e->created_at->format("d M, Y") }}
										</span>
									</div>
								</li>
							@endforeach
						@endif
					</ul>
				</div>
				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Jenis Usaha
						</h5>
					</div>
					<ul class="m-t--12">
						@if(count($data["jenis_unit_usaha"]))
							@foreach($data["jenis_unit_usaha"] as $jenis_unit_usaha)
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
										Unit Usaha {{ $jenis_unit_usaha->nama }} ({{ count($jenis_unit_usaha->unit_usaha) }})
									</a>
								</li>
							@endforeach
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="bg11">
		<div class="container size-h-4 flex-c-c p-tb-15">
			<span class="f1-s-1 cl0 txt-center">
				Copyright © 2018 

				<a href="#" class="f1-s-1 cl10 hov-link1">Colorlib.</a>

				All rights reserved.
			</span>
		</div>
	</div>
</footer>