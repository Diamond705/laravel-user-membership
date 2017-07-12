@extends('layouts.master')

@section('content')

@section('regform')

<div class="col-sm-4 col-sm-offset-2 intro-form">
							<form role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
								<h3 class="text-center"> REGISTER </h3>
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<input id="name" type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus></input>
                                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
								</div>

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input id="email" type="email" name="email" class="form-control"placeholder="Email Address" value="{{ old('email') }}" required></input>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								</div> 

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<input id="password" type="password" name="password" class="form-control"placeholder="Password" value="{{ old('password') }}" required></input>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								</div>

                                <div class="form-group">
									<input id="password-confirm" type="password" name="password_confirmation" class="form-control"placeholder="Confirm Password" required></input>
                                    
								</div>

                        


								<div class="form-group text-center">
									<button type="submit" class="btn btn-theme">Register</button>
								</div>

                                <div class="form-group">
                                
                                </div>
								
							</form>
						</div>

@endsection
@endsection
