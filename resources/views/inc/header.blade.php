<!-- Header -->
<header>
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<div class="topbar">
			<div class="content-topbar container h-100">
				<div class="left-topbar">
					<!-- <span class="left-topbar-item flex-wr-s-c">
			<span>
			  New York, NY
			</span>

			<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

			<span>
			  HI 58° LO 56°
			</span>
		  </span> -->

					<a href="about.html" class="left-topbar-item">
						Tentang Kami
					</a>

					<a href="#" class="left-topbar-item">
						Kontak
					</a>

					<a href="{{ route("login") }}" class="left-topbar-item">
						Log in
					</a>
				</div>

				<div class="right-topbar">
					<a href="#">
						<span class="fab fa-facebook-f"></span>
					</a>

					<a href="#">
						<span class="fab fa-twitter"></span>
					</a>

					<a href="#">
						<span class="fab fa-pinterest-p"></span>
					</a>

					<a href="#">
						<span class="fab fa-vimeo-v"></span>
					</a>

					<a href="#">
						<span class="fab fa-youtube"></span>
					</a>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="{{ asset("website/images/icons/logo-01.png") }}" alt="IMG-LOGO"></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li class="left-topbar">
					<!-- <span class="left-topbar-item flex-wr-s-c">
			<span>
			  New York, NY
			</span>

			<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

			<span>
			  HI 58° LO 56°
			</span>
		  </span> -->
				</li>

				<li class="left-topbar">
					<a href="#" class="left-topbar-item">
						About
					</a>

					<a href="#" class="left-topbar-item">
						Contact
					</a>

					<a href="#" class="left-topbar-item">
						Sing up
					</a>

					<a href="#" class="left-topbar-item">
						Log in
					</a>
				</li>

				<li class="right-topbar">
					<a href="#">
						<span class="fab fa-facebook-f"></span>
					</a>

					<a href="#">
						<span class="fab fa-twitter"></span>
					</a>

					<a href="#">
						<span class="fab fa-pinterest-p"></span>
					</a>

					<a href="#">
						<span class="fab fa-vimeo-v"></span>
					</a>

					<a href="#">
						<span class="fab fa-youtube"></span>
					</a>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Beranda</a>
				</li>

				<li>
					<a href="category-01.html">unitusaha</a>
				</li>

				<li>
					<a href="category-02.html">Entertainment </a>
				</li>

				<li>
					<a href="category-01.html">Business</a>
				</li>

				<li>
					<a href="category-02.html">Travel</a>
				</li>

				<li>
					<a href="category-01.html">Life Style</a>
				</li>

				<li>
					<a href="category-02.html">Video</a>
				</li>

				<li>
					<a href="#">Features</a>
					<ul class="sub-menu-m">
						<li><a href="category-01.html">Category Page v1</a></li>
						<li><a href="category-02.html">Category Page v2</a></li>
						<li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
						<li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
						<li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
						<li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
						<li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
			</ul>
		</div>

		<!--  -->
		<div class="wrap-logo no-banner container">
			<!-- Logo desktop -->
			<div class="logo">
				<a href="index.html"><img src="{{ asset("website/images/icons/logo-01.png") }}" alt="LOGO"></a>
			</div>
		</div>

		<!--  -->
		<div class="wrap-main-nav">
			<div class="main-nav">
				<!-- Menu desktop -->
				<nav class="menu-desktop">
					<a class="logo-stick" href="index.html">
						<img src="{{ asset("website/images/icons/logo-01.png") }}" alt="LOGO">
					</a>

					<ul class="main-menu justify-content-center">
						<li class="main-menu-active">
							<a href="index.html">Beranda</a>
						</li>

						<li class="mega-menu-item">
							<a href="#" class="with-sub">Usaha</a>

							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" data-toggle="pill" href="#unitusaha-0"
										role="tab">Semua</a>
									@if(count($data["jenis_unit_usaha"]))
										@foreach($data["jenis_unit_usaha"] as $jenis_unit_usaha)
											<a class="nav-link" data-toggle="pill" href="#unitusaha-{{ $jenis_unit_usaha->id }}"
												role="tab">
												{{ $jenis_unit_usaha->nama }}
											</a>
										@endforeach
									@endif
								</div>

								<div class="tab-content">
									@if(count($data["jenis_unit_usaha"]))
										<div class="tab-pane show active" id="unitusaha-0" role="tabpanel">
											<div class="row">
											@foreach($data["jenis_unit_usaha"] as $jenis_unit_usaha)
												@if(count($jenis_unit_usaha->unit_usaha))
													@foreach($jenis_unit_usaha->unit_usaha as $unit_usaha)
														<div class="col-3">
															<!-- Item post -->	
															<div style="padding-bottom: 40px">
																<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="wrap-pic-w hov1 trans-03">
																	<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
																</a>
		
																<div class="p-t-10">
																	<h5 class="p-b-5">
																		<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
																			{{ $unit_usaha->nama }}
																		</a>
																	</h5>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											@endforeach
											</div>
										</div>
										@foreach($data["jenis_unit_usaha"] as $i => $jenis_unit_usaha)
											@if(count($jenis_unit_usaha->unit_usaha))
												<div class="tab-pane show" id="unitusaha-{{ $jenis_unit_usaha->id }}" role="tabpanel">
													<div class="row">
														@foreach($jenis_unit_usaha->unit_usaha as $unit_usaha)
															<div class="col-3">
																<!-- Item post -->	
																<div>
																	<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="wrap-pic-w hov1 trans-03">
																		<img src="{{ asset("website/images/usaha/".$unit_usaha->gambar) }}" alt="IMG">
																	</a>
			
																	<div class="p-t-10">
																		<h5 class="p-b-5">
																			<a href="{{ route("page.unit_usaha", ["url" => $unit_usaha->url]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
																				{{ $unit_usaha->nama }}
																			</a>
																		</h5>
																	</div>
																</div>
															</div>
														@endforeach
													</div>
												</div>
											@endif
										@endforeach
									@endif
								</div>
							</div>
						</li>
						<li>
							<a href="{{ route("page.daftar_blog") }}">Blog</a>
						</li>
						<li>
							<a href="about.html">Tentang Kami</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
