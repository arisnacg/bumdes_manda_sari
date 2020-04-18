					
<!-- Category -->
<div class="p-b-60">
	<div class="how2 how2-cl4 flex-s-c">
		<h3 class="f1-m-2 cl3 tab01-title">
			Kategori Blog
		</h3>
	</div>

	<ul class="p-t-35">
		@foreach($data["kategori_blog"] as $e)
		<li class="how-bor3 p-rl-4">
			<a href="{{ route("page.daftar_blog", ["id_kategori" => $e->id]) }}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
				{{ $e->nama }}
			</a>
		</li>
		@endforeach
	</ul>
</div>

<!-- Popular Posts -->
<div class="p-b-30">
	<div class="how2 how2-cl4 flex-s-c">
		<h3 class="f1-m-2 cl3 tab01-title">
			Postingan Populer
		</h3>
	</div>

	<ul class="p-t-35">
		@if(count($data["blog_populer"]))
			@foreach($data["blog_populer"] as $e)
				<li class="flex-wr-sb-s p-b-30">
					<a href="{{ route("page.blog", ["url" => $e->url]) }}" class="size-w-10 wrap-pic-w hov1 trans-03">
						<img src="{{ asset("website/images/blog/".$e->gambar) }}" alt="IMG">
					</a>

					<div class="size-w-11">
						<h6 class="p-b-4">
							<a href="{{ route("page.blog", ["url" => $e->url]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
								{{ $e->judul }}
							</a>
						</h6>

						<span class="cl8 txt-center p-b-24">
							<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
								{{ $e->kategori->nama }}
							</a>

							<span class="f1-s-3 m-rl-3">
								-
							</span>

							<span class="f1-s-3">
								Terbit {{ $e->created_at->format("d M, Y") }}
							</span>
						</span>
					</div>
				</li>
			@endforeach
		@endif
	</ul>
</div>


<!-- Archive -->
<div class="p-b-37">
	<div class="how2 how2-cl4 flex-s-c">
		<h3 class="f1-m-2 cl3 tab01-title">
			Archive
		</h3>
	</div>

	<ul class="p-t-32">
		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					July 2018
				</span>

				<span>
					(9)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					June 2018
				</span>

				<span>
					(39)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					May 2018
				</span>

				<span>
					(29)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					April  2018
				</span>

				<span>
					(35)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					March 2018
				</span>

				<span>
					(22)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					February 2018
				</span>

				<span>
					(32)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					January 2018
				</span>

				<span>
					(21)
				</span>
			</a>
		</li>

		<li class="p-rl-4 p-b-19">
			<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
				<span>
					December 2017
				</span>

				<span>
					(26)
				</span>
			</a>
		</li>
	</ul>
</div>


<!-- Tag -->
{{-- <div>
	<div class="how2 how2-cl4 flex-s-c m-b-30">
		<h3 class="f1-m-2 cl3 tab01-title">
			Tags
		</h3>
	</div>

	<div class="flex-wr-s-s m-rl--5">
		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Fashion
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Lifestyle
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Denim
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Streetstyle
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Crafts
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Magazine
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			News
		</a>

		<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			Blogs
		</a>
	</div>	
</div> --}}
