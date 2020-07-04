<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
	<div class="navbar-header">
		<!-- Toggle icon for mobile view -->
		<a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i
			 class="ti-menu"></i></a>
		<!-- Logo -->
		<div class="top-left-part">
			<a class="logo" href="{{ route("dashboard") }}">
				<!-- Logo icon image, you can use font-icon also -->
				<b><img src="{{ asset('admin/img/eliteadmin-logo.png') }}" alt="home" /></b>
				<!-- Logo text image you can use text also -->
				<span class="hidden-xs"><img src="{{ asset('admin/img/eliteadmin-text.png') }}" alt="home" /></span>
			</a>
		</div>
		<!-- /Logo -->
		<!-- Search input and Toggle icon -->
		<ul class="nav navbar-top-links navbar-left hidden-xs">
			<li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="ti-menu"></i></a></li>
			<li>
				<form role="search" class="app-search hidden-xs">
					<input type="text" placeholder="Search..." class="form-control">
					<a href=""><i class="fa fa-search"></i></a>
				</form>
			</li>
		</ul>
		<!-- This is the message dropdown -->
		<ul class="nav navbar-top-links navbar-right pull-right" style="padding-right: 20px">
			<!-- .user dropdown -->
			<li class="dropdown">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('admin/img/users/'.Auth::user()->foto_profil) }}"
					 alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->nama }}</b> </a>
				<ul class="dropdown-menu dropdown-user scale-up">
					<li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
					<li role="separator" class="divider"></li>
					<li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
							 class="fa fa-power-off"></i> Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				</ul>
				<!-- /.user dropdown-user -->
			</li>
			<!-- /.user dropdown -->
		</ul>
	</div>
	<!-- /.navbar-header -->
	<!-- /.navbar-top-links -->
	<!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->