@extends('layouts.master')



@section('regform')

<div class="text-center col-sm-4 col-lg-offset-4 showcase intro-form">
							<form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
								<h3 class="text-center"> LOGIN </h3>
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
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input id="email" type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<input id="password" type="password" name="password" class="form-control"placeholder="Password" required="required">
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								</div>

                                {{-- <div class="form-group">
                                <label for="remember" style="color: #333b4d;">Remember Me
            <input style="height: 19px;" class="form-control" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> </label>
                                </div> --}}
                        


								<div class="form-group text-center">
									<button type="submit" class="btn btn-theme">Login</button>
								</div>

                                <div class="form-group">
                                
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Not Registered Yet?
                                </a>

							</form>
						</div>

@endsection

@section('content')



@endsection
