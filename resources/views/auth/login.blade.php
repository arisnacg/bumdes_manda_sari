@extends('auth.app')

@section('body')

<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal" method="POST" action="/login">
              @csrf
                <h2 class=" text-center m-b-20 text-muted"><b>SIGN IN</b></h2>
                <div class="form-group {{ $errors->has('username') ? 'has-danger' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" name="username" type="text" required placeholder="Username" value="{{ old('username') }}">
                        @if ($errors->has('username'))
                            <div class="form-control-feedback"> {{ $errors->first('username') }} </div>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('username') ? 'has-danger' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" required="" placeholder="Password">
                        @if ($errors->has('password'))
                            <div class="form-control-feedback"> {{ $errors->first('password') }} </div>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-info pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Remember me </label>
                        </div>
                </div>
                <div class="form-group text-center m-t-40 m-b-0">
                    <div class="col-xs-12">
                        <button class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection