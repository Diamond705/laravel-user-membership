@extends('layouts.master')

@section('content')

@section('regform')

<div class="col-sm-4 col-sm-offset-2 intro-form">
							<form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
								<h3 class="text-center"> LOGIN </h3>
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input id="email" type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus></input>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<input id="password" type="password" name="password" class="form-control"placeholder="Password" required="required"></input>
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
								
							</form>
						</div>

@endsection


@endsection
