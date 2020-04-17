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
				<div class="col-sm-6 col-lg-5 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Visi dan Misi
						</h5>
					</div>
					<h6 class="text-white">Visi</h6>
					<p class="f1-s-1 cl11">Mewujudkan Desa Bongkasa Pertiwi yang mandiri dan masyarakat sejahtera</p>
					<h6 class="text-white m-t-10">Misi</h6>
					<ul>
						<li><p class="f1-s-1 cl11">Peningkatan perekonomian masyarakat Desa Bongkasa Pertiwi</p></li>
						<li><p class="f1-s-1 cl11">Pemaanfaatan aset desa untuk kesejahteraan Desa Bongkasa Pertiwi</p></li>
						<li><p class="f1-s-1 cl11">Peningkatan usaha masyarakat dalam pengelolaan potensi Desa Bongkasa Pertiwi</p></li>
						<li><p class="f1-s-1 cl11">Menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga Desa Bongkasa Pertiwi</p></li>
						<li><p class="f1-s-1 cl11">Membuka lapangan kerja di Desa Bongkasa Pertiwi</p></li>
						<li><p class="f1-s-1 cl11">Peningkatan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan dan pemerataan ekonomi Desa Bongkasa Pertiwi</p></li>
						<li><p class="f1-s-1 cl11">Peningkatan pendapatan masyarakat dan Pendapatan Asli Desa Bongkasa Pertiwi.</p></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Category
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