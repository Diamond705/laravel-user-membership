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


        <div class="row">
            <!--begin section_box -->
            <div class="text-center">
                <img src="/images/{{ $user->avatar }}" style="height: 150px; width: 150px; border-radius: 50%" alt="">
                <hr>
                    <div class="section_title text-center">
                        <h2>You are now logged in!</h2>
                    </div>
                <form enctype="multipart/form-data" action="/welcome" method="post">
                    <input class="col-md-offset-5" type="file" name="avatar" required><br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-theme" value="Change Avatar">
                </form>
                {{--<p><a type="button" class="btn btn-theme" href="">Change Avatar</a></p>--}}



            </div>
            <!--end section_box -->

        </div>


@endsection