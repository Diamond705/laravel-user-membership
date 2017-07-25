@extends('layouts.master')


@section('regform')

<div class="text-center col-md-4 col-lg-offset-4 showcase intro-form">
							<form role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
								<h3 class="text-center"> REGISTER </h3>
                                <!--begin social auth -->
                                <ul class="fade_in animated fadeIn list-inline" style="font-size: 20px;">
                                    <li>
                                        <a href="login/twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login/facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login/google">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="login/github">
                                            <i class="fa fa-github"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!--end social auth -->
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Name"
                                           value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" name="email" class="form-control"
                                           placeholder="Email Address" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" name="password" class="form-control"
                                           placeholder="Password" value="{{ old('password') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" name="password_confirmation"
                                           class="form-control" placeholder="Confirm Password" required>

                                </div>

                        


								<div class="form-group text-center">
									<button type="submit" class="btn btn-theme">Register</button>
								</div>

                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Already a User?
                                </a>


                            </form>
						</div>

@endsection

@section('content')

@endsection
