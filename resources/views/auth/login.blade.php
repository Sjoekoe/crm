@extends('layouts.outer-app')

@section('content')
    <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input id="email" type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" placeholder="Password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="remember"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </div>
    </form>
@endsection
