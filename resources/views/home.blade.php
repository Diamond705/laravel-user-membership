@extends('layouts.master')

@section('welcome-section')
    <div class="row showcase text-center">

        <div>
            @if (Auth::guest())

                <div class="wow bounceInDown">
                    <h2>User Membership by <a href="http://github.com/Diamond705">@Diamond705</a></h2>
                    <h3><span class="rotate">A User membership script built with Laravel</span></h3>
                    <a type="button" class="btn btn-theme-outline" href="{{ route('login') }}"> Login</a>&nbsp;&nbsp;&nbsp;
                    <!--<button type="button" class="btn btn-theme-outline">Login</button>-->
                    <a type="button" class="btn btn-theme" href="{{ route('register') }}"> Register</a>
                    <!--<button type="button" class="btn btn-theme">Register</button>-->
                </div>

            @else

                <div class="wow bounceInDown">
                    <h2>User Membership by <a href="http://github.com/Diamond705">@Diamond705</a></h2>
                    <h3><span class="rotate">Welcome, {{ Auth::user()->name }} </span></h3>
                    <a type="button" class="btn btn-theme-outline" href="/logout"> Logout</a>
                    <!--<button type="button" class="btn btn-theme-outline">Login</button>-->
                </div>

            @endif

        </div>


    </div>

    @endsection

@section('content')


@endsection