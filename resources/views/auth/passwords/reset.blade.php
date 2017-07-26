@extends('layouts.master')

@section('regform')
    <div class="text-center col-md-4 col-lg-offset-4 showcase intro-form">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form role="form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <h3 class="text-center"> RESET PASSWORD </h3>
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" name="email" class="form-control" placeholder="Email-Address"
                       value="{{ $email or old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" name="password_confirmation" class="form-control"
                       placeholder="Confirm Password" required>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-theme">Reset Password</button>
            </div>
            <a class="btn btn-link" href="/home">
               Home
            </a>


        </form>
    </div>
@endsection

@section('content')


@endsection
