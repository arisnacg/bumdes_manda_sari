@extends('app')

@section("title")
	Tentang Kami -
@endsection

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Beranda 
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					Tentang Kami
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				@include("inc.search_bar")
			</div>
		</div>
	</div>
	<!-- Page heading -->
	<div class="container p-t-4 p-b-35">
		<h2 class="f1-l-1 cl2">
			Tentang Kami
		</h2>
	</div>
	<!-- Content -->
	<section class="bg0 p-b-110">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<div class="text-center m-b-20 m-t-20">
							<img src="{{ asset("website/images/icons/logo-01.png") }}" alt="IMG-LOGO" width="100%" style="max-width: 500px">
						</div>
						<div class="how2 how2-cl4 flex-s-c m-b-20">
							<h3 class="f1-m-2 cl3 tab01-title">
								Visi dan Misi
							</h3>
						</div>
						<div class="deskripsi m-b-40">
							<h4 style="font-size: initial;"><b>Visi :</b></h4>
							<p class="f1-s-11 cl6 p-b-25">
								Mewujudkan Desa Bongkasa Pertiwi yang mandiri dan masyarakat sejahtera
							</p>
							<h4 style="font-size: initial;"><b>Misi :</b></h4>
							<ul>
								<li>Peningkatan perekonomian masyarakat Desa Bongkasa Pertiwi</li>
								<li>Pemaanfaatan aset desa untuk kesejahteraan Desa Bongkasa Pertiwi</li>
								<li>Peningkatan usaha masyarakat dalam pengelolaan potensi Desa Bongkasa Pertiwi</li>
								<li>Menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga Desa Bongkasa Pertiwi</li>
								<li>Membuka lapangan kerja di Desa Bongkasa Pertiwi</li>
								<li>Peningkatan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan dan pemerataan ekonomi Desa Bongkasa Pertiwi</li>
								<li>Peningkatan pendapatan masyarakat dan Pendapatan Asli Desa Bongkasa Pertiw</li>
							</ul>
						</div>
						<div class="how2 how2-cl4 flex-s-c m-b-20">
							<h3 class="f1-m-2 cl3 tab01-title">
								Izin Pendirian dan Operasi Organisasi 
							</h3>
						</div>
						<div class="deskripsi m-b-40">
							<ul>
								<li>BUMDes Mandala Sari didirikan pada 12 Juli 2017 melalui Peraturan Desa Bongkasa Pertiwi Nomor: 5 Tahun 2017.</li>
								<li>Susunan Pengurus diputuskan pada 19 Januari 2017 melalui Keputusan Perbekel Bongkasa Pertiwi Nomor : 31 Tahun 2017</li>
								<li>Kemudian dilakukan perubahan struktur pengurus pada Februari 2018 melalui Keputusan Perbekel Bongkasa Pertiwi Nomor : 47 Tahun 2018</li>
							</ul>
						</div>
						<div class="how2 how2-cl4 flex-s-c m-b-20">
							<h3 class="f1-m-2 cl3 tab01-title">
								Izin Pendirian dan Operasi Organisasi 
							</h3>
						</div>
						<div class="deskripsi m-b-40">
							<table class="table table-bordered">
								<thead>
									<th>No</th>
									<td>Nama</td>
									<th>Jabatan</th>
									<th>No Telepon</th>
									<th>Pendidikan</th>
								</thead>
								<tbody>
									@foreach($anggota as $i => $e)
									<tr>
										<td>{{ $i + 1 }}</td>
										<td>{{ $e->nama }}</td>
										<td>{{ $e->jabatan }}</td>
										<td>{{ ($e->no_hp)? $e->no_hp : "-" }}</td>
										<td>{{ $e->pendidikan }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="how2 how2-cl4 flex-s-c m-b-20">
							<h3 class="f1-m-2 cl3 tab01-title">
								Usaha yang Dikembangkan
							</h3>
						</div>
						<div class="deskripsi m-b-40">
							<p style="text-align: justify">Desa Bongkasa Pertiwi merupakan satu dari sebelas desa wisata yang ditetapkan oleh Pemerintah Kabupaten Badung, melalui Peraturan Bupati No 47 Tahun 2010. Desa ini masih tergolong muda, karena baru berdiri sejak 2003. Desa ini awalnya merupakan satu desa dinas dengan Desa Bongkasa, namun karena perkembangan penduduk akhirnya desa ini resmi dimekarkan dan ditetapkan oleh Bupati Badung dalam SK No 1067 tahun 2003 dan I Made Suarjana, selaku pejabat Kepala Desa Bongkasa Pertiwi saat itu. Desa ini terdiri dari tiga banjar Dinas, yaitu Banjar Karang Dalem I, Banjar Karang Dalem II, dan Banjar Tegal Kuning. </p>
							<p style="text-align: justify">Secara geografis Desa Bongkasa Pertiwi terletak pada 08° 28' 13.4724" LS 115° 14' 19.6152" BT. , 307 m diatas permukaan laut, dengan luas ± 156 Ha.. Beriklim tropis lembab, dengan suhu rata-rata 21-300 C, dan membentang Sungai Ayung sepanjang ± 5 Km di sisi timur desa. </p>
							<p style="text-align: justify">Jumlah penduduk di Desa Bongkasa Pertiwi sebanyak 815 KK atau 2.768 jiwa (L 1.365; P 1.403). Pekerjaan penduduk meliputi, petani, buruh, jasa dan perdagangan, tukang, pengerajin, pegawai negeri dan peternakan. Hampir setiap keluarga masyarakat desa ini memelihara ternak  terutama sapi dan babi. Rata-rata setiap keluarga mempunyai 2 ekor babi dan 1 ekor sapi. Ternak dikelola secara tradisional dengan sistim kandang. Sedangkan limbah ternak dibuang sedemikian rupa dan kadang-kadang dalam jangka waktu tertentu dimanfaatkan sebagai pupuk. Limbah yang tidak terkelola ini, seringkali menimbulkan bau yang kurang sedap, mencemari lingkungan, berpotensi sebagai sumber penyakit dan tidak baik secara estetika</p>
							<p style="text-align: justify">Desa Bongkasa Pertiwi dengan luas 1,56 Km2 atau 156,00 Ha merupakan desa agraris dengan sebagian besar peruntukan lahannya berupa pertanian padi sawah dan perkebunan. Desa yang berada pada ketinggian < 500 dpl memiliki banyak sumber  mata air yang dimanfaatkan oleh masyarakat setempat secara bersama-sama sebagai  air baku untuk kebutuhan domestik seperti air minum. mandi, cuci, toilet dan sebagainya.  </p>
							<p style="text-align: justify">Dari Jumlah penduduk Desa Bongkasa Pertiwi sebanyak 2.557 orang,   yang tamat SLTP adalah sebanyak 312 orang, tamat SLTA sebanyak 477 orang.  Penduduk dengan tingkat pendidikan yang lebih tinggi setingkat kampus, yakni yang menyelesaikan pendidikan tingkat diploma sebanyak 176 orang, S1 dan S2 masing-masing sebanyak 51 orang dan 7 orang. Melihat tingkat pendidikan penduduk seperti ini dapat dikatakan bahwa masyarakat Desa Bongkasa Pertiwi sangat peduli dan memberikan apresiasi yang tinggi akan pentingnya arti pendidikan formal. </p>
							<p style="text-align: justify">Dari sisi mata pencaharian penduduk, Desa Bongkasa Pertiwi sebagai desa agraris menjadikan sebagian besar penduduknya bekerja di sektor pertanian. Sebagian penduduk yang memiliki sawah dan kebun, khususnya pada generasi tuanya tetap eksis di sektor pertanian padi sawah, dan untuk juga mengembangkan berbagai tanaman buah-buahan. </p>
							<p style="text-align: justify">Selain bertani, sebagian masyarakat desa ini, memiliki keahlian dalam berkerajinan perak. Menurut data yang diperoleh terdapat sekitar 26 industri pengerajin perak di desa ini. Hasil perak biasa dipasarkan ke Desa Celuk  Kecamatan Sukawati, Gianyar, yang terkenal dengan kawasan souvenir kerajinan perak.  Hasil  kerajinan  masyarakat  ini  dapat  dijadikan  souvenir (something to buy)  untuk wisatawan yang berkunjung. </p>
							<p style="text-align: justify">Potensi Desa Bongkasa Pertiwi ditelaah dari obyek daya tarik wisata sudah memenuhi syarat. Atraksi wisata sebagai indikator utamanya cukup beragam dapat disuguhkan. Mulai dari pemandangan alam perdesaan seperti alur lebah Sungai Ayung yang berkelok-kelok membentang dari hulu hinga hilir layaknya naga besar, landskap pertanian mulai dari persawahan, gubuk sederhana tempat berteduh petani dan sekaligus lokasi pemeliharaan ternaknya, hamparan sawah nan hijau atau padi menguning serta pengembala bebek menjadi tawaran atraksi wisata alam yang memadai. Aspek sosial-budaya, kegiatan ritual keagamaan di areal sawah, bedugul, Pura Subak, ataupun Pura Kahyangan Tiga. Hal yang unik di Bongkasa Pertiwi adanya Batu Megong, di Pura Subak yang dapat dijadikan simbul budaya, di samping arsitektur Bali pada rumah tradisional masyarakat setempat.  Aktivitas keseharian petani bekerja di sawah, menjaga hubungan kekarabatan yang harmonis, membuat kerajinan, serta masakan tradisional setempat menjadi atraksi sosial budaya. Atraksi buatan untuk rekreasi dapat dijumpai pada objek wisata Bali Swing, Paintball dan ATV ride serta pusat kerajinan perak. </p>
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-5 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-5">
						@include("inc.sidebar")
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection