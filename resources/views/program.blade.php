@extends('app')

@section("title")
	{{$program->judul }} -
@endsection

@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="/" class="breadcrumb-item f1-s-3 cl9">
					Beranda 
				</a>
				<a href="{{ route("page.kerjasama", ["id_kerjasama" => $program->kerjasama->id]) }}" class="breadcrumb-item f1-s-3 cl9">
					{{$program->kerjasama->nama }}
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{$program->judul }}
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
	<section class="bg0 p-b-70 p-t-5">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url({{ asset("website/images/program/".$program->gambar) }});">
			<div class="container h-full flex-col-e-c p-b-58">
				<a href="#" class="f1-s-10 cl0 hov-cl10 trans-03 text-uppercase txt-center m-b-33">
					{{$program->kerjasama->nama }}
				</a>

				<h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">
					{{$program->judul }}
				</h3>

				<div class="flex-wr-c-s">
					<span class="f1-s-3 cl0 m-r-15">
						<a href="#" class="f1-s-4 cl0 hov-cl10 trans-03">
							oleh {{$program->penulis->nama }}
						</a>
						<span class="m-rl-3">-</span>
						<span>
							Terbit {{$program->created_at->format("d M, Y") }}
						</span>
						<span class="m-l-10">
							Update {{$program->updated_at->format("d M, Y") }}
						</span>
					</span>
					<span class="f1-s-3 cl0 m-r-15">
						Dikunjungi {{$program->dikunjungi }}
					</span>
				</div>
			</div>
		</div>
		@if(!Auth::guest())
			@if(Auth::user()->id_jenis == 1)
				<div class="text-center m-t-40">
					<a href="{{ route("program.edit", ["id" =>$program->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
						Edit Artikel
					</a>
					<a href="{{ route("program.gambar", ["id" =>$program->id]) }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
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
								{!!$program->isi !!}
							</div>

							<h1 class="text-center anggota-title">ANGGOTA</h1>
							@if(count($program->anggota))
								<div class="row d-flex justify-content-center m-t-20">
									<div class="col-sm-12 col-md-8">
										<input type="text" class="form-control" id="cariAnggota" placeholder="Cari nama anggota..">
									</div>
								</div>
							@endif
							<div class="daftar-anggota flex-wrap d-flex justify-content-around" id="anggotaContainer">
								@if(count($program->anggota))
									@foreach($program->anggota as $anggota)
										<div class="anggota">
											<a href="{{ route("page.program.anggota", ["id" => $anggota->id]) }}">
		                                        <img class="img-circle img-thumbnail" width="80" src="{{ asset("website/images/anggota_program/".$anggota->foto) }}" alt="IMG">
		                                        <h4 class="nama-anggota">{{ $anggota->nama }}</h4>
		                                    </a>
										</div>
									@endforeach
								@else
									<h1 class="text-muted text-center">Belum Terdapat Anggota</h1>
								@endif
							</div>
							<!-- Share -->
							<div class="flex-s-s m-t-40">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								{!! Share::currentPage($program->judul, [], '', '')->facebook()->twitter()->whatsapp()->telegram() !!}
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

@section("js")
	<script src="{{ asset('js/share.js') }}"></script>
	<script>
		
		let cariAnggota = "";
		let urlImg = `{!! asset("website/images/anggota_program/") !!}`;
		let anggota = {!! json_encode($program->anggota) !!}

		function refreshAnggota(){
			let anggotaHtml = "";
			anggota.forEach(e => {
				if(e.nama.toLowerCase().includes(cariAnggota.toLowerCase())){
					anggotaHtml += `<div class="anggota">
										<a href="/program/anggota/${e.id}">
	                                        <img class="img-circle img-thumbnail" width="80" src="${urlImg+"/"+e.foto}" alt="IMG">
	                                        <h4 class="nama-anggota">${e.nama}</h4>
	                                    </a>
									</div>`
				}
			});
			$("#anggotaContainer").html(anggotaHtml)
		}

		$("#cariAnggota").keyup(function(e){
			cariAnggota = this.value
			refreshAnggota()
		})

	</script>
@endsection