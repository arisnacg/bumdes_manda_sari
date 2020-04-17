@extends('app')
@section('content')
		
	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					Beranda
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>
		
	{{-- <!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(images/post-28.jpg);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								Life Style
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="blog-detail-01.html" class="f1-m-1 cl0 hov-cl10 trans-03">
									Microsoft quisque at ipsum vel orci eleifend ultrices
								</a>
							</h3>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(images/post-29.jpg);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								Technology
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="blog-detail-01.html" class="f1-m-1 cl0 hov-cl10 trans-03">
									London ipsum dolor sit amet, consectetur adipiscing elit.
								</a>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(images/post-30.jpg);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								Technology
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="blog-detail-01.html" class="f1-m-1 cl0 hov-cl10 trans-03">
									Pellentesque dui nibh, pellentesque ut dapibus ut
								</a>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(images/post-31.jpg);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								Sport
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="blog-detail-01.html" class="f1-m-1 cl0 hov-cl10 trans-03">
									Microsoft quisque at ipsum vel orci eleifend ultrices
								</a>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(images/post-32.jpg);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								Culture
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="blog-detail-01.html" class="f1-m-1 cl0 hov-cl10 trans-03">
									London ipsum dolor sit amet, consectetur adipiscing elit.
								</a>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(images/post-33.jpg);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								Technology
							</a>

							<h3 class="how1-child2 m-t-10">
								<a href="blog-detail-01.html" class="f1-m-1 cl0 hov-cl10 trans-03">
									Apple iPhone X dui nibh, pellentesque ut dapibus ut
								</a>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<!-- Post -->
	{{-- <section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">
						<!-- Entertainment  -->
						<div class="p-b-20">
							<div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
								<h3 class="f1-m-2 cl12 tab01-title">
									Entertainment
								</h3>


								<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>

							<div class="row p-t-35">
								<div class="col-sm-6 p-r-25 p-r-15-sr991">
									<!-- Item post -->	
									<div class="m-b-30">
										<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
											<img src="images/post-05.jpg" alt="IMG">
										</a>

										<div class="p-t-20">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
													American live music lorem ipsum dolor sit amet consectetur 
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
													Music
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 18
												</span>
											</span>
										</div>
									</div>
								</div>

								<div class="col-sm-6 p-r-25 p-r-15-sr991">
									<!-- Item post -->	
									<div class="flex-wr-sb-s m-b-30">
										<a href="#" class="size-w-1 wrap-pic-w hov1 trans-03">
											<img src="images/post-06.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
										</a>

										<div class="size-w-2">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Donec metus orci, malesuada et lectus vitae
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
													Music
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 17
												</span>
											</span>
										</div>
							blog-detail-01.html	</div>

									<!-- Item post -->
									<div class="flex-wr-sb-s m-b-30">
										<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
											<img src="images/post-07.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
										</a>

										<div class="size-w-2">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Donec metus orci, malesuada et lectus vitae
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
													Game
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 16
												</span>
											</span>
										</div>
									</div>

									<!-- Item post -->
									<div class="flex-wr-sb-s m-b-30">
										<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
											<img src="images/post-08.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
										</a>

										<div class="size-w-2">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Donec metus orci, malesuada et lectus vitae
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
													Celebrity
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 12
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Other -->
						<div class="row">
							<!-- Business -->
							<div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
								<div class="how2 how2-cl2 flex-sb-c m-b-35">
									<h3 class="f1-m-2 cl13 tab01-title">
										Business 
									</h3>


									<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
										View all
										<i class="fs-12 m-l-5 fa fa-caret-right"></i>
									</a>
								</div>

								<!-- Main Item post -->	
								<div class="m-b-30">
									<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
										<img src="images/post-10.jpg" alt="IMG">
									</a>

									<div class="p-t-20">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
												Bitcoin lorem ipsum dolor sit amet consectetur 
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												Finance
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->	
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-11.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Small Business
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 17
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-12.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Economy
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 16
											</span>
										</span>
									</div>
								</div>
							</div>

							<!-- Technology -->
							<div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
								<div class="how2 how2-cl6 flex-sb-c m-b-35">
									<h3 class="f1-m-2 cl18 tab01-title">
										Technology 
									</h3>


									<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
										View all
										<i class="fs-12 m-l-5 fa fa-caret-right"></i>
									</a>
								</div>

								<!-- Main Item post -->	
								<div class="m-b-30">
									<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
										<img src="images/post-34.jpg" alt="IMG">
									</a>

									<div class="p-t-20">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
												Apple iPhone X lorem ipsum dolor sit amet consectetur 
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												Mobile
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->	
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-35.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Camera
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 17
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-36.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Review
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 16
											</span>
										</span>
									</div>
								</div>
							</div>

							<!-- Life Style -->
							<div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
								<div class="how2 how2-cl5 flex-sb-c m-b-35">
									<h3 class="f1-m-2 cl17 tab01-title">
										Life Style 
									</h3>


									<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
										View all
										<i class="fs-12 m-l-5 fa fa-caret-right"></i>
									</a>
								</div>

								<!-- Main Item post -->	
								<div class="m-b-30">
									<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
										<img src="images/post-37.jpg" alt="IMG">
									</a>

									<div class="p-t-20">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
												Bitcoin lorem ipsum dolor sit amet consectetur 
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												Finance
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->	
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-38.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Small Business
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 17
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-39.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Economy
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 16
											</span>
										</span>
									</div>
								</div>
							</div>

							<!-- Fashion -->
							<div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
								<div class="how2 how2-cl6 flex-sb-c m-b-35">
									<h3 class="f1-m-2 cl18 tab01-title">
										Fashion 
									</h3>


									<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
										View all
										<i class="fs-12 m-l-5 fa fa-caret-right"></i>
									</a>
								</div>

								<!-- Main Item post -->	
								<div class="m-b-30">
									<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
										<img src="images/post-40.jpg" alt="IMG">
									</a>

									<div class="p-t-20">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
												Apple iPhone X lorem ipsum dolor sit amet consectetur 
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												Beauty
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->	
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-41.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Runway
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 17
											</span>
										</span>
									</div>
								</div>

								<!-- Item post -->
								<div class="flex-wr-sb-s m-b-30">
									<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
										<img src="images/post-42.jpg" alt="IMGDonec metus orci, malesuada et lectus vitae">
									</a>

									<div class="size-w-2">
										<h5 class="p-b-5">
											<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Shoe
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 16
											</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Travel  -->
						<div class="p-b-25 p-r-10 p-r-0-sr991">
							<div class="how2 how2-cl3 flex-s-c">
								<h3 class="f1-m-2 cl14 tab01-title">
									Travel
								</h3>
							</div>

							<div class="flex-wr-sb-s p-t-35">
								<div class="size-w-6 w-full-sr575">
									<!-- Item post -->	
									<div class="m-b-30">
										<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
											<img src="images/post-14.jpg" alt="IMG">
										</a>

										<div class="p-t-25">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
													You wish lorem ipsum dolor sit amet consectetur 
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
													Beach
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 18
												</span>
											</span>

											<p class="f1-s-1 cl6 p-t-18">
												Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
											</p>
										</div>
									</div>
								</div>

								<div class="size-w-7 w-full-sr575">
									<!-- Item post -->	
									<div class="m-b-30">
										<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
											<img src="images/post-15.jpg" alt="IMG">
										</a>

										<div class="p-t-10">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Donec metus orci, malesuada et lectus vitae
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
													Beach
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 17
												</span>
											</span>
										</div>
									</div>

									<!-- Item post -->	
									<div class="m-b-30">
										<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
											<img src="images/post-17.jpg" alt="IMG">
										</a>

										<div class="p-t-10">
											<h5 class="p-b-5">
												<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Donec metus orci, malesuada et lectus vitae
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
													Hotels
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
													Feb 16
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- Stay Connected -->
						<div class="p-b-35">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Stay Connected
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											6879 Fans
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Like
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											568 Followers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Follow
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											5039 Subscribers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Subscribe
										</a>
									</div>
								</li>
							</ul>
						</div>

						<!-- Most Popular -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Most Popular
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										1
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										2
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Proin velit consectetur non neque
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										3
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										4
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Proin velit justo consectetur non neque elementum
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
										5
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Proin velit consectetur non neque
									</a>
								</li>
							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-t-8 p-b-65">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
						<!-- Video -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									Featured Video
								</h3>
							</div>

							<div>
								<div class="wrap-pic-w pos-relative">
									<img src="images/video-01.jpg" alt="IMG">

									<button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
										<span class="fab fa-youtube"></span>
									</button>
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
											Music lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<span class="cl15">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>
							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								Subscribe
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								Get all latest content delivered to your email a few times a month.
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>
						
						<!-- Tag -->
						<div class="p-b-55">
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
									unitusaha
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Blogs
								</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<!-- Banner -->
	{{-- <div class="container m-b-15">
		<div class="flex-c-c">
			<a href="#">
				<img class="max-w-full" src="images/banner-01.jpg" alt="IMG">
			</a>
		</div>
	</div> --}}

	<!-- Latest -->
	{{-- <section class="bg0 p-t-50 p-b-90">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-50">
					<div class="p-r-10 p-r-0-sr991">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Latest Articles
							</h3>
						</div>

						<div class="p-b-40">
							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-43.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											Robot lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>

							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-44.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											Health lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>

							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-45.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											Success lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>

							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-46.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											Bitcon lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>

							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-47.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											American Bank lorem ipsum dolor sit amet
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>

							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-48.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											Macbook New 12 lorem ipsum dolor sit amet
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>

							<!-- Item post -->
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="blog-detail-01.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="images/post-49.jpg" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-01.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											You wish lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by John Alvarado
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
										Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
									</p>

									<a href="blog-detail-01.html" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
						</div>

						<a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
							Load More
						</a>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-50">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Banner -->
						<div class="flex-c-s">
							<a href="#">
								<img class="max-w-full" src="images/banner-03.jpg" alt="IMG">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
@endsection