@extends('layouts.app')

@section('body')

<div id="wrapper">
     <!-- Top Navigation -->
     <nav class="navbar navbar-default navbar-static-top m-b-0">
          <div class="navbar-header">
               <!-- Toggle icon for mobile view -->
               <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
               <!-- Logo -->
               <div class="top-left-part">
                    <a class="logo" href="index.html">
                         <!-- Logo icon image, you can use font-icon also -->
                         <b><img src="{{ images('eliteadmin-logo.png') }}" alt="home" /></b>
                         <!-- Logo text image you can use text also -->
                         <span class="hidden-xs"><img src="{{ images('eliteadmin-text.png') }}" alt="home" /></span>
                    </a>
               </div>
               <!-- /Logo -->
               <!-- Search input and Toggle icon -->
               <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
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
                         <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ images('users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Agung Rio</b> </a>
                         <ul class="dropdown-menu dropdown-user scale-up">
                         <li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
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
                         <a href="#" class="waves-effect"><img src="{{ images('users/varun.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                         </a>
                         <ul class="nav nav-second-level">
                              <li><a href="javascript:void(0)"><i class="fa fa-key"></i> Change Password</a></li>
                         <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                         </ul>
                    </li>
                    <!-- User profile-->
                    <li class="nav-small-cap" style="padding-left: 30px !important"> Main Menu</li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li>
                         <a href="javascript:void(0)" class="waves-effect active"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Dropdown Link<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">2</span></span></a>
                         <ul class="nav nav-second-level">
                         <li><a href="javascript:void(0)">Link one</a></li>
                         <li><a href="javascript:void(0)">Link Two</a></li>
                         </ul>
                    </li>
               </ul>
          </div>
     </div>
     <!-- Left navbar-sidebar end -->
     <!-- Page Content -->
     <div id="page-wrapper">
          <div class="container-fluid">
               <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Starter Page</h4>
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                         <li class="active">Dashboard</li>
                         </ol>
                    </div>
                    <!-- /.breadcrumb -->
               </div>
               <!-- .row -->
               <div class="row">
                    <div class="col-md-12">
                         <div class="white-box">
                         <h3 class="box-title">Blank Starter page</h3>
                         </div>
                    </div>
               </div>
               <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
          <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
     </div>
     <!-- /#page-wrapper -->
     </div>

@endsection