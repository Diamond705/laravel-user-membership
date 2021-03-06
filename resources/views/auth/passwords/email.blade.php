@extends('layouts.master')

@section('regform')
    <div class="text-center col-md-4 col-lg-offset-4 showcase intro-form">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <h3 class="text-center"> RESET PASSWORD </h3>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" name="email" class="form-control" placeholder="Email-Address"
                       value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-theme">Send Password Reset Link</button>
            </div>

            <a class="btn btn-link" href="/">
                Return Home
            </a>


        </form>
    </div>
@endsection

@section('content')

@endsection
