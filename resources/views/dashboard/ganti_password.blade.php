@extends('dashboard.app')

@section('body')

<div id="wrapper">
    @include('dashboard.inc.navbar')
    @include('dashboard.inc.sidebar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @component('dashboard.components.breadcrumb', ['pagename' => 'Ganti Password'])
                <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
            @endcomponent
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                        @include('dashboard.inc.alert')
                        <form class="form-horizontal" method="POST" action="{{ route('ganti_password') }}">
                            @csrf
                            <div class="panel panel-default">
                                    <div class="panel-heading text-muted">Ganti Password <span class="label label-info m-l-5">Baru</span></div>
                                    <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <div class="form-group row {{ $errors->has('password_lama') ? 'has-danger' : '' }}">
                                                    <label class="col-sm-12 col-md-4">Password Lama</label>
                                                    <div class="col-sm-12 col-md-8">
                                                        <input name="password_lama" type="password" class="form-control" value="{{ old('password_lama') }}">
                                                        @if($errors->has('password_lama'))
                                                            <div class="form-control-feedback">{{ $errors->first('password_lama') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('password') ? 'has-danger' : '' }}">
                                                    <label class="col-sm-12 col-md-4">Password Baru</label>
                                                    <div class="col-sm-12 col-md-8">
                                                        <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                                                        @if($errors->has('password'))
                                                            <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}">
                                                    <label class="col-sm-12 col-md-4">Ulangi Password Baru</label>
                                                    <div class="col-sm-12 col-md-8">
                                                        <input name="password_confirmation" type="password" class="form-control" value="{{ old('password_confirmation') }}">
                                                        @if($errors->has('password_confirmation'))
                                                            <div class="form-control-feedback">{{ $errors->first('password_confirmation') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer text-right">
                                                    <a href="{{ route('dashboard') }}" type="submit" class="btn btn-default waves-effect waves-light m-r-5" type="button"><span class="btn-label"><i class="zmdi zmdi-long-arrow-return"></i></span> Kembali</a>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class=" zmdi zmdi-save"></i></span> Update Password</button>
                                            </div>
                                    </div>
                            </div>
                        </form>
                </div>
        </div>
        </div>
        <!-- /.container-fluid -->
        @include('dashboard.inc.footer')
    </div>
</div>
@endsection