<!-- Left navbar-sidebar -->
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse slimscrollsidebar">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search hidden-sm hidden-md hidden-lg">
				<!-- Search input-group this is only view in mobile -->
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
					</span>
				</div>
				<!-- / Search input-group this is only view in mobile-->
			</li>
			<!-- User profile-->
			<li class="user-pro">
				<a href="#" class="waves-effect"><img src="{{ asset('admin/img/users/'.Auth::user()->foto_profil) }}" alt="user-img" class="img-circle">
					<span class="hide-menu"> {{ Auth::user()->username }}<span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level">
					<li><a href="javascript:void(0)"><i class="fa fa-key"></i> Change Password</a></li>
					<li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-2').submit();"><i
								class="fa fa-power-off"></i> Logout</a>

						<form id="logout-form-2" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				</ul>
			</li>
			<!-- User profile-->
			<li class="nav-small-cap" style="padding-left: 30px !important"> Main Menu</li>
			<li><a href="{{ route('dashboard') }}" class="waves-effect">
				<i class="zmdi zmdi-view-dashboard zmdi-hc-fw fa-fw"></i>
				<span class="hide-menu">Dashboard</span></a>
			</li>
			<li>
				<a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-collection-case-play zmdi-hc-fw fa-fw"></i>
					<span class="hide-menu">Kelola Usaha<span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level">
					<li><a href="{{ route('jenis_unit_usaha.index') }}"><i class="zmdi zmdi-case zmdi-hc-fw fa-fw"></i> Jenis Usaha</a></li>
					<li><a href="{{ route('unit_usaha.index') }}"><i class="zmdi zmdi-case-play zmdi-hc-fw fa-fw"></i>Usaha</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:void(0)" class="waves-effect"><i class=" zmdi zmdi-receipt zmdi-hc-fw fa-fw"></i>
					<span class="hide-menu">Kelola Kerja Sama<span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level">
					<li><a href="{{ route('kerjasama.index') }}"><i class="zmdi zmdi-receipt zmdi-hc-fw fa-fw"></i>Kerja Sama</a></li>
					<li><a href="{{ route('program.index') }}"><i class="zmdi zmdi-file-text zmdi-hc-fw fa-fw"></i>Program</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-book zmdi-hc-fw fa-fw"></i>
					<span class="hide-menu">Kelola Blog<span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level">
					<li><a href="{{ route('kategori_blog.index') }}"><i class="zmdi zmdi-file zmdi-hc-fw fa-fw"></i>Kategori Blog</a></li>
					<li><a href="{{ route('blog.index') }}"><i class="zmdi zmdi-file-text zmdi-hc-fw fa-fw"></i>Blog</a></li>
				</ul>
			</li>
			<li><a href="{{ route("webpage") }}" class="waves-effect">
				<i class="zmdi zmdi-globe zmdi-hc-fw fa-fw"></i>
				<span class="hide-menu">Halaman Web</span></a>
			</li>
		</ul>
	</div>
</div>
<!-- Left navbar-sidebar end -->